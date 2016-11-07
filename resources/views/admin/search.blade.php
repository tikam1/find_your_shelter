@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/admin/options"><- Go back</a>
                        <h3 style="text-align:center">Search for Properties</h3></div>

                    <div class="panel-body">

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/search/for']) !!}

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

                        <div class="form-group @if ($errors->has('house')) has-error @endif">
                            {!! Form::label('house', 'House Number:') !!}
                            {!! Form::text('house', null, ['class' => 'form-control', 'required', 'placeholder' => "Enter house number to search for the property... E.g. 123"] ) !!}
                            @if ($errors->has('house')) <p class="help-block">{{ $errors->first('house') }}</p> @endif
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
