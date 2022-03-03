<div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
    <label for="company_id" class="col-md-4 control-label">{{ 'Company Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="company_id" type="text" id="company_id" value="{{ $invitation->company_id??''}}" >
        {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('department_id') ? 'has-error' : ''}}">
    <label for="department_id" class="col-md-4 control-label">{{ 'Department Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="department_id" type="text" id="department_id" value="{{ $invitation->department_id??''}}" >
        {!! $errors->first('department_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('role_id') ? 'has-error' : ''}}">
    <label for="role_id" class="col-md-4 control-label">{{ 'Role Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="role_id" type="text" id="role_id" value="{{ $invitation->role_id??''}}" >
        {!! $errors->first('role_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('url') ? 'has-error' : ''}}">
    <label for="url" class="col-md-4 control-label">{{ 'Url' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="url" type="text" id="url" value="{{ $invitation->url??''}}" >
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="status" type="text" id="status" value="{{ $invitation->status??''}}" >
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
