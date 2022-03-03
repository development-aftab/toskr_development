    
{{-- @php
    $chat_messages = $response['message'];
    // echo "<pre>";
        // print_r($response['message'][0]->content);
    // echo "</pre>";
@endphp

@forelse($chat_messages as $chat_message)
    @if($chat_message->from_user == \Auth::user()->id)
        <div class="row" data-message-id="{{ $chat_message->id }}">
            <div class="col-md-10">
                <div class="messages msg_sent text-right">
                    <p>{!! $chat_message->content !!}</p>
                    <time datetime="{{ date("Y-m-dTH:i", strtotime($chat_message->created_at->toDateTimeString())) }}">
                        {{ $chat_message->getFromUser()->name }} • {{ $chat_message->created_at->diffForHumans() }}
                    </time>
                </div>
            </div>
            <div class="col-md-2 col-xs-2 avatar">
                <img src="{{ asset('upload/Profile_Images/'. $chat_message->getFromUser()->name) }}" width="50" height="50" class="img-responsive">
            </div>
        </div>
    @else
        <div class="row msg_container base_receive" data-message-id="{{ $chat_message->id }}">
            <div class="col-md-2 col-xs-2 avatar">
                <img src="{{ asset('upload/Profile_Images/'.auth()->user()->profile_images) }}" width="50" height="50" class=" img-responsive ">
            </div>
            <div class="col-md-10 col-xs-10">
                <div class="messages msg_receive text-left">
                    <p>{!! $chat_message->content !!}</p>
                    <time datetime="{{ date("Y-m-dTH:i", strtotime($chat_message->created_at->toDateTimeString())) }}">{{ $chat_message->getFromUser()->name??"" }} • {{ $chat_message->created_at->diffForHumans() }}</time>
                </div>
            </div>
        </div>
    @endif
@empty
     
@endforelse --}}


@php
    $chat_messages = $response['message'];
    // echo "<pre>";
        // print_r($response['message'][0]->content);
    // echo "</pre>";
@endphp
@foreach ($chat_messages as $message) 
    @if($message->from_user_id == Auth::user()->id)
        <div class="row msg_container base_sent" data-message-id="{{ $message->id }}">

            <div class="message_container">
                <p>{!! $message->content !!}</p>
                <p class="time">
                    <span> <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ $message->getFromUser()->name??'' }} {{ $message->created_at->diffForHumans() }}</time></span>
                </p>
            </div>
            <div class="image">
                <img src="{{asset('storage')}}/uploads/users/{{ $message->getFromUser->profile->pic??'' }}" width="50" height="50" class=" img-responsive ">
                <p>{{ $message->getFromUser->name??'' }}</p>
            </div>


            {{-- <div class="col-md-11 col-xs-10">
                <h5 class="msg_sent text-right"><strong>{{ $message->getFromUser->name??'' }}</strong></h5>
                <div class="messages msg_sent text-right">
                    <p>{!! $message->content !!}</p>
                    <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ $message->getFromUser()->name??'' }} {{ $message->created_at->diffForHumans() }}</time>
                </div>
            </div>
            <div class="col-md-1 col-xs-2 avatar">
                @if(isset($message->getFromUser->profile->pic))
                <img src="{{asset('storage')}}/uploads/users/{{ $message->getFromUser->profile->pic??'' }}" width="50" height="50" class="img-responsive">
                 @else
                <img src="{{ asset('upload')}}/Profile_Images/chat.jpg" width="50" height="50" class=" img-responsive ">
                @endif
            </div> --}}
        </div>
    @else
        <div class="row msg_container base_receive" data-message-id="{{ $message->id }}">


            <div class="message_container">
                <p>{!! $message->content !!}</p>
                <p class="time">
                    <span> <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ $message->getFromUser()->name??'' }} {{ $message->created_at->diffForHumans() }}</time></span>
                </p>
            </div>
            <div class="image">
                <img src="{{asset('storage')}}/uploads/users/{{ $message->getFromUser->profile->pic??'' }}" width="50" height="50" class=" img-responsive ">
                <p>{{ $message->getFromUser->name??'' }}</p>
            </div>

            
            {{-- <div class="col-md-1 col-xs-1 avatar">
                @if(isset($message->getFromUser->profile->pic))
                <img src="{{asset('storage')}}/uploads/users/{{ $message->getFromUser->profile->pic??'' }}" width="50" height="50" class=" img-responsive ">
                @else
                <img src="{{ asset('upload')}}/Profile_Images/chat.jpg" width="50" height="50" class=" img-responsive ">
                @endif
            </div>
            <div class="col-md-11 col-xs-11">
                <h5><strong>{{ $message->getFromUser->name??'' }}</strong></h5>
                <div class="messages msg_receive text-left  custom_position">
                    <p>{!! $message->content !!}</p>
                    <time datetime="{{ date("Y-m-dTH:i", strtotime($message->created_at->toDateTimeString())) }}">{{ $message->getFromUser()->name??"" }}  {{ $message->created_at->diffForHumans() }}</time>
                </div>
            </div> --}}
        </div>
    @endif
@endforeach