@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'MessageViewed') }} {{ $messageviewed->id }}</h3>
                    @can('view-'.str_slug('MessageViewed'))
                        <a class="btn btn-success pull-right" href="{{ url('/messageViewed/message-viewed') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $messageviewed->id }}</td>
                            </tr>
                            <tr><th> Task Id </th><td> {{ $messageviewed->task_id }} </td></tr><tr><th> Send To </th><td> {{ $messageviewed->send_to }} </td></tr><tr><th> Receiver </th><td> {{ $messageviewed->receiver }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

