<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name' , 'title' ,'description' ,'phone_1' ,'phone_2' ,'price' ,'location' ,'seen' ,'action_model' ,'user_id'								
   ];

    static function upsertInstance($request)
    {
        
        $advertisement = Advertisement::updateOrCreate(
            [
                'id' => $request->id ?? null
            ],
                $request->all()
            );

        return $advertisement;    
    }

    //Relations
    public function users()
    {
        return $this->hasMany(User::class);
    }


}
