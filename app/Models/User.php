<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\Scopes\TenantScope;

use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'role_id',
        'phone',
        'country_code',
        'email',
        'password',
    ];
    protected static function booted()
    { 
        if(Auth::hasUser())
        {
            if(! Auth::user()->isSuperAdmin())
            {
                static::addGlobalScope(new TenantScope);
            } 
        } 
    }
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%')
                ->orWhere('email','like','%'.$request['name'].'%')
                ->orWhere('phone','like','%'.$request['name'].'%');
        }

        return $query;
    }
    public function isSuperAdmin() 
    {
        return auth()->user()->role->id == SUPERADMIN;
    }

    public function isPartner() 
    {
        return auth()->user()->role->id == USER;
    }

    public function allPrivilege() 
    {
        return auth()->user()->role->all_privileges == 1;
    }

    public function role()
    {
        return  $this->belongsTo(Role::class, 'role_id');
    }
}
