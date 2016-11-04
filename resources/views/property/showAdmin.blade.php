@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/dashboard"><- Go back</a>
                        <h3 style="text-align: center">Property Detail</h3></div>

                    <div class="panel-body">

                        <article>
                            <ul>

                                <h4>Location:
                                    <span style = 'color:red' >{{ $properties->district }},
                                        {{ $properties->vdc_mun }},
                                        {{ $properties->ward }}</span>
                                </h4>

                                <hr/>

                                <h4>House Code/Number:
                                    <span style = 'color:red'>{{ $properties->house }}</span>  |
                                    Number of Rooms:
                                    <span style = 'color:red'>{{ $properties->rooms }}</span>  |
                                    Rental fee in Rs:
                                    <span style = 'color:red' >{{ $properties->rent }}</span>  |
                                    Type:
                                    <span style = 'color:red' >{{ $type->type }}</span>  |
                                    Available:
                                    <span style = 'color:red' >{{ $avail->state }}</span>
                                </h4>

                                <hr/>

                                <h4>Features Description: </h4>
                                <p>{{ $properties->features }}</p>

                                <hr/>

                                <h4>Other Notes:</h4>
                                <p>{{ $properties->notes }}</p>

                                <hr/>

                                <h4>Name of the Owner:
                                    <span style = 'color:red' >{{ $properties->owner }}</span>  |
                                    Address:
                                    <span style = 'color:red' >{{ $properties->address }}</span>  |
                                    Contact:
                                    <span style = 'color:red' >{{ $properties->contact }}</span>
                                </h4>

                                <hr/>

                                <a href="{{url('/property/update')}}/{{ $properties->pid }}" class="btn btn-primary form-control">Edit Property Detail</a>

                                <hr/>

                                <a href="{{url('/property/delete')}}/{{ $properties->pid }}" class="btn btn-danger form-control">Delete Property</a>
                            </ul>

                            <hr/>

                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
