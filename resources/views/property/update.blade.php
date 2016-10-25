@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update your Property</div>

                    <div class="panel-body">

                        @foreach ($properties as $property)
                            {!! Form::open(['url' => 'property/store']) !!}

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
                            {!! Form::label('availability', 'Available/Rented:') !!}
                            <br/>
                            {!! Form::radio('availability', 'Available', ['class' => 'form-control'] ) !!}
                            {!! Form::label('availability', 'Available') !!}
                            <br/>
                            {!! Form::radio('availability', 'Rented', ['class' => 'form-control'] ) !!}
                            {!! Form::label('availability', 'Rented') !!}
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
                            {!! Form::label('type_id', 'Type:') !!}
                            {!! Form::select('type_id', ['1' => 'Room', '2' => 'Flat', '3' => 'House'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('owner_id', 'Name of Owner: ') !!}
                            {!! Form::number('owner_id', null, ['class' => 'form-control'] ) !!}
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
