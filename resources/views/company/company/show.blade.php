@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company') }} {{ $company->id }}</h3>
                    @can('view-'.str_slug('Company'))
                        <a class="btn btn-success pull-right" href="{{ url('/company/company') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $company->id }}</td>
                            </tr>
                            <tr><th> Name </th><td> {{ $company->name }} </td></tr><tr><th> Email </th><td> {{ $company->email }} </td></tr><tr><th> Password </th><td> {{ $company->password }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

