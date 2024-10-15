<?php

namespace App\Http\Controllers;

use App\Models\smk;
use Illuminate\Http\Request;
use Illuminate\View\View;

class smkController extends Controller
{
    public function index() : View {
        //latest : ambil_data dari db dan menurunkan desc
        $datasmk = smk::latest()->paginate(10);
        return view('test', compact('datasmk'));
    }

    public function show(string $id) : View{
        //findorfail : ambil data berdasarkan id
        $data_satuan = smk::findOrFail($id);
        //compact untuk mengirim data ke view
        return view('show2', compact('data_satuan'));
    }
}
