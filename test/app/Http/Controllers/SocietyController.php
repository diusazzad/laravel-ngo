<?php

namespace App\Http\Controllers;

use App\Models\society;
use Illuminate\Http\Request;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $societies = society::all();
        return view('admin.societies.index', compact('societies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.societies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'contact_info' => 'required|max:255',
        ]);

        society::create($validatedData);

        return redirect()->route('society.index')->with('success', 'Society created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(society $society)
    {
        return view('admin.societies.show', compact('society'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(society $society)
    {
        return view('admin.societies.edit', compact('society'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, society $society)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'address' => 'required|max:255',
            'contact_info' => 'required|max:255',
        ]);

        $society->update($validatedData);

        return redirect()->route('society.index')->with('success', 'Society updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(society $society)
    {
        $society->delete();
        return redirect()->route('society.index')->with('success', 'Society deleted successfully.');
    }
}
