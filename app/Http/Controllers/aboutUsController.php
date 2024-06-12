<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UMKM;

class AboutUsController extends Controller
{
    public function index()
    {

  

        return view('aboutUs'); // Pastikan view 'umkm.aboutUs' ada
    }

   
}
