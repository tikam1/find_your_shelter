<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Properties;
use App;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function dashboard()
    {
        $properties = DB::table('properties')
            ->where('aid','1')
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('user.dashboard', compact('properties'));
    }

    public function search()
    {
        return view('user.search');
    }

    public function proceed($id)
    {
        $properties = Properties::findOrFail($id);

        return view('user.form', compact('properties'));
    }

    public function update($id, Request $request)
    {
        $properties = Properties::findOrFail($id);

        $properties->update($request->all());

        return view('user.success');
    }
}
