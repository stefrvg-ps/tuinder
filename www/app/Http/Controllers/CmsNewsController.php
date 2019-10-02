<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\News;

use Illuminate\Support\Facades\Storage;

class CmsNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $CmsNews = news::all();

        return view('admin/news/index')->with([
            'CmsNews' => $CmsNews
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
            'title' => 'required|max:20',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,svg,gif,jpeg|max:2048'
        ]);
        
        $news = new News;
        if($request->hasFile('image')){
            $imageName = time().'_NEWS.'.$request->file('image')->getClientOriginalExtension();
            $news->image_name = $imageName;
            Storage::disk('local')->putFileAs('news', $request->file('image'), $imageName);
        }
        $news->news_desc = $request->input('description');
        $news->title = $request->input('title');
        $news->save();

        return redirect('/admin/news')->with('success', 'Succesvol een foto toegevoegd');
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
        //
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
