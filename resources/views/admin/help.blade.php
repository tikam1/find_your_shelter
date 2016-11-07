@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/admin/options"><- Go back</a>
                        <h3 style="text-align: center">Help and Guidelines for You.</h3>
                    </div>

                    <div class="panel-body">
                        <p style="text-align: center">Hello  there Admin.</p>

                        <hr/>

                        <h3 style="text-align: center">Add Property</h3>

                        <p style="text-align: center">
                            To add property go back and from the options provided to you click on Add New Property
                            button and you will be provided with a form requesting the details of the property. Fill
                            out the form and click Add Property button to store that property on the system.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">View Property</h3>

                        <p style="text-align: center">
                            You are provided with the list of stored properties on the homepage. To see the details
                            of individual property, you need to click on individual and the property details will be shown to you.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">Search Property</h3>

                        <p style="text-align: center">
                            If you want to search for a specific property. Go to the options and click Search for Property button
                            you'll be taken to a search form. You need to enter the house number on the input field and click the
                            search button. And you'll be provided with the search result with the property you were searched for.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">Update Property</h3>

                        <p style="text-align: center">
                            To update a property click on the property link and go to the details. Below the details you will be
                            provided with Edit Property Detail button. Upon clicking it, you will be taken to the form that has all
                            the details of the property on their appropriate fields. Make some changes and click update property
                            detail and the detail of the property has been updated and you'll be provided with the updated result.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">Delete Property</h3>

                        <p style="text-align: center">
                            Much like the update function the delete button is situated just below the edit button on the
                            property detail page. Clicking it will immediately delete the property form the system.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">View Reservations</h3>

                        <p style="text-align: center">
                            To view all the reservations made by the users. Go to the options page and click View Reservations button.
                            On doing that the page containing all the reservations made by the users will be displayed on the table.
                        </p>

                        <hr/>


                        <h3 style="text-align: center">Delete Reservation</h3>

                        <p style="text-align: center">
                            To delete any reservation just click on the delete button on the right side of the table with each row of
                            reservation detail. And the reservation will be immediately deleted.
                        </p>

                        <hr/>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
