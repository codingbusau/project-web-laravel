<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class AdminController extends Controller
{
    public function index()
    {
        $data['datapegawai'] = pegawai::all();
        return view('homepage', $data); 
    }
}
