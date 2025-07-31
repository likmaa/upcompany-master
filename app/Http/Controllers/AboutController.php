<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abouts=About::with('image')->where('type','about')->limit(2)->get();

        return view('admin.about.index',compact('abouts'));
    }

    public function updateAbouts(Request $request)
    {
        $descriptions=$request->only('description_1','description_2');
        $abouts=About::with('image')->where('type','about')->limit(2)->get();

        $abouts[0]->description=$descriptions['description_1'];
        $abouts[1]->description=$descriptions['description_2'];

        if ($request->hasFile('image_1')) {
            $image=$request->file('image_1');

            Storage::disk('images')->put('/home/'.$image->getClientOriginalName(),File::get($image));

            if (Storage::disk('images')->exists('/home/'.$image->getClientOriginalName())) {
                
                $img=$abouts[0]->image()->get()->first();
                $img->path='images/home/'.$image->getClientOriginalName();

                $abouts[0]->image()->save($img);
            }
            # code...
        }

        if ($request->hasFile('image_2')) {
            $image=$request->file('image_2');

            Storage::disk('images')->put('/home/'.$image->getClientOriginalName(),File::get($image));

            if (Storage::disk('images')->exists('/home/'.$image->getClientOriginalName())) {
                
                $img=$abouts[1]->image()->get()->first();
                $img->path='images/home/'.$image->getClientOriginalName();

                $abouts[1]->image()->save($img);
            }
            # code...
        }
        $abouts[0]->save();
        $abouts[1]->save();

        return back()->with('update','success');
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
