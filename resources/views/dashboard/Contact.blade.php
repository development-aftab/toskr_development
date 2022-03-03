@extends('layouts.master')

@section('content')
    <div class="container-fluid profile_setting">
    	<h2> Setting </h2>
        <div class="row custom_white_box">
        	<div class="col-md-12">
        		<h4>Contact</h4>
        		<form method="POST" action="{{ route('update_contact') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
        			<label>Email Address</label>
        			<div class="form-group mb-3">
        			  
					  <input type="email" class="form-control" name="email" value="{{ Auth::user()->email??'' }}" placeholder="Emial Address">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					 <label>Phone Number</label>
					<div class="form-group mb-3">
        			 
					  <input type="tel" class="form-control" name="phone" value="{{ Auth::user()->profile->phone??'' }}" placeholder="Phone Number">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					<label>Skype ID</label>
					<div class="form-group mb-3">
        			  
					  <input type="text" class="form-control" value="{{ Auth::user()->profile->skype??'' }}" name="skype" placeholder="Skype ID">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					<button class="btn mt-3">Update</button>
        		</form>
        	</div>
        </div>




    </div>
@endsection

