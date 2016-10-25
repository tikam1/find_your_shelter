@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <h2>Latest Available Properties</h2>

                    <hr/>

                    @foreach ($properties as $property)
                    <article>
                        <h3>{{ $property->house_no }}</h3>

                        <hr/>

                        <ul>
                            <h4>Image of the House:</h4>
                            <div>{{ $property->house_img }}</div>

                            <h4>Location:
                                <span style = 'color:red' >{{ $property->district }},
                                        {{ $property->city }},
                                        {{ $property->city_area }}</span>
                            </h4>

                            <h4>Number of Rooms:
                                <span style = 'color:red'>{{ $property->no_of_rooms }}</span>  |
                                Rental fee in Rs:
                                <span style = 'color:red' >{{ $property->rent }}</span>  |
                                Available/Rented:
                                <span style = 'color:red' >{{ $property->availability }}</span>
                            </h4>

                            <h4>Features Description: </h4>
                            <p>{{ $property->features }}</p>

                            <h4>Other Notes:</h4>
                            <p>{{ $property->other_notes }}</p>

                            <h4>Type:
                                <span style = 'color:red' >{{ $property->type_id }}</span>  |
                                Owner's Name:
                                <span style = 'color:red' >{{ $property->owner_id }}</span>
                            </h4>
                        </ul>
                        <hr/>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
