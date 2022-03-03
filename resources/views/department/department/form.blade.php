<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $department->name??''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
        <input class="form-control" name="company_id" type="hidden" id="company_id" value="{{ Auth::id() }}" >
{{-- <div class="form-group {{ $errors->has('company_id') ? 'has-error' : ''}}">
    <label for="company_id" class="col-md-4 control-label">{{ 'Company Id' }}</label>
    <div class="col-md-6">
        {!! $errors->first('company_id', '<p class="help-block">:message</p>') !!}
    </div>
</div> --}}

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
