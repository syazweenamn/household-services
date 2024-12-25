<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = Worker::orderBy('worker_name')->get();
        return view('workers.index', compact('workers'));
    }

    public function create()
    {
        return view('workers.create');
    }

    public function store(Request $request)
    {
        Worker::create($request->all()); //validate & save info in workers table 
        flash('Worker created successfully')->success();
        return redirect()->route('workers.index');
    }

    public function edit(Worker $worker)
    {
        return view('workers.edit', compact('worker'));
    }

    public function update(Request $request, Worker $worker)
    {
        $worker->update($request->all()); //validate and update details
        flash('Worker updated successfully')->success();
        return redirect()->route('workers.index');
    }

    public function destroy(Worker $worker)
    {
        $worker->delete();
        flash('Worker deleted successfully')->success()->important();
        return redirect()->route('workers.index');
    }
}
