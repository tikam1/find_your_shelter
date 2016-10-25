@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{url('property/add')}}" class="btn btn-info form-control">Add New Property</a>
                    </div>

                    <div class="panel-body">
                        <h2>These are the current latest available properties</h2>

                        <hr/>

                        {!! Form::text('search', null, ['class' => 'form-control'] ) !!}
                        {!! Form::submit('Search', null, ['class' => 'btn btn-info form-control'] ) !!}

                        <hr/>

                        @foreach ($properties as $property)
                            <article>
                                <h2>
                                    <a href="/property/{!! $property->id !!}/show">
                                        {{ $property->district }}
                                        {{ $property->city }}
                                        {{ $property->city_area }}
                                        {{ $property->house_no }}
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
