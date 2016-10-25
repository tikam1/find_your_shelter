<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;
use Request;

class OwnerController extends Controller
{
    public function add()
    {
        return view('property.add');
    }

    public function index()
    {
        $properties = Properties::all();

        return view('admin.dashboard', compact('properties'));
    }

    public function update($property_id)
    {
        $data['property_id'] = $property_id;
        $properties = Properties::findOrFail($data);

        return view('property.update', compact('properties'));
    }
}
