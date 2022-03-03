<div class="form-group {{ $errors->has('nam') ? 'has-error' : ''}}">
    <label for="nam" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nam" type="text" id="nam" value="{{ $socialmedia->nam??''}}" >
        {!! $errors->first('nam', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('link') ? 'has-error' : ''}}">
    <label for="links" class="col-md-4 control-label">{{ 'Link' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="link" type="text" id="link" value="{{ $socialmedia->link??''}}" >
        {!! $errors->first('link', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-md-4 control-label">{{ 'image' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="image" type="file" id="image" value="{{ $socialmedia->image??''}}" >
        <input class="form-control" name="oldimage" type="hidden" value="{{ $socialmedia->image??''}}" >
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
