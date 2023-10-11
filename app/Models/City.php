<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class City extends Model
{
    use HasFactory;

    // protected $fillable = ['user_id', 'action', 'message', 'action_model',  'action_id' ,'user_name', 'clinic_id'];

    // protected static function booted()
    // { 
    //     if(Auth::hasUser())
    //     {
    //         if(! Auth::user()->isSuperAdmin())
    //         {
    //             static::addGlobalScope(new TenantScope());
    //         } 
    //     } 
    // }

    static function fetchRegion($request)
    {
        $data = City::where("region_id", $request->region_id)->get(["name_ar", "region_id"]);
        return $data;
    }

    public function getCountAttribute()
    {
        return $this->count();
    }

    public function deleteInstance()
    {
        return $this->delete();
    }

    //Scopes
    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('message','like','%'.$request['name'].'%');
        }

        return $query;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
