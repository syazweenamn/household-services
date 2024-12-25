<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    Service,
    Servicecategory,
};

class ServiceController extends Controller
{
    //customer side: 
    public function index()
    {
        $services = Service::orderBy('service_name')->get(); //fetch data from db 
        return view('services.index', compact('services'));
    }

    public function create()
    {
        $servicecategories = Servicecategory::orderBy('servicecategory_name')->get();
        return view('services.create', compact('servicecategories'));
    }
#when admin adds new service (in service.create), info will be sent here: 
    public function store(Request $request)
    {
        $request->validate([
            'servicecategory_id' => 'required',
        ],[],['servicecategory_id' => 'Service Category']);
        Service::create($request->all()); //creates new service in db 
        flash('Service created successfully')->success();
        return redirect()->route('services.index');
    }

    public function edit(Service $service)
    {
        $servicecategories = Servicecategory::orderBy('servicecategory_name')->get();
        return view('services.edit', compact('service', 'servicecategories'));
    }
//admin updates:
    public function update(Request $request, Service $service)
    {
        $service->update($request->all());
        flash('Service updated successfully')->success();
        return redirect()->route('services.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        flash('Service deleted successfully')->success()->important();
        return redirect()->route('services.index');
    }
}
