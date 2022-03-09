<?php

namespace App\Http\Controllers\Pendaftaran;

use App\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PendingController extends Controller
{
    public function index()
    {
        $pendings = Register::where(['user_id' => Auth::user()->id, 'status' => 'pending'])->paginate(6);
        return view('daftar.student.pending.index', compact('pendings'));
    }
}
