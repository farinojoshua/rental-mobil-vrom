<?php

namespace App\Http\Controllers\Front;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookingsController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
        $user_id = Auth::id();
            // Gunakan $user_id untuk mengambil data booking berdasarkan user_id
            $bookings = Booking::where('user_id', $user_id)->get();

            // Lakukan operasi lain dengan $bookings
            return view('bookings', [
                'bookings' => $bookings
            ]);
        } else {
           return view('auth.login');
        }
    }
}
