<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials=Testimonial::where('status','approved')->get();
        return view('index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'Titre' => 'required|string|max:60',
            'Image' => 'nullable|mimes:doc,docx,jpeg,png|max:1024', 
            'Message' => 'required|max:600',
        ]);
    
        if ($request->hasFile('Image')) {
            $validatedData['Image'] = $request->file('Image')->store('Testimonial','public');
        }
    
        $testimonial = new Testimonial($validatedData);
        $testimonial->save();
    
        return redirect()->route('temoignage.index'); 
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        //
    }
}
