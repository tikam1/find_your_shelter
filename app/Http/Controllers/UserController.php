<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Properties;
use Request;

class UserController extends Controller
{
    public function index()
    {
        $properties = Properties::latest()->get('Available');

        return view('user.dashboard', compact('properties'));
    }
}
