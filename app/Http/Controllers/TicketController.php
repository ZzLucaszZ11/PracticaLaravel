<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; 
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Train;
use App\Models\TicketType;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // muestra todos los trenes en la vista
    public function index()
    {
        $tickets = Ticket::all();

        return view('tickets/index',[
            'tickets' => $tickets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ticketTypes = TicketType::all();
        $trains = Train::all();
        return view('tickets.create', ['ticketTypes' => $ticketTypes, 'trains' => $trains]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $ticket = new Ticket(); // Use a consistent variable name

    $ticket->date = $request->input("date");
    $ticket->price = $request->input("price");
    $ticket->ticket_type_id = $request->input('ticket_type_id');
    $ticket->train_id = $request->input('train_id');

    $ticket->save();

    return redirect("/tickets");
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tickets = Ticket::find($id);
        return view("tickets/show",["tickets"=>$tickets]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tickets = Ticket::find($id);
        $ticketTypes = TicketType::all();
        $trains = Train::all();
        return view("tickets.edit", compact('ticket', 'ticketTypes', 'trains'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tickets = Ticket::find($id);
        $tickets -> date = $request -> input("date");
        $tickets -> price = $request -> input("price");
        $tickets -> save();
        return redirect("/tickets");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("tickets")->where("id","=",$id)->delete();
        return redirect("/tickets");
    }
}
