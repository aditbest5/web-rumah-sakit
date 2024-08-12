<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Appoinment;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    //    public function update(Request $request, $id)


    public function tampil()
    {
        $checkup = DB::table('appointment')->get();
        return view('pages.appointment.checkup', ['checkup' => $checkup]);
    }

}
