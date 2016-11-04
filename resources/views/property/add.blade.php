@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/options"><- Go back</a>
                        <h3 style="text-align: center">Add a new Property</h3></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/property/store']) !!}

                        <div class="form-group">
                            {!! Form::label('district', 'District:') !!}
                            {!! Form::text('district', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('vdc_mun', 'VDC/Municipality:') !!}
                            {!! Form::text('vdc_mun', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('ward', 'Ward:') !!}
                            {!! Form::text('ward', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('house', 'House Number/Code:') !!}
                            {!! Form::text('house', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rooms', 'Number of Rooms:') !!}
                            {!! Form::number('rooms', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rent', 'Rental fee in Rs:') !!}
                            {!! Form::text('rent', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tid', 'Type:') !!}
                            {!! Form::select('tid', ['1' => 'Room', '2' => 'Flat'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('aid', 'Available/Rented:') !!}
                            {!! Form::select('aid', ['1' => 'Available', '2' => 'Reserved'], ['class' => 'form-control'] ) !!}
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
                            {!! Form::text('owner', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Address: ') !!}
                            {!! Form::text('address', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact', 'Contact: ') !!}
                            {!! Form::text('contact', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <hr/>

                        <div class="form-group">
                            {!! Form::submit('Add Property', ['class' => 'btn btn-primary form-control']) !!}
                        </div>

                        <hr/>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
