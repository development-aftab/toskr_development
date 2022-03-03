<div class="form-group {{ $errors->has('task_id') ? 'has-error' : ''}}">
    <label for="task_id" class="col-md-4 control-label">{{ 'Task Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="task_id" type="text" id="task_id" value="{{ $messageviewed->task_id??''}}" >
        {!! $errors->first('task_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('send_to') ? 'has-error' : ''}}">
    <label for="send_to" class="col-md-4 control-label">{{ 'Send To' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="send_to" type="text" id="send_to" value="{{ $messageviewed->send_to??''}}" >
        {!! $errors->first('send_to', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('receiver') ? 'has-error' : ''}}">
    <label for="receiver" class="col-md-4 control-label">{{ 'Receiver' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="receiver" type="text" id="receiver" value="{{ $messageviewed->receiver??''}}" >
        {!! $errors->first('receiver', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('viewed') ? 'has-error' : ''}}">
    <label for="viewed" class="col-md-4 control-label">{{ 'Viewed' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="viewed" type="text" id="viewed" value="{{ $messageviewed->viewed??''}}" >
        {!! $errors->first('viewed', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
