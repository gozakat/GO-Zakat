<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\no_rek;
class tampilController extends Controller
{
    public function index()
    {
        $no_rek=No_rek::all();
        return view('tampil.index',compact('no_rek'));
    }
}
