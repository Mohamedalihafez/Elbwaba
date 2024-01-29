<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdvertisementRequest;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TermsController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::user()->isSuperAdmin())
            return view('admin.pages.term.index',[
                'terms_general' => Term::where('type_id', 1)->filter($request->all())->paginate(50),
                'terms_buyer'   => Term::where('type_id', 2)->filter($request->all())->paginate(50),
                'terms_seller'  => Term::where('type_id', 3)->filter($request->all())->paginate(50),
        ]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upsert(Term $terms)
    {
            return view('admin.pages.term.upsert',[
                'term' => $terms,
        ]);
    }


    public function modify(AdvertisementRequest $request)
    {
        return Term::upsertInstance($request);
    }

    public function destroy(Term $terms)
    {
        return $terms->deleteInstance();
    }

    public function filter(Request $request)
    {
        return view('admin.pages.term.index',[
            'terms_general' => Term::where('type_id', 1)->filter($request->all())->paginate(50),
            'terms_buyer'   => Term::where('type_id', 2)->filter($request->all())->paginate(50),
            'terms_seller'  => Term::where('type_id', 3)->filter($request->all())->paginate(50),
        ]);
    }
}
