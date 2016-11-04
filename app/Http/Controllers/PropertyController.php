<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;
use App\PropertyTypes;
Use App\Availability;

class PropertyController extends Controller
{
    public function showAdmin($id)
    {
        $properties = Properties::findOrFail($id);

        $type = PropertyTypes::find($properties->tid);

        $avail = Availability::find($properties->aid);

        return view('property.showAdmin', compact('properties', 'type', 'avail'));
    }

    public function update($id, Request $request)
    {
        $properties = Properties::findOrFail($id);

        $properties->update($request->all());

        $type = PropertyTypes::find($properties->tid);

        $avail = Availability::find($properties->aid);

        return view('property.updated', compact('properties', 'type', 'avail'));
    }

    public function showUser($id)
    {
        $properties = Properties::findOrFail($id);

        $type = PropertyTypes::find($properties->tid);

        $avail = Availability::find($properties->aid);

        return view('property.showUser', compact('properties', 'type', 'avail'));
    }
}
