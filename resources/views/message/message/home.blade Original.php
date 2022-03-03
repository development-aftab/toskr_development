@extends('layouts.master')

@push('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Chat App</title> --}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/chat.css') }}" />
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script>
        var base_url = '{{ url("/chat") }}';
    </script>
    @endpush
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            @if($users->count() > 0)
                <h3>Pick Instructor(Teacher) to chat with</h3>
                <ul id="users">
                    @foreach($users as $user)
                    @if ($user->HasRole('instructor'))
                        <li><span class="label label-info">{{ $user->name }}</span> <a href="javascript:void(0);" class="chat-toggle" data-id="{{ $user->id }}" data-user="{{ $user->name }}">Open chat</a></li>                        
                    @endif
                    @endforeach
                </ul>
            @else
                <p>No users found! try to add a new user using another browser by going to <a href="{{ url('register') }}">Register page</a></p>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            @if($users->count() > 0)
                <h3>Pick Student to chat with</h3>
                <ul id="users">
                    @foreach($users as $user)
                        @if ($user->HasRole('student'))
                            <li><span class="label label-info">{{ $user->name }}</span> <a href="javascript:void(0);" class="chat-toggle" data-id="{{ $user->id }}" data-user="{{ $user->name }}">Open chat</a></li>                        
                        @endif
                    @endforeach
                </ul>
            @else
                <p>No users found! try to add a new user using another browser by going to <a href="{{ url('register') }}">Register page</a></p>
            @endif
        </div>
    </div>
    <!-- @include('chatbox.chat-box') -->
    <input type="hidden" id="current_user" value="{{ \Auth::user()->id??'' }}" />
    <input type="hidden" id="pusher_app_key" value="{{ env('PUSHER_APP_KEY') }}" />
    <input type="hidden" id="pusher_cluster" value="{{ env('PUSHER_APP_CLUSTER') }}" />
</div>
<div id="chat-overlay" class="row"></div>
    <audio id="chat-alert-sound" style="display: none">
        <source src="{{ asset('sound/facebook_chat.mp3') }}" />
    </audio>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script src="{{ asset('js/chat.js') }}"></script>
@endsection