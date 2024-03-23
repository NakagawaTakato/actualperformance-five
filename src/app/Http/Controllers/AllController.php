<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllController extends Controller
{
    public function start()
    {
        return view('start');
    }

    public function stamp()
    {
        return view('stamp');
    }
}
