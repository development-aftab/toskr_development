@extends('layouts.master')

@section('content')
    <div class="container-fluid profile_setting">
    	<h2> Setting </h2>
        <div class="row custom_white_box">
        	<div class="col-md-12">
        		<h4>Change Password</h4>
        		<form method="POST" action="{{ route('update_password') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
        			<label>Current Password</label>
        			<div class="form-group mb-3">
        			  <input type="Password" class="form-control" name="currentpassword" placeholder="Current Password">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					 <label>New Password</label>
					<div class="form-group mb-3">
        			  <input type="Password" class="form-control" id="password" name="password" placeholder="New Password">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					<label>Retype Password</label>
					<div class="form-group mb-3">
        			  <input type="Password" class="form-control" id="Retype" placeholder="Retype Password">
					  <div class="input-group-prepend">
					    <button class="input-group-text" id=""><i class="icon-pencil"></i></button>
					  </div>
					</div>
					  <div class="registrationFormAlert" id="divCheckPasswordMatch"></div>
					  @if(Session::get('flash_message'))
                         <div class="registrationFormAlert">{{ Session::get('flash_message') }}</div>
                        @endif
					<button id="button_sub" class="btn mt-3">Update</button>
        		</form>
        	</div>
        </div>
    </div>
@endsection

@push('js')
<script type="text/javascript">
 $('#button_sub').hide();
 $("#Retype").keyup(function() {
        var password = $("#password").val();
        if(password == $(this).val()){
        	$("#divCheckPasswordMatch").html("Passwords match.");
        	$('#button_sub').show();
        }else{
        	$("#divCheckPasswordMatch").html("Passwords do not match!");
            $('#button_sub').hide();
        }
        
    });
</script>
@endpush