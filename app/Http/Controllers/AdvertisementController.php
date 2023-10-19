<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Building;
use App\Models\Category;
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
    public function index( Category $category)
    {
        $regions = Region::all();
        $buildings = Building::where('category_id' , $category->id)->get();
        $items = Item::where('category_id' , $category->id)->get();
        return view('pages.advertisement.index' ,[ 'regions' => $regions , 'items' => $items, 'buildings' => $buildings , 'category' => $category ]);
    }


    public function category()
    {
        $categories= Category::all();
        return view('pages.advertisement.category' , ['categories' => $categories]);
    }

    public function show( Advertisement $advertisement)
    {
        $items = Item::all();
        
        return view('pages.advertisement.show' ,[ 'advertisement' => $advertisement , 'items' => $items]);
    }

    public function all( Request $request)
    {
        dd($request);
        $advertisements = Advertisement::where('category_id' , $request->building_id)->Where('title', 'like', '%' . $request->ads_title .'%')->orderBy('id', 'DESC')->paginate(1);
        
        if(count($advertisements) == 0 )
        {
            $advertisements = Advertisement::where('category_id' , $request->building_id)->orderBy('id', 'DESC')->paginate(1);
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
