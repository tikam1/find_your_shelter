<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;
use Request;

class PropertyController extends Controller
{
    public function store()
    {
        Properties::create(Request::all());

        return redirect('admin/index');
    }

    public function show($id)
    {
        $properties = Properties::findOrFail($id);

        return view('property.show', compact('properties'));
    }

    public function update($id)
    {
        $update = Properties::findOrFail($id);

        return view('property.update', compact('update'));
    }

    public function change($id)
    {
        $change = Properties::findOrFail($id);
        $change->update();
        return redirect('admin/index', compact('change'));
    }

    public function remove($id)
    {
        $remove = Properties::find($id);
        $remove->delete();
        return redirect('admin/index');
    }
}
