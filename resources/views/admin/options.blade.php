@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/dashboard"><- Go back</a>
                        <h3 style="text-align: center">Here are More Options for You</h3></div>

                    <div class="panel-body">
                        <a href="{{url('/admin/help')}}" class="btn btn-success form-control">Help & Guidelines for You</a>

                        <hr/>

                        <a href="{{url('/property/add')}}" class="btn btn-primary form-control">Add New Property</a>

                        <hr/>

                        <a href="{{url('/admin/search')}}" class="btn btn-default form-control">Search for Property</a>

                        <hr/>

                        <a href="{{url('/view/reservations')}}" class="btn btn-info form-control">View Reservations</a>

                        <hr/>

                        <a href="{{url('/admin/dashboard')}}" class="btn btn-warning form-control">Go back to Dashboard</a>

                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
