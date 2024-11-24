<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Transportation;
use App\Models\Destination;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::with(['transportation', 'destinations'])->get();
        return view('pages.package.index', compact('packages'));
    }

    public function create()
    {
        $transportations = Transportation::all();
        $destinations = Destination::all();
        return view('pages.package.create', compact('transportations', 'destinations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'transportation_id' => 'required|exists:transportations,id',
            'destinations' => 'required|array',
            'destinations.*' => 'exists:destinations,id',
        ]);

        $package = Package::create($request->only('name', 'price', 'transportation_id'));
        $package->destinations()->attach($request->destinations);

        return redirect()->route('packages.index')->with('success', 'Package created successfully.');
    }

    public function edit(Package $package)
    {
        $transportations = Transportation::all();
        $destinations = Destination::all();
        return view('pages.package.edit', compact('package', 'transportations', 'destinations'));
    }

    public function update(Request $request, Package $package)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'transportation_id' => 'required|exists:transportations,id',
            'destinations' => 'required|array',
            'destinations.*' => 'exists:destinations,id',
        ]);

        $package->update($request->only('name', 'price', 'transportation_id'));
        $package->destinations()->sync($request->destinations);

        return redirect()->route('packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        $package->delete();
        return redirect()->route('packages.index')->with('success', 'Package deleted successfully.');
    }
}

