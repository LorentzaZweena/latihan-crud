<?php

namespace App\Http\Controllers;

use App\Models\smk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class smkController extends Controller
{
    public function index() : View {
        //ambil data dari db
        $datasmk = smk::latest()->paginate(10);
        return view('test', compact('datasmk'));
    }
}
