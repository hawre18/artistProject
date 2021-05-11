<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtistRequest;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artist=Artist::get();
        return view('Admin..artistinformation.index',compact('artist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.artistinformation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistRequest $request)
    {
        $imagesUrl = $this->uploadImages($request->file('images'));
        Artist::create(array_merge($request->all() , [ 'images' => $imagesUrl]));

        return redirect(route('aboutme.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return view('Admin.artistinformation.edit' , compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistRequest $request, Artist $artist)
    {
        $file = $request->file('images');
        $inputs = $request->all();

        if($file) {
            $inputs['images'] = $this->uploadImages($request->file('images'));
        } else {
            $inputs['images'] = $artist->images;
            $inputs['images']['thumb'] = $inputs['imagesThumb'];

        }

        unset($inputs['imagesThumb']);
        $artist->update($inputs);

        return redirect(route('aboutme.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        return $artist;
            $artist->delete();
            return redirect(route('aboutme.index'));

    }
}
