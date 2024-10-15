<?php

namespace App\Http\Controllers;

use App\Models\smk;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\siswa;

class siswaController extends Controller
{
    public function index() : View {
        //ambil data dari db
        $datasiswa = siswa::latest()->paginate(10);
        return view('siswa', compact('datasiswa'));
    }
}
