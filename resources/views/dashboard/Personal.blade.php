@extends('layouts.master')

@section('content')
    <div class="container-fluid profile_setting">
    	<h2> Setting </h2>
        <div class="row custom_white_box">
        	<div class="col-md-12">
        		<h4>Personal</h4>
        		<form method="POST" action="{{ route('update_personal') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
        			<label>Name</label>
        			<div class="form-group mb-3">
        			  
					  <input type="text" class="form-control" name="name" value="{{ Auth::user()->name??'' }}" placeholder="Name">
					  <div class="input-group-prepend">
					    <button class="input-group-text"  id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					 <label>Designation</label>
					<div class="form-group mb-3">
        			 
					  <input type="text" class="form-control" value="@if(Auth::user()->hasRole('Manager')) Manager @else Employee @endif" placeholder="Designation" >
					  <div class="input-group-prepend">
					    <button class="input-group-text"   id="" disabled><i class="icon-pencil"></i></button>
					  </div>
					</div>
					<label>Gender</label>
					<div class="form-group mb-3">
        			  
					  <input type="text" class="form-control" name="gender" value="{{ Auth::user()->profile->gender??'' }}" placeholder="Gender">
					  <div class="input-group-prepend">
					    <button class="input-group-text"  id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					<button class="btn mt-3">Update</button>
        		</form>
        	</div>
        </div>




    </div>
@endsection

