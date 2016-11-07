<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as Req;

use App\Http\Requests;
Use App\Properties;
use App\Reservations;
use App\PropertyTypes;
Use App\Availability;
use App\Http\Requests\Reservations as Reservation;
use Illuminate\Support\Facades\DB;


class ReservationController extends Controller
{
    public function submit($id, Reservation $request)
    {
        $properties = Properties::findOrFail($id);

        $type = PropertyTypes::find($properties->tid);

        $avail = Availability::find($properties->aid);

        $reservations = new Reservations;

        $reservations->name = $request->name;
        $reservations->email = $request->email;
        $reservations->contact = $request->contact;
        $reservations->pid = $id;

        $reservations->save();

        return view('user.confirm', compact('properties', 'type', 'avail'));
    }

    public function show()
    {
        //$reservations = Reservations::all();

        $reservations = DB::table('reservations')
            ->orderBy('created_at', 'desc')
            ->get();

        //$properties = Properties::find($reservations->pid);

        return view('admin.reservations', compact('reservations', 'properties'));
    }

    public function delete($id)
    {
        $reservations = Reservations::findOrFail($id);

        $reservations->delete();

        return redirect('view/reservations');
    }
}
