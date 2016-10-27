<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Properties;
use Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $properties = DB::table('properties')->orderBy('updated_at', 'desc')->get();

        return view('admin.dashboard', compact('properties'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'house_img' => 'required|max:255',
            'district' => 'required|max:255',
            'city' => 'required',
        ]);
    }

    public function add()
    {
        Properties::create(Request::all());

        return redirect('admin/dashboard');
    }

    public function search() {
        return view('admin.search');
    }

    public function update($id)
    {
        $properties = Properties::findOrFail($id);

        return view('property.update', compact('properties'));
    }
}
