@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/property/{{ $properties->pid }}/show/user"><- Go back</a>
                        <h3 style="text-align: center">Fill the Form to Reserve</h3></div>

                    <div class="panel-body">
                        <form method = "post" action = "/submit/form/{{ $properties->pid }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group">
                            Name:<br/>
                            <input type = "text", name = "name", value = "", class = "form-control" />
                        </div>

                        <div class="form-group">
                            Email:<br/>
                            <input type = "email", name = "email", value = "", class = "form-control" />
                        </div>

                        <div class="form-group">
                            Contact:<br/>
                            <input type = "text", name = "contact", value = "", class = "form-control" />
                        </div>

                        <hr/>

                        <div class="form-group">
                            <input type = "submit", name = "submit", value = "Submit", class = "btn btn-primary form-control" />
                        </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
