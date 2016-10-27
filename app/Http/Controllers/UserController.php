<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Properties;
use Request;
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
}
