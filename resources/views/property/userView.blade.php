@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Property Detail</div>

                    <div class="panel-body">
                        <article>
                            <h3>{{ $property->house_no }}</h3>

                            <hr/>

                            <ul>
                                <h4>Image of the House:</h4>
                                <img src="/uploads/founds/{{ $property->image}}" style="width:200px; height:200px; float:left; border-radius:15%; margin-right:25px;">
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

                                <a href="{{url('property/update')}}/{{ $property->property_id }}" class="btn btn-primary form-control">Update Your Property Detail</a>

                                <hr/>

                                <a href="{{url('property/delete')}}/{{ $property->property_id }}" class="btn btn-danger form-control">Delete</a>

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
