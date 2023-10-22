<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Region extends Model
{
    use HasFactory;


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


}
