<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class AdminController extends Controller
{
    public function index(Request $request)
    {
        $properties = Property::query();

        // Check if price filter is applied
        if ($request->has('price')) {
            $priceFilter = $request->input('price');
            $properties->where('price', '<=', $priceFilter);
        }
        
        // Check if surface filter is applied
        if ($request->has('surface')) {
            $surfaceFilter = $request->input('surface');
            $properties->where('surface', '>=', $surfaceFilter);
        }
    
        // Check if title search is applied
        if ($request->has('search')) {
            $searchTerm = $request->input('search');
            $properties->where('title', 'like', '%' . $searchTerm . '%');
        }
        
        $properties = $properties->paginate(6);
        return view('dashboard.index', compact('properties'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'surface' => 'required|numeric',
            'room_count' => 'required|integer',
            'price' => 'required|numeric',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone_number' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        Property::create($input);

        return redirect()->route('dashboard.index')
            ->with('success', 'Property created successfully.');
    }

    public function show(Property $property)
    {
        return view('dashboard.show', compact('property'));
    }

    public function edit(Property $property)
    {
        return view('dashboard.edit', compact('property'));
    }

    public function update(Request $request, Property $property)
    {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'surface' => 'required|numeric',
            'room_count' => 'required|integer',
            'price' => 'required|numeric',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_number' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        }

        $property->update($input);

        return redirect()->route('dashboard.index', $property->id)
            ->with('success', 'Property updated successfully');
    }

    public function destroy(Property $property)
    {
        $property->delete();

        return redirect()->route('dashboard.index')
            ->with('success', 'Property deleted successfully');
    }
 
}
