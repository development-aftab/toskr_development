@extends('layouts.master')

@section('content')
    <div class="container-fluid Profile_sec">
		<h2>My Profile</h2>
        <div class="row white-box ">
       		<div class="col-md-2 img-col">
        		<div class="profile_upload_image">
                    <img src="{{asset('storage')}}/uploads/users/{{ Auth::user()->profile->pic??'' }}" width="50" height="50" class=" img-responsive ">
                     <form method="POST" action="{{ route('user_image_change') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                      <input type="file" id="image_change" name="image" class="profile_image_upload" >
                      <input type="hidden" value="{{ Auth::user()->profile->pic??'' }}"  name="oldimage" class="profile_image_upload">
                      <button id="select_date" style="display: none;" type="submit"></button>
                    </form>
                </div>
                <p>Employee Id:<span>000{{ Auth::user()->id }}</span></p>
        	</div>
        	<div class="col-md-10 desc_col">
        		<h4>M. Omar</h4>
        		<p></p>
        		<ul>
        			<li>
        				<i class="fa fa-mobile-phone" aria-hidden="true"></i>
        				<input type="tel" name="phone" id="phone" value="{{ Auth::user()->profile->phone??'' }}" class="form-control" >
        				<button type="button" class="phone_button" ><i class="icon-pencil"></i></button>
        			</li>
        			<li>
        				<i class="fa fa-birthday-cake"></i>
        				<input type="date" name="dob" id="dob" value="{{ Auth::user()->profile->dob??'' }}" class="form-control" >
        				<button type="button" class="dob_button" ><i class="icon-pencil"></i></button>
        			</li>
        			<li>
        				<i class="fa fa-envelope"></i>
        				<input type="email" name="email" id="email" value="{{ Auth::user()->email??'' }}" class="form-control" >
        				<button type="button" class="email_button" ><i class="icon-pencil"></i></button>
        			</li>
        			<li>
        				<i class="fa fa-book" aria-hidden="true"></i>
        				<input type="text" name="address" id="address" value="{{ Auth::user()->profile->address??'' }}" class="form-control" >
        				<button type="button" class="address_button" ><i class="icon-pencil"></i></button>
        			</li>
        		</ul>
        	</div>
        </div>




    </div>
@endsection

@push('js')
<script type="text/javascript">

  $(document).on('change','#image_change', function(e){
          $('#select_date').click();
    }); 
  
  $(document).on('click','.address_button', function(e){
          address = $('#address').val();
          $.ajax({
                      type: 'POST',
                      url: "{{route('address_update')}}",
                      data: {
                        '_token':'{{csrf_token()}}',
                        'address':address
                      },
                      success: function(result) {
                        location.reload();
                      },
                      error : function(error) {
                      }
          });
    });
  $(document).on('click','.email_button', function(e){
          email = $('#email').val();
          $.ajax({
                      type: 'POST',
                      url: "{{route('email_update')}}",
                      data: {
                        '_token':'{{csrf_token()}}',
                        'email':email
                      },
                      success: function(result) {
                        location.reload();
                      },
                      error : function(error) {
                      }
          });
    });
  
  $(document).on('click','.dob_button', function(e){
        dob = $('#dob').val();
          $.ajax({
                      type: 'POST',
                      url: "{{route('dob_update')}}",
                      data: {
                        '_token':'{{csrf_token()}}',
                        'dob':dob
                      },
                      success: function(result) {
                        location.reload();
                      },
                      error : function(error) {
                      }
          });
          
    });
  $(document).on('click','.phone_button', function(e){
       phone = $('#phone').val();
          $.ajax({
                      type: 'POST',
                      url: "{{route('phone_update')}}",
                      data: {
                        '_token':'{{csrf_token()}}',
                        'phone':phone
                      },
                      success: function(result) {
                        location.reload();
                      },
                      error : function(error) {
                      }
          });   
    });
</script>
@endpush