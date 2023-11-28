<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Category;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $anggota = Anggota::all();
        $buku = Buku::all();
        $category = Category::all();
        $penerbit = Penerbit::all();
        return view('dashboard.index', compact('anggota', 'buku','category', 'penerbit'));
    }
}
