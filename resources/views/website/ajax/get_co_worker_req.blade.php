 @foreach ($requests as $element)
	  <a>
        <div class="mail-contnet">
            <h5>{{ $element->gettaskManagerDetail->name }} Task Owner</h5>
            <span class="mail-desc">Invite you to join task {{ $element->gettaskDetail->project_name }} </span>
            <span class="time">{{ \Carbon\Carbon::parse($element->created_at)->format('h.i A') }}</span>
	        <div class="buttons">
	            <span><a href="{{ route('accept_task') }}/{{ $element->id }}" class="btn btn-success accept_btn">Accept</a></span>
	            <span><a href="{{ route('reject_task') }}/{{ $element->id }}" class="btn btn-danger btn_reject reject_btn">Reject</a></span>
	        </div>
        </div>
     </a>
 @endforeach