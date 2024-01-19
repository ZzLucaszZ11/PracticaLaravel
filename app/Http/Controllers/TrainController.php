<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType;
use DB;
class TrainController extends Controller
{
    public function index()
    {
        
        $trains = Train::all();

        return view('trains/index', ['trains' => $trains]);
    }

    
    public function create()
    {
        $trainTypes = TrainType::all();

        
        return view('trains/create', ['trainTypes' => $trainTypes]);
    }

    
    public function store(Request $request)
    {
        $train = new Train();
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->year = $request->input('year');
        $train->train_type_id = $request->input('train_type_id');
        $train->save();
        return redirect()->route('trains.index');
    }

    
    public function show(string $id)
    {
        $train = Train::findOrFail($id);
        return view('trains/show', ['train' => $train]);
    }

    
    public function edit(string $id)
    {
        $train = Train::findOrFail($id);
        return view('trains/edit', ['train' => $train]);
    }

   
    public function update(Request $request, string $id)
    {
        $train = Train::findOrFail($id);
        $train->name = $request->input('name');
        $train->passengers = $request->input('passengers');
        $train->year = $request->input('year');
        $train->train_type_id = $request->input('train_type_id');
        $train->save();
    }

    
    public function destroy(string $id)
    {
        $train = Train::findOrFail($id);
        $train->delete();
        return redirect()->route('trains.index');
    }
}