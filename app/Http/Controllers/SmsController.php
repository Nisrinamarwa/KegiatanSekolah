<?php

namespace App\Http\Controllers;

use Nexmo\Laravel\Facade\Nexmo;
use App\User;
use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms(){
        $user = User::findOrFail(Auth::user()->id);
        $activity = Activity::all();
        $register = Register::all();
        
        $hitung = $register->qty * $activity->idr;
            
        // Nexmo::message()->send([
        //     'to' =>  '62'. $user->phone,
        //     'from' => 'Rina',
        //     'text'  => 'Terimakasih telah melakukan pendaftaran dalam kegiatan kami. Silahkan buka link ini untuk melakukan upload buku pembayaran anda dengan kode pembayaran'
    
        //     .'Kode pendaftaran:'.$activity->kode_activity
        //     .'Jumlah Tiket:'.$register->qty
        //     .'Total Pembayaran:'.$hitung
        //     ]);
        }
}
