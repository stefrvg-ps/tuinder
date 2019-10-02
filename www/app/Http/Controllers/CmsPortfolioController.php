<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use Illuminate\Support\Facades\Storage;

class CmsPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $CmsPictures = Picture::all();

        return view('admin/portfolio/index')->with([
            'CmsPictures' => $CmsPictures
        ]);
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
        $this->validate($request, [
            'desc' => 'required|max:20',
            'type' => 'required',
            'image' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048'
        ]);
        
        $picture = new Picture;
        if($request->hasFile('image')){
            $imageName = time().'_PORTFOLIO.'.$request->file('image')->getClientOriginalExtension();
            $picture->image_name = $imageName;
            Storage::disk('local')->putFileAs('portfolio', $request->file('image'), $imageName);
        }
        $picture->image_desc = $request->input('desc');
        $picture->image_type = $request->input('type');
        $picture->save();

        return redirect('/admin/portfolio')->with('success', 'Succesvol een foto toegevoegd');
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
        $picture = Picture::findOrFail($id);
        return view('admin.portfolio.edit')->with('picture', $picture);
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
            'desc' => 'required|max:20',
            'type' => 'required',
            'image' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048'
        ]);
        $picture = Picture::findOrFail($id);
        if($request->hasFile('image')){
            if($picture->image_name != 'stock_picture_image.png'){
                Storage::disk('local')->delete('portfolio/'.$picture->image_name);
            }
            $imageName = time().'_PORTFOLIO.'.$request->file('image')->getClientOriginalExtension();
            $picture->image_name = $imageName;
            Storage::disk('local')->putFileAs('portfolio', $request->file('image'), $imageName);
        }

        $picture->image_desc = $request->input('desc');
        $picture->image_type = $request->input('type');
        $picture->update();

        return redirect('/admin/portfolio')->with('success', 'Succesvol foto aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::findOrFail($id);
        Storage::disk('local')->delete('portfolio/'.$picture->image_name);
        $picture->delete();

        return redirect('/admin/portfolio')->with('success', 'Succesvol een foto verwijderd');
    }
}
