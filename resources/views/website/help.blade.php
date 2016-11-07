@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 style="text-align: center">Help Guidelines for Users</h3></div>

                    <div class="panel-body">
                        <h3 style="text-align: center">Register</h3>

                        <p style="text-align: center">
                            In order to login to the system and use the service, you must first register to the system.
                            To register, click on the register link on the top right corner. The register form will be displayed.
                            Fill out the form with necessary credentials and click register. If your inputs are valid
                            and everything goes right, you'll be registered and taken to the dashboard immediately.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">Login</h3>

                        <p style="text-align: center">
                            In order to login to the system, click on the login link on the top right corner left to register
                            link and you'll be provided with the login form. Enter your registered email and your password to login.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">View Property</h3>

                        <p style="text-align: center">
                            On your home page you will be provided with list of currently available properties. To see the details
                            you need to click on individual property link to see its details. Where you will see it's details related
                            to location, some of its features and the details of it's owner.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">Search for Property</h3>

                        <p style="text-align: center">
                            If you are not satisfied with the properties listed on the home page or you don't want to go
                            through them and want to search for a property on a specific location then you would want to use
                            the search facility made available on the system.
                            The search button provided at the top of the dashboard will take you to search form that lets you search
                            on the basis of location, you could either enter the District name or the name of the VDC/Municipality and
                            you will be provided with the result based on your search query.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">Reserve Property</h3>

                        <p style="text-align: center">
                            In order to reserve a property. You first need to click on the property link and then on the detail page
                            of that property you will have a reserve button. Clicking that button will take you to a form requesting some
                            of your credentials. You need to fill the inputs correctly and provide genuine information and submit. Now,
                            after you've done that the final step is to confirm the reservation. If you confirmed the reservation the
                            property will be reserved for you or else it won't. So it is most important to confirm the reservation.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">About Us</h3>

                        <p style="text-align: center">
                            To know about us, you could click on the about us link given above and there you'll find the necessary
                            information related to our service and the website.
                        </p>

                        <hr/>

                        <h3 style="text-align: center">Contact Us</h3>

                        <p style="text-align: center">
                            If you want to contact us for any inquiry and for any kind of information related to our service you will
                            the the necessary contact details on the 'Contact Us' link provided on top of the page along with the
                            'About Us' link.

                        </p>

                        <hr/>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection