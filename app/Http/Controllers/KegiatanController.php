<?php

namespace App\Http\Controllers;

use App\User;
use App\Register;
use App\Activity;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;
use App\Mail\PendaftaranMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class KegiatanController extends Controller
{
    public function show()
    {
        $activitys = Activity::paginate(8);


        return view('kegiatan.show', compact('activitys'));
    }

    public function create($id)
    {
        $activity = Activity::findOrFail($id);

        return view('daftar.create', compact('activity'));
    }

    public function store(Request $request)    
    {       
        $user = User::findOrFail(Auth::user()->id);

        $register = Register::create([
            'user_id'   => $user->id,
            'activity_id' => $request->activity_id,
            'status' => $request->status,
            'qty'   => $request->qty,
        ]);
        
        $to = Mail::to($user->email)
        ->send(new PendaftaranMail($register));

        // if ($register->save()) {
        //     $activity = Activity::findOrFail($register->activity_id);

        //     $hitung = $register->qty * $activity->idr;
        //     Nexmo::message()->send([
        //         'to' =>  '62'. $user->phone,
        //         'from' => 'Rina',
        //         'text'  => 'Terimakasih telah melakukan pendaftaran dalam kegiatan kami. Silahkan buka link ini untuk melakukan upload buku pembayaran anda dengan kode pembayaran'
        
        //         .'Kode pendaftaran:'.$activity->kode_activity
        //         .'Jumlah Tiket:'.$register->qty
        //         .'Total Pembayaran:'.$hitung
        //         ]);
        // }
        return redirect()->back();
    }
}
