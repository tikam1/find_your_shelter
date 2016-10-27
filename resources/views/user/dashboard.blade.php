@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('user/search')}}" class="btn btn-info form-control">Search Property</a>
                    </div>

                    <div class="panel-body">

                        <h2 style="text-align: center">Latest Available Properties</h2>

                        <hr/>

                        @foreach ($properties as $property)
                            <article>
                                <h2>
                                    <a href="/property/{!! $property->pid !!}/show/user">
                                        District: {{ $property->district }}<br/>
                                        VDC/Municipality: {{ $property->vdc_mun }}<br/>
                                        Ward: {{ $property->ward }}<br/>
                                        House Code/Number: {{ $property->house }}
                                    </a>
                                </h2>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
