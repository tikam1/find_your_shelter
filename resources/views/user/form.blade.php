@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/property/{{ $properties->pid }}/show/user"><- Cancel</a>
                        <h3 style="text-align: center">Fill the Form to Reserve</h3></div>

                    <div class="panel-body">
                        <form method = "post" action = "/submit/form/{{ $properties->pid }}">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}">

                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            Name:<br/>
                            <input type = "text" required name = "name" value = "" placeholder="Enter your genuine name... Example: John Doe" class = "form-control" />
                            @if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('email')) has-error @endif">
                            Email:<br/>
                            <input type = "email" required name = "email" value = "" placeholder="example@gmail.com... Must be your own email address." class = "form-control" />
                            @if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
                        </div>

                        <div class="form-group @if ($errors->has('contact')) has-error @endif">
                            Contact:<br/>
                            <input type = "text" required name = "contact" value = "" placeholder="Your contact... Example: 0123456789" class = "form-control" />
                            @if ($errors->has('contact')) <p class="help-block">{{ $errors->first('contact') }}</p> @endif
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
