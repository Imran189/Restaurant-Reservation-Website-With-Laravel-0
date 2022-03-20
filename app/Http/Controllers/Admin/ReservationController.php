<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index(){
        $reservation = Reservation::all();
        return view('admin.reservation.reservation', compact('reservation'));
    }
}
