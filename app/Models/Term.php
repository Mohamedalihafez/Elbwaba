<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use App\Scopes\TenantScope;

class Term extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title', 'description' , 'type_id'
    ];

    
    //Tenancy
    protected static function booted()
    { 
        if(Auth::hasUser())
        {
            if(! Auth::user()->isSuperAdmin())
            {
                static::addGlobalScope(new TenantScope(''));
            } 
        } 
    }

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%');
        }

        return $query;
    }

    static function upsertInstance($request)
    {   
        $term = Term::updateOrCreate(
            [
                'id' => $request->id ?? null
            ],
                $request->all()
        );

        return $term;
    }


    public function deleteInstance()
    {
        return $this->delete();
    }


}
