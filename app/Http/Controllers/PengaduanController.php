<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        return view('masyarakat.pengaduan.index');
    }

    public function dashboard()
    {
        return view('masyarakat.layouts.template');
    }
}
