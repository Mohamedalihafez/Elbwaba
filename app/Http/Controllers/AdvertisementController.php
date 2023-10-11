<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Models\City;
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
        return view('pages.advertisement.index' ,[ 'regions' => $regions ]);
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
