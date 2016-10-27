@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('admin/options')}}" class="btn btn-info form-control">Help and Other Options</a>
                    </div>

                    <div class="panel-body">

                        <h2 style="text-align: center">These are the current latest property entries</h2>

                        <hr/>

                        @foreach ($properties as $property)
                            <article>
                                <h2>
                                    <a href="/property/{!! $property->pid !!}/show/admin">
                                        District: {{ $property->district }}<br/>
                                        VDC/Municipality: {{ $property->vdc_mun }}<br/>
                                        Ward: {{ $property->ward }}<br/>
                                        House Code/Number: {{ $property->house }}
                                    </a>
                                </h2>
                            </article>
                            <hr/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
