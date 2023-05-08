@extends('layouts.app')

@section('content') 

<link href= "/css/mystyle.css" rel="stylesheet">
        <section class = "banner">
            <div class = "card-container">
                <div class = "card-img">
                </div>

                <div class = "card-content">
                    <h3>BOOK A SERVICE</h3>
                    <form>
						<div class = "form-row">
                            <input type = "text" placeholder="First Name">
                        </div>

						<div class = "form-row">
                            <input type = "text" placeholder="Last Name">
                        </div>

						<div class = "form-row">
							<input type = "number" placeholder="Phone Number">
						</div>

						<div class = "form-row">
							<input type = "email" placeholder="Email">
						</div>

						<div class = "form-row">
							<input type = "text" placeholder="Address">
						</div>
						<div class = "form-row">
							<input type = "text" placeholder="Select Booking Date" onfocus="(this.type='date')">
						</div>

						<div class = "form-row">
							<input type = "text" placeholder="Select Booking Time" onfocus="(this.type='time')">
						</div>
                        <div class = "form-row">
                            <select name = "services">
								<option value = "services-select">Select Services</option>
								<option value "1">General Cleaning</option>
						        <option value "2">Deep Cleaning</option>
						        <option value "3">Post Construction</option>
								<option value "4">Renovation Cleaning</option>
								<option value "5">Home/Office Cleaning</option>
								<option value "6">Appliances Cleaning</option>
								<option value "7">Home/Office Disinfection</option>
								<option value "8">Area/Rug Shampooing</option>
								<option value "9">Office Carpet Shampooing</option>
								<option value "10">Upholstery Cleaning</option>
								<option value "11">Car Wash Including Interior Detailing</option>
                            	</select>
                        </div>
						<div class = "form-row">
						<textarea name="Other Comments" placeholder="Other Comments " cols="20" rows="8"></textarea>
						</div>
                        <div class = "form-row">
                            <input type = "submit" value = "Submit Form">
							<input type="reset" name="reset" value="Reset"> 
                        </div>
                    </form>
                </div>
            </div>

		@endsection