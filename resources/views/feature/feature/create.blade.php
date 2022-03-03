@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">Create New {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Feature') }}</h3>
                    @can('view-'.str_slug('Feature'))
                    <a  class="btn btn-success pull-right" href="{{url('/feature/feature')}}"><i class="icon-arrow-left-circle"></i> Add {{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Feature') }}</a>
                    @endcan

                    <div class="clearfix"></div>
                    <hr>
                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="{{ url('/feature/feature') }}" accept-charset="UTF-8"
                          class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        @include ('feature.feature.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
