<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Building;
use App\Models\Category;
use App\Models\Item;
use App\Models\Partner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $advertisements = Advertisement::paginate(15);
        $partners = Partner::all();
        $buildings = Building::all();
        $categories = Category::all();
        return view('pages.index' , ['advertisements' =>  $advertisements , 'partners' => $partners , 'categories' => $categories , 'buildings' =>  $buildings ]);
    }
}
