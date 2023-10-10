<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Building extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'compound_id',
        'user_id'
    ];

    static function upsertInstance($request)
    {
        // $user_id = Compound::find($request->compound_id)->user->id;

        // $request->merge([
        //     'user_id' => $user_id
        // ]);

        $building = Building::updateOrCreate(
            [
                'id' => $request->id ?? null
            ],
                $request->all()
            );

        return $building;
    }

    public function scopeFilter($query,$request)
    {
        if ( isset($request['name']) ) {
            $query->where('name','like','%'.$request['name'].'%');
        }

        return $query;
    }
    static function buildingSelect($request)
    {
        $results = count($request->term) == 2 ? Building::where('name','like','%'.$request->term["term"].'%')->take(10)->get()->toArray() : Building::filter($request->all())->take(10)->get()->toArray();

        return response()->json($results);
    }

    public function deleteInstance()
    {
        return $this->delete();
    }
    
    public function compound()
    {
        return $this->belongsTo(Compound::class);
    }
}
