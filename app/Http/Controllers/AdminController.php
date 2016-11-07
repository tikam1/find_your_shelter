<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Properties;
use App;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProperty;
use App\Http\Requests\AdminSearch;
use Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $properties = DB::table('properties')->orderBy('updated_at', 'desc')->get();

        return view('admin.dashboard', compact('properties'));
    }

    public function add(StoreProperty $requests)
    {
        Properties::create($requests->all());

        return redirect('admin/dashboard');
    }

    public function search(AdminSearch $requests) {
        $district = $requests->input('district');
        $vdc_mun = $requests->input('vdc_mun');
        $ward = $requests->input('ward');
        $house = $requests->input('house');

        $properties = DB::table('properties')->where('district', 'LIKE', '%' . $district . '%')
            ->where('vdc_mun', 'LIKE', '%' . $vdc_mun . '%')
            ->where('ward', 'LIKE', '%' . $ward . '%')
            ->where('house', 'LIKE', '%' . $house . '%')->get();

        return view('admin.result', compact('properties'));
    }

    public function update($id)
    {
        $properties = Properties::findOrFail($id);

        return view('property.update', compact('properties'));
    }

    public function delete($id)
    {
        $properties = Properties::findOrFail($id);

        $properties->delete();

        return view('property.deleted');
    }
}
