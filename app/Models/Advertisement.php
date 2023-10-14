<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title' ,'description', 'currentLat','currentLng','region_id','city_id' ,'district'	 ,'street','ads_type','license_id','street_type','face_type','width','age','rooms','halls','bathrooms','flats','ads_direction','floors'	,'stores_number','phone', 'country_code','question_1','question_2','question_3','phone_2','price','location','seen'	,'user_id'
   ];

    static function upsertInstance($request)
    {
        $advertisement = Advertisement::updateOrCreate(
        [
            'id' => $request->id ?? null
        ],
            $request->all()
        );

        if($request->ads_images){
            foreach($request->ads_images as $key => $result){
                foreach ($result as $key_ads => $ads) {
                    $ad_image = 'ad_' . $key . $key_ads . '.png';

                    $request->ads_images[$key][$key_ads]->move('ads/' . $key . $key_ads . '/', $ad_image);
                    $advertisement->gallaries()->updateOrCreate(
                        [
                            'imageable_id' => $key_ads,
                            'second_id' => $key,
                            'use_for' => 'ads'
                        ],
                        [
                            'imageable_id' => $key_ads,
                            'second_id' => $key,
                            'name' => $ad_image,
                            'use_for' => 'ads'
                        ]);
                }            
            }
        }
        return $advertisement;    
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
    


}
