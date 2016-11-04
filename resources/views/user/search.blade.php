@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><a href="/user/dashboard"><- Go back</a>
                        <h3 style="text-align:center">Search Into A Location</h3></div>

                    <div class="panel-body">
                        {!! Form::open(['url' => '/user/search/loc']) !!}

                        {!! Form::label('district', 'District: ') !!}
                        {!! Form::text('district', null, ['class' => 'form-control'] ) !!}
                        <br/>
                        {!! Form::label('vdc_mun', 'VDC/Municipality: ') !!}
                        {!! Form::text('vdc_mun', null, ['class' => 'form-control'] ) !!}
                        <br/>
                        {!! Form::label('ward', 'Ward: ') !!}
                        {!! Form::text('ward', null, ['class' => 'form-control'] ) !!}
                        <br/>
                        {!! Form::submit('Search', ['class' => 'btn btn-primary form-control']) !!}
                        {!! Form::close() !!}
                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
