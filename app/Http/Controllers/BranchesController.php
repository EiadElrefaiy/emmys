<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BranchesController extends Controller
{
    public function index()
    {
        return view('branches');
    }
}
