<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Service,
    Worker,
    Booking,
};

class DashboardController extends Controller
{
    public function dashboard()
    {
        $total_users = User::count();
        $total_service = Service::count();
        $total_worker = Worker::count();
        $total_bookings = Booking::count(); //retrieve data
        return view('dashboard.dashboard', compact('total_users', 'total_service', 'total_worker', 'total_bookings')); //passing data to dashboard view
    }
}
