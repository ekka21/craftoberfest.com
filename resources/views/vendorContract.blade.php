@extends('layouts.front-sub')

@section('content')
<style>
    .form-control{
        background-color: #fff;
    }
</style>
	<div class="content">
		<p style="margin-top: 50px;">Please read and complete the following vendor agreement to confirm your participation in our 2016 night market. </p>
		<form method="POST" action="/vendor-contract" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="{{ csrf_token() }}">
            <div class="form-group">
            	<label for="business">*Business Name:</label>
                <div style="color: red; font-size: 12px"><?php print $errors->first('Business'); ?></div>
                <input class="form-control" required name="business_name" type="text" id="business" value="<?php print old('business'); ?>">
            </div>
            <div class="form-group">
            	<label for="name">*Full Name:</label>
                <div style="color: red; font-size: 12px"><?php print $errors->first('name'); ?></div>
                <input class="form-control" required name="name" type="text" id="name" value="<?php print old('name'); ?>">
            </div>
            <div class="form-group">
            	<label for="email">*Email:</label>
                <div style="color: red; font-size: 12px"><?php print $errors->first('email'); ?></div>
                <input class="form-control" required name="email" type="text" id="email" value="<?php print old('email'); ?>">
            </div>
            <div class="form-group">
            	<label for="phone_number">*Phone number you can be reached at on the day of the show (please include area code):</label>
                <div style="color: red; font-size: 12px"><?php print $errors->first('phone_number'); ?></div>
                <input class="form-control" required_ name="phone_number" type="text" id="phone_number" value="<?php print old('phone_number'); ?>">
            </div>

            <div class="form-group">
            	<p>As a participating vendor, I understand that I am solely responsible for the safety and security of both myself and my booth, as well as inventory and all other belongings. I will not hold Craftoberfest organizers or Urban Chestnut Brewing Company responsible for personal injury or loss of property.</p>
	            <div class="radio">
	             	<label>
	                	<input type="radio" value="1" required name="loss_prevention"> I agree<br>
	                </label>
	                <label>
	                	<input type="radio" value="0" required name="loss_prevention"> I do not agree
	                </label>
	            </div>
            </div>

            <div class="form-group">
            	<p>Please read each item. By checking off each item, you are agreeing to follow that rule or regulation.</p>
            	<div class="checkbox">
	             	<label>
	                	<input type="checkbox" required value="1" name="tax_responsibility"> Vendors are responsible for collecting and reporting all appropriate sales tax.
	                </label>
	                
					<label>
						<input type="checkbox" required value="1" name="remain_responsibility"> Vendors must remain set up for entire length of the show. There will be no packing up early unless otherwise communicated.
					</label>

                    <label>
                        <input type="checkbox" required value="1" name="outdoors_understanding"> Vendor understands that this is an OUTDOOR event and will prepare accordingly.  
                    </label>
    
					<label>
						<input type="checkbox" required value="1" name="tables_responsibility"> Vendors are responsible for bringing their own tables, chairs, tents, and displays. 
	                </label>
	            </div>

            </div>

            <div class="form-group" style="text-align:center;">
                <input class="btn btn-default" type="submit" value="Submit" id="submit">
            </div>
        </form>
	</div>
@stop
