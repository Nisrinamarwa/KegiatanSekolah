<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Register;
use Illuminate\Http\Request;

class KegiatankuController extends Controller
{
    public function index()
    {
        $myActivitys = Register::where(['status' => 'peserta'], ['user_id' => Auth::user()->id])->get();

        return view('kegiatan.siswa.index', compact('myActivitys'));
    }
}
