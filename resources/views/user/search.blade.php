@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/user/dashboard"><- Go back</a>
                        <h3 style="text-align:center">Search Into A Location</h3></div>

                    <div class="panel-body">

                        <h4 style="text-align: center">Search on the basis of Location</h4>

                        <hr/>

                        {!! Form::open(['method' => 'GET', 'url' => '/user/search/loc']) !!}

                        <div class="form-group @if ($errors->has('district')) has-error @endif">
                            {!! Form::label('district', 'District: ') !!}
                            {!! Form::text('district', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Kathmandu'] ) !!}
                            @if ($errors->has('district')) <p class="help-block">{{ $errors->first('district') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('vdc_mun')) has-error @endif">
                            {!! Form::label('vdc_mun', 'VDC/Municipality: ') !!}
                            {!! Form::text('vdc_mun', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. Kirtipur'] ) !!}
                            @if ($errors->has('vdc_mun')) <p class="help-block">{{ $errors->first('vdc_mun') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('ward')) has-error @endif">
                            {!! Form::label('ward', 'Ward: ') !!}
                            {!! Form::text('ward', null, ['class' => 'form-control', 'required', 'placeholder' => 'E.g. 12'] ) !!}
                            @if ($errors->has('ward')) <p class="help-block">{{ $errors->first('ward') }}</p> @endif
                        </div>

                            {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}

                        {!! Form::close() !!}

                        <hr/>

                        <h4 style="text-align: center">Search on the basis of Features</h4>

                        <hr/>

                        {!! Form::open(['method' => 'GET', 'url' => '/user/search/for']) !!}

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

                            {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}

                        {!! Form::close() !!}

                        <hr/>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
