<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Advertisement;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertisementController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()->isSuperAdmin())
            return view('admin.pages.advertisement.index',[
                'advertisements' => Advertisement::filter($request->all())->paginate(50),
                
            ]);
        else 
            abort(404);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upsert(Advertisement $advertisementadmin)
    {
        if(Auth::user()->isSuperAdmin())
            return view('admin.pages.advertisement.upsert',[
                'advertisement' => $advertisementadmin,
                'regions' => Region::all(),
            ]);
        else 
            abort(404);
    }

    public function status(Request $request)
    {
        return Advertisement::advertisementUpdate($request);
    }



    public function modify(AdvertisementRequest $request)
    {
        return Advertisement::upsertInstance($request);
    }

    public function destroy(Advertisement $advertisementadmin)
    {
        return $advertisementadmin->deleteInstance();
    }

    public function filter(Request $request)
    {
        return view('admin.pages.advertisement.index',[
            'advertisements' => Advertisement::filter($request->all())->paginate(50)
        ]);
    }
}
