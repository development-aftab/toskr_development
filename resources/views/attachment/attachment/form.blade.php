<div class="form-group {{ $errors->has('task_id') ? 'has-error' : ''}}">
    <label for="task_id" class="col-md-4 control-label">{{ 'Task Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="task_id" type="text" id="task_id" value="{{ $attachment->task_id??''}}" >
        {!! $errors->first('task_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('employee_id') ? 'has-error' : ''}}">
    <label for="employee_id" class="col-md-4 control-label">{{ 'Employee Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="employee_id" type="text" id="employee_id" value="{{ $attachment->employee_id??''}}" >
        {!! $errors->first('employee_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Name') ? 'has-error' : ''}}">
    <label for="Name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Name" type="text" id="Name" value="{{ $attachment->Name??''}}" >
        {!! $errors->first('Name', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
