<?php

namespace App\Http\Controllers;

use App\User;
use App\Activity;
use App\Register;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'students'      => User::whereHas('roles', function ($q) {
                                    $q->where('roles.name', '=', 'student');
                                })->count(),
            'activitys'     => Activity::count(),
            'registers'     => Register::where('status','peserta')->count(),
            'pending'       => Register::where('status','pending')->count(),
            'terverivikasi' => Register::where('status','terverivikasi')->count(),
            'delayed'       => Register::where(['user_id' => Auth::user()->id, 'status' => 'pending'])->count(),
            'verified'      => Register::where(['user_id' => Auth::user()->id, 'status' => 'terverivikasi'])->count(),
            'participant'   => Register::where(['user_id' => Auth::user()->id, 'status' => 'peserta'])->count(),
        ];

        return view('home', $data);
    }
}
