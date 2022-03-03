@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'CoworkerRequest') }} {{ $coworkerrequest->id }}</h3>
                    @can('view-'.str_slug('CoworkerRequest'))
                        <a class="btn btn-success pull-right" href="{{ url('/coworkerRequest/coworker-request') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $coworkerrequest->id }}</td>
                            </tr>
                            <tr><th> Taski Id </th><td> {{ $coworkerrequest->taski_id }} </td></tr><tr><th> Manager Id </th><td> {{ $coworkerrequest->manager_id }} </td></tr><tr><th> User Id </th><td> {{ $coworkerrequest->user_id }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

