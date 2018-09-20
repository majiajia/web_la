<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseController extends Controller
{
    public function index() {
        return view('case.index');
    }

    public function item($id = 0)
    {
        return view('case.item');
    }
}
