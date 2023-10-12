<?php

namespace App\Models;

use App\Models\Scopes\TenantScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class City extends Model
{
    use HasFactory;



    static function fetchRegion($request)
    {
        $data = City::where("region_id", $request->region_id)->get(["name_ar", "id"]);
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


}
