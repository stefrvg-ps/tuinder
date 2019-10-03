<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CmsHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::where('id', 1)->first();
        return view('admin.index.index')->with('about',$about);
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
        //
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
        //
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
        $this->validate($request, [

            ]);
            
        $about = About::findOrFail($id);
        if($request->hasFile('image')){
            $imageName = time().'_ABOUT.'.$request->file('image')->getClientOriginalExtension();
            $about->image_name = $imageName;
            Storage::disk('local')->putFileAs('about', $request->file('image'), $imageName);
        }
        $about->title = $request->input('title');
        $about->desc = $request->input('desc');
        $about->pro1 = $request->input('pro1');
        $about->pro2 = $request->input('pro2');
        $about->pro3 = $request->input('pro3');
        $about->save();

        return redirect('/admin/index')->with('success', 'Succesvol de homepagina bewerkt');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
