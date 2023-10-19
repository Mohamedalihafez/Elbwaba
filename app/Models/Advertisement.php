<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Advertisement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title' ,'building_id' ,'category_id' ,'description', 'currentLat','currentLng','region_id','city_id' ,'district'	 ,'street','ads_type','license_id','street_type','face_type','width','age','rooms','halls','bathrooms','flats','ads_direction','floors'	,'stores_number','phone', 'country_code','question_1','question_2','question_3','phone_2','link','price','location','seen'	,'user_id'
   ];

    static function upsertInstance($request)
    {
        $request->merge([
            'user_id' => Auth::user()->id
        ]);

        $advertisement = Advertisement::updateOrCreate(
        [
            'id' => $request->id ?? null
        ],
            $request->all()
        );


        foreach($request->ads_images as $key => $result){
   
            $imageName = 'ads_' . $advertisement->id .'_' .$result->getClientOriginalName()  . '.png';
            $result->move('ads/' . $advertisement->id . '/', $imageName);
            $advertisement->gallaries()->updateOrCreate(
                [
                    'imageable_id' => $advertisement->id,
                    'name' => $imageName,
                    'use_for' => 'ads'
                ],
                [
                    'imageable_id' => $advertisement->id,
                    'second_id' => $key,
                    'name' => $imageName,
                    'use_for' => 'ads'
                ]);    
        }

        $advertisement->items()->sync($request->items);

        return $advertisement;    
    }

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%');
        }

        return $query;
    }

    //Relations
    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function gallaries()
    {
        return $this->morphMany(Gallary::class, 'imageable');
    }

    public function region()
    {
      return  $this->belongsTo(Region::class, 'region_id');
    }

    public function city()
    {
      return  $this->belongsTo(City::class, 'city_id');
    }

    public function user()
    {
      return  $this->belongsTo(User::class, 'user_id');
    }

    public function building()
    {
      return  $this->belongsTo(Building::class, 'category_id');
    }

    public function items()
    {
        return $this->belongsToMany(Item::class);
    }

    
}
