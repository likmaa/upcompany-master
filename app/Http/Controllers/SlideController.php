<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $slides=Slide::with('image')->get();
        return view('admin.slide.index',compact('slides'));
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
     * @param  \App\Slide  $Slide
     * @return \Illuminate\Http\Response
     */
    public function show(Slide $slide)
    {
        //
        if (request()->ajax()) {
            
            // return $slide->with('image')->where('id',$slide->id)->first(); Correcte
            return $slide->loadMissing('image');
        }

        return 'done';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slide  $Slide
     * @return \Illuminate\Http\Response
     */
    public function edit(Slide $slide)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slide  $Slide
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slide $slide)
    {
        //
        /*$response=$request->input();
        if ($request->hasFile('image')) {
            
            $response['image']=$request->file('image')->getClientOriginalName();
        }

        return response($response);*/
        $slide->title=$request->title;
        $slide->sub_title=$request->sub_title;

        if ($request->hasFile('image')) {
            
            $fileName=$request->file('image')->getClientOriginalName();

            $image=$slide->image()->first();
            Storage::disk('images')->put('/home/'.$fileName, File::get($request->file('image')));

            if (Storage::disk('images')->exists('/home/'.$fileName)) {

                $image->path='images/home/'.$fileName;
                $slide->image()->save($image);
            }
        }
        $slide->save();
        
        return back()->with('update','success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slide  $Slide
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slide $slide)
    {
        //
    }
}
