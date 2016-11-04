@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/options"><- Go back</a>
                        <h3 style="text-align: center">Here are the reservations made by the users.</h3></div>

                    <div class="panel-body">

                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Property</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                @foreach($reservations as $reservation)

                                <tbody>
                                <tr>
                                    <td>{{ $reservation->name }}</td>
                                    <td>{{ $reservation->email }}</td>
                                    <td>{{ $reservation->contact }}</td>
                                    <td><a href="/property/{{ $reservation->pid }}/show/admin">{{ $reservation->pid }}</a></td>
                                    <td><a href="/delete/reservation/{{ $reservation->res_id }}" class="btn btn-primary">Delete</a></td>
                                </tr>
                                </tbody>

                                @endforeach

                            </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
