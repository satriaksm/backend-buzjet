<?php
namespace App\Http\Controllers;

use App\Models\Transportation;
use Illuminate\Http\Request;

class TransportationController extends Controller
{
    public function index()
    {
        $transportations = Transportation::all();
        return view('pages.transportation.index', compact('transportations'));
    }

    public function create()
    {
        return view('pages.transportation.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'company' => 'required|string|max:255',
        ]);

        Transportation::create($request->all());
        return redirect()->route('transportations.index')->with('success', 'Transportation created successfully.');
    }

    public function edit(Transportation $transportation)
    {
        return view('pages.transportation.edit', compact('transportation'));
    }

    public function update(Request $request, Transportation $transportation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'company' => 'required|string|max:255',
        ]);

        $transportation->update($request->all());
        return redirect()->route('transportations.index')->with('success', 'Transportation updated successfully.');
    }

    public function destroy(Transportation $transportation)
    {
        $transportation->delete();
        return redirect()->route('transportations.index')->with('success', 'Transportation deleted successfully.');
    }
}
