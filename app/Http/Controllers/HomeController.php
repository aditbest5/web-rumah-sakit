<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function utama()
    {
        return view('tampilan.home');
    }
    
    public function about()
    {
        return view('tampilan.about');
    }

    public function service()
    {
        return view('tampilan.service');
    }

    public function gallery()
    {
        return view('tampilan.gallery');
    }

    public function team()
    {
        return view('tampilan.team');
    }

    public function appointment()
    {
        $dokter = DB::table('dokter')->get();
        return view('tampilan.appointment', ['dokter' => $dokter]);
    }
    public function tambah(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'message' => 'required',
            'dokter_id' => 'required'
        ]);
        DB::table('appointment')->insert([
            'date' => $request['date'],
            'message' => $request['message'],
            'dokter_id' => $request['dokter_id'],
        ]);

        return redirect('/appointment');
    }

    public function blog()
    {
        return view('tampilan.blog');
    }
    
    public function singleBlog()
    {
        return view('tampilan.single-blog');
    }

    public function contact()
    {
        return view('tampilan.contact');
    }

}
