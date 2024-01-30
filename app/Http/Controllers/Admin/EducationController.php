<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $education = Education::latest()->get();
        return view('admin.pages.education.manage_education', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.pages.education.create_education');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $education = new Education;
        $education->group = $request->group ?? '';
        $education->institute_name = $request->institute_name ?? '';
        $education->short_description = $request->short_description ?? '';
        $education->session = $request->session ?? '';
        $education->name_of_examination = $request->name_of_examination ?? '';
        $education->user_id = Auth::user()->id;

        $save = $education->save();

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
        $education = Education::find($id);
        return view('admin.pages.education.edit_education', compact('education'));
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
        $education = Education::find($id);
        $education->group = $request->group ?? '';
        $education->institute_name = $request->institute_name ?? '';
        $education->short_description = $request->short_description ?? '';
        $education->session = $request->session ?? '';
        $education->name_of_examination = $request->name_of_examination ?? '';
        $education->user_id = Auth::user()->id;

        $save = $education->save();

        return redirect()->route('manage_education');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $destroy = $education->delete();

        return redirect()->back();

    }
}
