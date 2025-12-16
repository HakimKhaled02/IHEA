<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    /**
     * Display a listing of the awards.
     */
    public function index()
    {
        $awards = Award::orderBy('date', 'desc')->get();
        return view('awards.index', compact('awards'));
    }

    /**
     * Show the form for creating a new award.
     */
    public function create()
    {
        return view('awards.create');
    }

    /**
     * Store a newly created award in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        Award::create($validated);

        return redirect()->route('awards.index')
            ->with('success', 'Award created successfully.');
    }

    /**
     * Display the specified award.
     */
    public function show(Award $award)
    {
        return view('awards.show', compact('award'));
    }

    /**
     * Show the form for editing the specified award.
     */
    public function edit(Award $award)
    {
        return view('awards.edit', compact('award'));
    }

    /**
     * Update the specified award in storage.
     */
    public function update(Request $request, Award $award)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:255',
            'recipient' => 'required|string|max:255',
            'date' => 'required|date',
            'image' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
        ]);

        $award->update($validated);

        return redirect()->route('awards.index')
            ->with('success', 'Award updated successfully.');
    }

    /**
     * Remove the specified award from storage.
     */
    public function destroy(Award $award)
    {
        $award->delete();

        return redirect()->route('awards.index')
            ->with('success', 'Award deleted successfully.');
    }
}

