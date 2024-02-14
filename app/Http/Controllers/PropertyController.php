<?php

namespace App\Http\Controllers;
use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(SearchPropertiesRequest $request)
    {
        $query = Property::query();

        if ($request->has('price'))
        {
            $query = $query->where('price', '<=', $request->input('price'));
        }
        return view('app.property', [
            'properties' => $query->paginate(5),
        ]);
    }

    public function show(string $slug, Property $property)
    {

    }
}
