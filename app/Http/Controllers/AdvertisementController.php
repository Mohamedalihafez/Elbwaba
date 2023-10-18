<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Building;
use App\Models\City;
use App\Models\Item;
use App\Models\Region;

class AdvertisementController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $regions = Region::all();
        $buildings = Building::all();
        $items = Item::all();
        return view('pages.advertisement.index' ,[ 'regions' => $regions , 'items' => $items, 'buildings' => $buildings]);
    }

    public function show( Advertisement $advertisement)
    {
        $items = Item::all();
        
        return view('pages.advertisement.show' ,[ 'advertisement' => $advertisement , 'items' => $items]);
    }

    public function all( Request $request)
    {

        $advertisements = Advertisement::where('category_id' , $request->building_id)->Where('title', 'like', '%' . $request->ads_title .'%')->paginate(20);
        
        if(count($advertisements) == 0 )
        {
            $advertisements = Advertisement::where('category_id' , $request->building_id)->paginate(20);
        }

        return view('pages.advertisement.all' , ['advertisements' => $advertisements] );
    }


    public function fetchRegion(Request $request)
    {
       return City::fetchRegion($request);
    }

    public function modify(AdvertisementRequest $request)
    {
        Advertisement::upsertInstance($request);
        return redirect()->route('advertisement');
    }
}
