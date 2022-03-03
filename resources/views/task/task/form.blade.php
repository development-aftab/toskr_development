<div class="form-group {{ $errors->has('project_name') ? 'has-error' : ''}}">
    <label for="project_name" class="col-md-4 control-label">{{ 'Project Name' }}</label>
    <div class="col-md-6">
        <input type="hidden" name="company_id" value="{{ Auth::user()->company_id }}">
        <input type="hidden" name="manager_id" value="{{ Auth::id() }}">
        <input class="form-control" name="project_name" type="text" id="project_name" value="{{ $task->project_name??''}}" >
        {!! $errors->first('project_name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('category') ? 'has-error' : ''}}">
    <label for="category" class="col-md-4 control-label">{{ 'Category' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="category" type="text" id="category" value="{{ $task->category??''}}" > --}}
         <select class="form-control" name="category" id="category">
           @foreach($category as $element)
             <option @if (isset($task) && $task->category == $element->id) selected @endif value="{{ $element->id }}">{{ $element->name }}</option>
           @endforeach 
         </select>
        {!! $errors->first('category', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="col-md-4 control-label">{{ 'Image Or Document' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="image" type="text" id="image" value="{{ $task->image??''}}" > --}}
         <input class="form-control" name="image" type="file" id="pic" value="{{ $task->pic??''}}">
          <input type="hidden" name="oldimage" value="{{ $task->profile->pic ?? ''}}">
           {{-- <img src="{{asset('storage')}}/uploads/users/{{ $task->profile->pic??'' }}" id="imagePreview_1" width="100" height="100"> --}}
        {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('start_date') ? 'has-error' : ''}}">
    <label for="start_date" class="col-md-4 control-label">{{ 'Start Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="start_date" type="date" id="start_date" value="{{ $task->start_date??''}}" >
        {!! $errors->first('start_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="col-md-4 control-label">{{ 'End Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="end_date" type="date" id="end_date" value="{{ $task->end_date??''}}" >
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('assign_to') ? 'has-error' : ''}}">
    <label for="assign_to" class="col-md-4 control-label">{{ 'Assign To' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="assign_to" type="text" id="assign_to" value="{{ $task->assign_to??''}}" > --}}
        <select class="form-control js-example-basic-multiple"  multiple="multiple" name="assign[]" id="assign_to">
          @foreach ($employee as $element)
            @if($element->hasRole('employee'))
             <option value="{{ $element->id }}">{{ $element->name }}</option>
            @endif 
          @endforeach  
        </select>
        {!! $errors->first('assign_to', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('priority') ? 'has-error' : ''}}">
    <label for="priority" class="col-md-4 control-label">{{ 'Priority' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="priority" type="text" id="priority" value="{{ $task->priority??''}}" > --}}
        <select class="form-control" name="priority" id="priority">
            <option @if(isset($task) && $task->priority == 'High' ) selected @endif value="High">High</option>
            <option @if(isset($task) && $task->priority == 'Medium' ) selected @endif value="Medium">Medium</option>
            <option @if(isset($task) && $task->priority == 'Low' ) selected  @endif value="Low">Low</option>
        </select>
        {!! $errors->first('priority', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        {{-- <input class="form-control" name="description" type="text" id="description" value="{{ $task->description??''}}" > --}}
        <textarea class="form-control" name="description" id="description" value="{{ $task->description??''}}">{{ $task->description??''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText??'Create' }}">
    </div>
</div>
@push('js')
<script type="text/javascript">
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>
@endpush