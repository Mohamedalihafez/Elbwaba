<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;

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
        return view('pages.advertisement.index');
    }
    public function modify(AdvertisementRequest $request)
    {
        Advertisement::upsertInstance($request);
        return redirect()->route('advertisement');
    }
}
