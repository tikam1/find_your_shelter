<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Properties;
use App;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserSearchLoc;
use App\Http\Requests\UserSearchFor;

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

    public function search(UserSearchLoc $requests)
    {
        $district = $requests->input('district');
        $vdcmun = $requests->input('vdc_mun');
        $ward = $requests->input('ward');

        $properties = DB::table('properties')->where('district', 'LIKE', '%' . $district . '%')
            ->where('vdc_mun', 'LIKE', '%' . $vdcmun . '%')
            ->where('ward', 'LIKE', '%' . $ward . '%')
            ->where('aid','1')
            ->get();

        return view('user.result', compact('properties'));
    }

    public function searchFor(UserSearchFor $requests)
    {
        $rooms = $requests->input('rooms');
        $rent = $requests->input('rent');
        $tid = $requests->input('tid');

        $properties = DB::table('properties')->where('rooms', 'LIKE', '%' . $rooms . '%')
            ->where('rent', 'LIKE', '%' . $rent . '%')
            ->where('tid', 'LIKE', '%' . $tid . '%')
            ->where('aid','1')
            ->get();

        return view('user.result', compact('properties'));
    }

    public function reserve($id)
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
