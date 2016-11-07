@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/property/{{ $properties->pid }}/show/admin"><- Cancel</a>
                        <h3 style="text-align: center">Update Property Detail</h3></div>

                    <div class="panel-body">
                        {!! Form::model($properties, ['method' => 'PATCH', 'action' => ['PropertyController@update', $properties->pid]]) !!}

                        <div class="form-group">
                            {!! Form::label('district', 'District:') !!}
                            {!! Form::text('district', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('vdc_mun', 'VDC/Municipality:', 'required') !!}
                            {!! Form::text('vdc_mun', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('ward', 'Ward:') !!}
                            {!! Form::text('ward', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('house', 'House Number:') !!}
                            {!! Form::text('house', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rooms', 'Number of Rooms:') !!}
                            {!! Form::number('rooms', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rent', 'Rental fee in Rs:') !!}
                            {!! Form::text('rent', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('aid', 'Available/Reserved:') !!}
                            {!! Form::select('aid', ['1' => 'Yes', '2' => 'No'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('features', 'Features Description:') !!}
                            {!! Form::textarea('features', null,  ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('notes', 'Other Notes:') !!}
                            {!! Form::textarea('notes', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('owner', 'Name of the Owner: ') !!}
                            {!! Form::text('owner', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Address: ') !!}
                            {!! Form::text('address', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact', 'Contact of Owner: ') !!}
                            {!! Form::text('contact', null, ['class' => 'form-control', 'required'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Edit Property Detail', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
