@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Add a new Property</h4></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '']) !!}

                        <div class="form-group">
                            {!! Form::label('house_img', 'Image of the House:') !!}
                            {!! Form::file('house_img', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('district', 'District:') !!}
                            {!! Form::text('district', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('city', 'City:') !!}
                            {!! Form::text('city', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('city_area', 'City Area:') !!}
                            {!! Form::text('city_area', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('house_no', 'House Number/Code:') !!}
                            {!! Form::text('house_no', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('no_of_rooms', 'Number of Rooms:') !!}
                            {!! Form::number('no_of_rooms', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('rent', 'Rental fee in Rs:') !!}
                            {!! Form::text('rent', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('tid', 'Type:') !!}
                            {!! Form::select('tid', ['Room' => 'Room', 'Flat' => 'Flat'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('availability', 'Available/Rented:') !!}
                            {!! Form::select('aid', ['0' => 'Yes', '1' => 'No'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('features', 'Features Description:') !!}
                            {!! Form::textarea('features', null,  ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('other_notes', 'Other Notes:') !!}
                            {!! Form::textarea('other_notes', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('owner', 'Name of Owner: ') !!}
                            {!! Form::text('owner', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('address', 'Address: ') !!}
                            {!! Form::text('address', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('contact', 'Contact of Owner: ') !!}
                            {!! Form::text('contact', null, ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Add Property', ['class' => 'btn btn-primary form-control']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
