<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchemesController extends Controller
{
    public function index() {
        return view('schemes');
    }
}
