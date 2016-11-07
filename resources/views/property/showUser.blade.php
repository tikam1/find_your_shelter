@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/user/dashboard"><- Go back to Dashboard</a>
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

                                <h4>House Number:
                                    <span style = 'color:red'>{{ $properties->house }}</span>  |
                                    Number of Rooms:
                                    <span style = 'color:red'>{{ $properties->rooms }}</span>  |
                                    Rental fee in Rs:
                                    <span style = 'color:red' >{{ $properties->rent }}</span>  |
                                    Type:
                                    <span style = 'color:red' >{{ $type->type }}</span>
                                </h4>

                                <hr/>

                                <h4>Features Description: </h4>
                                <p>{{ $properties->features }}</p>

                                <hr/>

                                <h4>Other Notes:</h4>
                                <p>{{ $properties->notes }}</p>

                                <hr/>

                                <h4>Owner:
                                    <span style = 'color:red' >{{ $properties->owner }}</span>  |
                                    Address:
                                    <span style = 'color:red' >{{ $properties->address }}</span>  |
                                    Contact:
                                    <span style = 'color:red' >{{ $properties->contact }}</span>
                                </h4>

                                <hr/>

                            </ul>

                            <a href="{{url('/proceed/reserve')}}/{{ $properties->pid }}" class="btn btn-primary form-control">Reserve Property</a>

                            <hr/>

                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
