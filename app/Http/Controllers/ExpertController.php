<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpertController extends Controller
{
    public function index() {
        return view('expert.index');
    }

    public function item($id = 0)
    {
        return view('expert.item');
    }
}
