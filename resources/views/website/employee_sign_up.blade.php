@extends('layouts.app')

@section('content')
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
             <form method="POST" action="{{ route('register_employee_procces') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                {{csrf_field()}}
                <h3 class="box-title m-b-20">Sign Up</h3>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input type="hidden" name="company_id" value="{{ $invitation->company_id }}">
                        <input type="hidden" name="department_id" value="{{ $invitation->department_id }}">
                        <input type="hidden" name="role_id" value="{{ $invitation->role_id }}">
                        <input type="hidden" name="unique_code" value="{{ $invitation->unique_code }}">

                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Name" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email" value="{{ $invitation->email }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" placeholder="Phone" value="{{ old('phone') }}" required>

                        @if ($errors->has('phone'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="Company Name" type="text" class="form-control{{ $errors->has('Company Name') ? ' is-invalid' : '' }}" name="company_name" placeholder="Company Name" value="{{ $invitation->getCompanyDetail->name }}" readonly required>

                        @if ($errors->has('Company Name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('Company Name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div> 
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="department" type="text" class="form-control{{ $errors->has('department') ? ' is-invalid' : '' }}" name="department" placeholder="Department" value="{{ $invitation->getDepartmentDetail->name }}" readonly required>

                        @if ($errors->has('department'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('department') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                       <input id="image" type="file" class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}" placeholder="image" name="image" value="{{ old('image') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary p-t-0">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                    </div>
                </div>
                <div class="form-group m-b-0">
                    <div class="col-sm-12 text-center">
                        <p>Already have an account? <a href="{{route('login')}}" class="text-primary m-l-5"><b>Sign In</b></a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection

