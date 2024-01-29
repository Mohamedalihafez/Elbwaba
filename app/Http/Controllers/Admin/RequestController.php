<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Request as ModelsRequest;
use Illuminate\Http\Request;
use Toastr;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Request = ModelsRequest::latest()->get();
        return view('admin.pages.request.manage_request',compact('Request'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Request = new Request;
        $Request->name = $request->name;
        $Request->subject = $request->subject;
        $Request->email = $request->email;
        $Request->message = $request->message;
        $save =  $Request->save();

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Request = Request::find($id);
        return view('admin.pages.Request.edit_Request',compact('Request'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Request = Request::find($id);
        $Request->name = $request->name;
        $Request->subject = $request->subject;
        $Request->email = $request->email;
        $Request->message = $request->message;
        $save =  $Request->save();

        return redirect()->route('manage_Request');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $Request = Request::find($id);
       $save =  $Request->delete();
   
        return redirect()->back();
    }
}
