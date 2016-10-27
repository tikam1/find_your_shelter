<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;

class PropertyController extends Controller
{
    public function showAdmin($id) {
        $properties = Properties::findOrFail($id);

        return view('property.showAdmin', compact('properties'));
    }

    public function update($id, Request $request) {
        $properties = Properties::findOrFail($id);

        $properties->update($request->all());

        return view('property.updated', compact('properties'));
    }

    public function showUser($id) {
        $properties = Properties::findOrFail($id);

        return view('property.showUser', compact('properties'));
    }
}
