<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('pages.destination.index', compact('destinations'));
    }

    public function create()
    {
        return view('pages.destination.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $data = $request->only('name', 'description');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('destinations', 'public');
        }

        Destination::create($data);
        return redirect()->route('destinations.index')->with('success', 'Destination created successfully.');
    }

    public function show(Destination $destination)
    {
        return view('pages.destination.show', compact('destination'));
    }

    public function edit(Destination $destination)
    {
        return view('pages.destination.edit', compact('destination'));
    }

    public function update(Request $request, Destination $destination)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $data = $request->only('name', 'description');
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('destinations', 'public');
        }

        $destination->update($data);
        return redirect()->route('destinations.index')->with('success', 'Destination updated successfully.');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index')->with('success', 'Destination deleted successfully.');
    }

    public function getHotels($id)
    {
        // Ambil hotel berdasarkan destination_id
        $hotels = Hotel::where('destination_id', $id)->get();

        // Cek apakah ada hotel
        if ($hotels->isEmpty()) {
            return response()->json(['message' => 'No hotels found'], 404);
        }

        return response()->json($hotels);
    }
}
