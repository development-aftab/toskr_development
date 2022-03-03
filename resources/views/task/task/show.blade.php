@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Task') }} {{ $task->id }}</h3>
                    @can('view-'.str_slug('Task'))
                        <a class="btn btn-success pull-right" href="{{ url('/task/task') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $task->id }}</td>
                            </tr>
                            <tr><th> Project Name </th><td> {{ $task->project_name }} </td></tr><tr><th> Category </th><td> {{ $task->category }} </td></tr><tr><th> Image </th><td> {{ $task->image }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

