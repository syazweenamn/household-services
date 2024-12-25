<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Booking,
    Servicecategory,
    Service,
    Worker,
};
use Carbon\Carbon;

class BookingController extends Controller
{
    public function services_category()
    {
        $servicecategories = Servicecategory::all();
        return view('services-category', compact('servicecategories'));
    }

    public function service_list(Servicecategory $servicecategory)
    {
        $services = Service::orderBy('service_name')->where('servicecategory_id', $servicecategory->id)->get();
        return view('service-list', compact('servicecategory','services'));
    }

    public function worker_list(Servicecategory $servicecategory, Service $service, Request $request)
    {
        if($request->has('date') && !is_null($request->date)){
            $request->validate([
                'date' => 'required|date|after:today',
            ]);
        }
        $date = ($request->has('date') && !is_null($request->date)) ? $request->date : $this->getDate();
        $workers = Worker::orderBy('worker_name')->whereDoesntHave('bookings', function ($q) use ($date) {
            $q->where('date', $date);
        })
        ->get();
        return view('worker-list', compact('servicecategory','service','date','workers'));
    }

    // get tomorrow's date
    public function getDate()
    {
        $now = Carbon::now();
        $date = $now->addDay();
        $getDate = $date->format('Y-m-d');
        return $getDate;
    }

    public function booking_details(Servicecategory $servicecategory, Service $service, Worker $worker, $date)
    {
        return view('booking-details', compact('servicecategory','service','worker','date'));
    }

    public function place_booking(Request $request)
    {
        Booking::create($request->all());
        flash('Booking placed and paid successfully')->success();
        return redirect()->route('bookingList');
    }

    public function booking_list()
    {
        // check for completed booking and update their status
        $completed = Booking::where('service_status', 'In Progress')->whereDate('date', '<', date('Y-m-d'))->update(['service_status' => 'Service Completed']);
        $bookings = Booking::where('user_id', \Auth::user()->id)->get();
        return view('booking-list', compact('bookings'));
    }

    public function rate_booking(Booking $booking, Request $request)
    {
        \DB::transaction(function () use ($booking, $request) {
            $booking->update($request->all() + ['service_status' => 'Rated']);
            $worker = $booking->worker;
            $worker_rating = $worker->bookings()->sum('booking_rating') / $worker->bookings->count();
            $worker->update(['worker_rating' => $worker_rating]);
        });
        flash('Booking rated successfully')->success();
        return redirect()->route('bookingList');
    }

    // admin's functions
    public function index()
    {
        // check for completed booking and update their status
        $completed = Booking::where('service_status', 'In Progress')->whereDate('date', '<', date('Y-m-d'))->update(['service_status' => 'Service Completed']);
        $bookings = Booking::all();
        return view('bookings.index', compact('bookings'));
    }
}
