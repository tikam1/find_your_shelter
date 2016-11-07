@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/options"><- Go back</a>
                        <h3 style="text-align: center">Add a New Property</h3></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/property/store']) !!}

                        <div class="form-group @if ($errors->has('district')) has-error @endif">
                            {!! Form::label('district', 'District:') !!}
                            {!! Form::text('district', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Kathmandu'] ) !!}
                            @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('vdc_mun')) has-error @endif">
                            {!! Form::label('vdc_mun', 'VDC/Municipality:') !!}
                            {!! Form::text('vdc_mun', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Kirtipur'] ) !!}
                            @if ($errors->has('vdc_mun')) <p class="help-block">{{ $errors->first('vdc_mun') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('ward')) has-error @endif">
                            {!! Form::label('ward', 'Ward:') !!}
                            {!! Form::number('ward', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 12'] ) !!}
                            @if ($errors->has('ward')) <p class="help-block">{{ $errors->first('ward') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('house')) has-error @endif">
                            {!! Form::label('house', 'House Number:') !!}
                            {!! Form::text('house', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 123'] ) !!}
                            @if ($errors->has('house')) <p class="help-block">{{ $errors->first('house') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('rooms')) has-error @endif">
                            {!! Form::label('rooms', 'Number of Rooms:') !!}
                            {!! Form::number('rooms', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 1'] ) !!}
                            @if ($errors->has('rooms')) <p class="help-block">{{ $errors->first('rooms') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('rent')) has-error @endif">
                            {!! Form::label('rent', 'Rental fee in Rs:') !!}
                            {!! Form::text('rent', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 5000'] ) !!}
                            @if ($errors->has('rent')) <p class="help-block">{{ $errors->first('rent') }}</p> @endif
                        </div>

                        <div class="form-group">
                            {!! Form::label('tid', 'Type:') !!}
                            {!! Form::select('tid', ['1' => 'Room', '2' => 'Flat'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('aid', 'Available/Rented:') !!}
                            {!! Form::select('aid', ['1' => 'Available', '2' => 'Reserved'], ['class' => 'form-control'] ) !!}
                        </div>

                        <div class="form-group @if ($errors->has('features')) has-error @endif">
                            {!! Form::label('features', 'Features Description:') !!}
                            {!! Form::textarea('features', null,  ['class' => 'form-control', 'placeholder' => 'Provide a short description of some features of your property for users...'] ) !!}
                            @if ($errors->has('features')) <p class="help-block">{{ $errors->first('features') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('notes')) has-error @endif">
                            {!! Form::label('notes', 'Other Notes (Optional):') !!}
                            {!! Form::textarea('notes', null, ['class' => 'form-control', 'placeholder' => 'If you have something else to say about your property, you could write it here...'] ) !!}
                            @if ($errors->has('notes')) <p class="help-block">{{ $errors->first('notes') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('owner')) has-error @endif">
                            {!! Form::label('owner', 'Name of the Owner: ') !!}
                            {!! Form::text('owner', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Bhimsen Gurung'] ) !!}
                            @if ($errors->has('owner')) <p class="help-block">{{ $errors->first('owner') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('address')) has-error @endif">
                            {!! Form::label('address', 'Address: ') !!}
                            {!! Form::text('address', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Maitidevi, Ghatekulo'] ) !!}
                            @if ($errors->has('address')) <p class="help-block">{{ $errors->first('address') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('contact')) has-error @endif">
                            {!! Form::label('contact', 'Contact: ') !!}
                            {!! Form::text('contact', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 9801234567'] ) !!}
                            @if ($errors->has('contact')) <p class="help-block">{{ $errors->first('contact') }}</p> @endif
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
