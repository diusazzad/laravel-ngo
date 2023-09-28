<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\society;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::with('society')->get();
        return view('admin.members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $societies = Society::all();
        return view('admin.members.create', compact('societies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'contact_info' => 'required|max:255',
            'society_id' => 'required|exists:societies,id',
        ]);

        Member::create($validatedData);

        return redirect()->route('members.index')->with('success', 'Member created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, Member $member)
    {
        return view('admin.members.show', compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        $societies = society::all();
        return view('admin.members.edit', compact('member', 'societies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'contact_info' => 'required|max:255',
            'society_id' => 'required|exists:societies,id',
        ]);

        $member->update($validatedData);

        return redirect()->route('members.index')->with('success', 'Member updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect()->route('members.index')->with('success', 'Member deleted successfully.');

    }
}
