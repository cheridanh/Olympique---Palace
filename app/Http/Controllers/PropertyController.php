<?php

namespace App\Http\Controllers;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index()
    {
        $properties = Property::paginate(5);
        return view('app.property', [
            'properties' => $properties,
        ]);
    }

    public function show(string $slug, Property $property)
    {

    }
}
