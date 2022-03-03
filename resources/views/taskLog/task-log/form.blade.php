<div class="form-group {{ $errors->has('task_id') ? 'has-error' : ''}}">
    <label for="task_id" class="col-md-4 control-label">{{ 'Task Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="task_id" type="text" id="task_id" value="{{ $tasklog->task_id??''}}" >
        {!! $errors->first('task_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('activity_name') ? 'has-error' : ''}}">
    <label for="activity_name" class="col-md-4 control-label">{{ 'Activity Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="activity_name" type="text" id="activity_name" value="{{ $tasklog->activity_name??''}}" >
        {!! $errors->first('activity_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('process') ? 'has-error' : ''}}">
    <label for="process" class="col-md-4 control-label">{{ 'Process' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="process" type="text" id="process" value="{{ $tasklog->process??''}}" >
        {!! $errors->first('process', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="status" type="textarea" id="status" >{{ $tasklog->status??''}}</textarea>
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('note') ? 'has-error' : ''}}">
    <label for="note" class="col-md-4 control-label">{{ 'Note' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="note" type="textarea" id="note" >{{ $tasklog->note??''}}</textarea>
        {!! $errors->first('note', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
