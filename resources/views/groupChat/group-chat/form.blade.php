<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $groupchat->name??''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('admin_id') ? 'has-error' : ''}}">
    <label for="admin_id" class="col-md-4 control-label">{{ 'Admin Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="admin_id" type="number" id="admin_id" value="{{ $groupchat->admin_id??''}}" >
        {!! $errors->first('admin_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('members') ? 'has-error' : ''}}">
    <label for="members" class="col-md-4 control-label">{{ 'Members' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="members" type="textarea" id="members" >{{ $groupchat->members??''}}</textarea>
        {!! $errors->first('members', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('group_id') ? 'has-error' : ''}}">
    <label for="group_id" class="col-md-4 control-label">{{ 'Group Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="group_id" type="text" id="group_id" value="{{ $groupchat->group_id??''}}" >
        {!! $errors->first('group_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
