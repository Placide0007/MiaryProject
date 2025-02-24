<?php

namespace App\Http\Controllers;

use App\Http\Requests\CultureRequest;
use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::with('user')->latest()->paginate(8);
        return view('culture.index', compact('cultures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('culture.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CultureRequest $cultureRequest)
    {
        $imgpath = null;
        if($cultureRequest->hasFile('image'))
        {
            $imgpath = $cultureRequest->file('image')->store('images','public');
        }

        $audiopath = null;
        if($cultureRequest->hasFile('audio')){
            $audiopath = $cultureRequest->file('audio')->store('audios','public');
        }

        Culture::create([
            'title' => $cultureRequest->title,
            'description' => $cultureRequest->description,
            'user_id' => Auth::id(),
            'image' => $imgpath  ?? null,
            'audio' => $audiopath  ?? null
        ]);
        return redirect()->route('cultures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $culture = Culture::findOrFail($id);
        return view('culture.show', compact('culture'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $culture = Culture::findOrFail($id);
        return view('culture.create', compact('culture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CultureRequest $cultureRequest, string $id)
    {
        $culture = Culture::findOrFail($id);


        $culture->title = $cultureRequest->input('title');
        $culture->description = $cultureRequest->input('description');


        if ($cultureRequest->hasFile('image')) {

            if ($culture->image) {
                Storage::delete('public/' . $culture->image);
            }

            $imgpath = $cultureRequest->file('image')->store('images', 'public');
            $culture->image = $imgpath;
        }


        if ($cultureRequest->hasFile('audio')) {

            if ($culture->audio) {
                Storage::delete('public/' . $culture->audio);
            }

            $audiopath = $cultureRequest->file('audio')->store('audios', 'public');

            $culture->audio = $audiopath;
        }


        $culture->save();


        return redirect()->route('cultures.index', $culture->id);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $culture = Culture::findOrFail($id);

        if($culture->image){
            Storage::delete('public/'. $culture->image);
        }

        $culture->delete();

        return redirect()->route('cultures.index',compact('culture'));
    }
}



