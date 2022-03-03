<div class="form-group {{ $errors->has('taski_id') ? 'has-error' : ''}}">
    <label for="taski_id" class="col-md-4 control-label">{{ 'Taski Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="taski_id" type="text" id="taski_id" value="{{ $coworkerrequest->taski_id??''}}" >
        {!! $errors->first('taski_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('manager_id') ? 'has-error' : ''}}">
    <label for="manager_id" class="col-md-4 control-label">{{ 'Manager Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="manager_id" type="text" id="manager_id" value="{{ $coworkerrequest->manager_id??''}}" >
        {!! $errors->first('manager_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
    <label for="user_id" class="col-md-4 control-label">{{ 'User Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="user_id" type="text" id="user_id" value="{{ $coworkerrequest->user_id??''}}" >
        {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="status" type="text" id="status" value="{{ $coworkerrequest->status??''}}" >
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
