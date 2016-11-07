@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/search"><- Go back</a>
                        <a href="/admin/dashboard" style="float: right"><- Go back to Dashboard</a>
                        <h3 style="text-align:center">Search Results</h3></div>

                    <div class="panel-body">
                        @if (count($properties) === 0)
                            <h3 style="text-align: center">Sorry, no property found.</h3>
                        @elseif (count($properties) >= 1)

                            @foreach ($properties as $property)

                                <article>
                                    <h2>
                                        <a href="/property/{!! $property->pid !!}/show/admin">
                                            District: {{ $property->district }}
                                            <br/>
                                            VDC/Municipality: {{ $property->vdc_mun }}
                                            <br/>
                                            Ward: {{ $property->ward }}
                                            <br/>
                                            House Number: {{ $property->house }}
                                        </a>
                                    </h2>
                                </article>

                                <hr/>

                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
