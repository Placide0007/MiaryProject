<?php

namespace App\Http\Controllers;

use App\Http\Requests\CultureRequest;
use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CultureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::with('user')->latest()->get();
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
        
        Culture::create([
            'title' => $cultureRequest->title,
            'description' => $cultureRequest->description,
            'user_id' => Auth::id(),
            'image' => $imgpath  ?? null 
        ]);
        return redirect()->route('cultures.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
