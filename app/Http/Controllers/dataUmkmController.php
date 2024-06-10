<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Umkm;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class dataUmkmController extends Controller
{
    public function index(){
        $category = Category::all();
        $umkm = Umkm::all();

        Alert::success('Deleted Successfully', 'umkm Data Deleted Successfully.');

        return view('umkm.data_umkm', compact('category','umkm'));

    }
}
