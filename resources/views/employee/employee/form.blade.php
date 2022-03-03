<div class="form-group {{ $errors->has('Department') ? 'has-error' : ''}}">
    <label for="department" class="col-md-4 control-label">{{ 'Department' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="department" type="text" id="department" value="{{ $employee->department??''}}" > --}}
        <input type="hidden" name="company_id" value="{{ Auth::id() }}">
        <select class="form-control" name="department_id"  id="department">
            @foreach ($department as $element)
             @if(Session::get('request_id') != $element->id ) @continue  @endif
             <option  value="{{ $element->id }}">{{ $element->name }}</option>
            @endforeach
        </select>
        {!! $errors->first('department', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('designation') ? 'has-error' : ''}}">
    <label for="designation" class="col-md-4 control-label">{{ 'Designation' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="name" type="text" id="name" value="{{ $employee->name??''}}" > --}}
        <select class="form-control" name="role_id"  id="designation">
            <option  value="5">Manager</option>
            <option  value="4">Employee</option>
        </select>
        {!! $errors->first('designation', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $employee->name??''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
    <label for="email" class="col-md-4 control-label">{{ 'Email' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="email" type="text" id="email" value="{{ $employee->email??''}}" >
        {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
    <label for="password" class="col-md-4 control-label">{{ 'Password' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="password" type="password" id="password" value="{{ $employee->password??''}}" >
        {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
    <label for="gender" class="col-md-4 control-label">{{ 'Gender' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="gender" type="text" id="gender" value="{{ $employee->gender??''}}" > --}}
         <select class="form-control" name="gender" id="gender" >
             <option value="male">Male</option>
             <option value="female">Female</option>
         </select>
        {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dob') ? 'has-error' : ''}}">
    <label for="dob" class="col-md-4 control-label">{{ 'Dob' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dob" type="date" id="dob" value="{{ $employee->dob??''}}" >
        {!! $errors->first('dob', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('phone') ? 'has-error' : ''}}">
    <label for="phone" class="col-md-4 control-label">{{ 'Phone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="phone" type="text" id="phone" value="{{ $employee->phone??''}}" >
        {!! $errors->first('phone', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('pic') ? 'has-error' : ''}}">
    <label for="pic" class="col-md-4 control-label">{{ 'Pic' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="image" type="file" id="pic" value="{{ $employee->pic??''}}" onchange="PreviewImage_1();">
          <input type="hidden" name="oldpic" value="{{ $employee->profile->pic ?? ''}}">
           <img src="{{asset('storage')}}/uploads/users/{{ $employee->profile->pic??'' }}" id="imagePreview_1" width="100" height="100">
        {!! $errors->first('pic', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
@push('js')
    <script type="text/javascript">
       function PreviewImage_1() {
                    var oFReader = new FileReader();
                    oFReader.readAsDataURL(document.getElementById("pic").files[0]);
                    oFReader.onload = function (oFREvent) {
                    document.getElementById("imagePreview_1").src = oFREvent.target.result;
                    };
                };
    </script>
@endpush