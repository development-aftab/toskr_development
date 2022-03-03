<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
           data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="{{'/dashboard'}}">
               {{--  <b>
                    <img src="{{asset('')}}{{ App\CommonSetting::first()->dashboard_logo??'' }}" alt="home" style="height: 30px" />
                </b>
                <span> --}}
                    <img src="{{asset('')}}{{ App\CommonSetting::first()->dashboard_logo_text??'' }}" alt="homepage" class="dark-logo" style="height: 131px;width: 193px" />{{-- 
                </span> --}}
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            @if(session()->get('theme-layout') != 'fix-header')
                <li class="sidebar-toggle">
                    <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                </li>
            @endif


            <li>
                <form role="search" class="app-search hidden-xs">
                    <i class="icon-magnifier"></i>
                    <input type="text" placeholder="Search..." name="query" class="form-control">
                </form>
            </li>
        </ul>

        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown"
                   href="javascript:void(0);">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-xs badge-danger"> <?php   $count = App\CoworkerRequest::where('user_id',Auth::id())->where('status', 0)->count();?>
                        {{ $count }}
                    </span>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                   
                    <li>
                        <div class="message-center">
                       
                            {{-- <a href="javascript:void(0);">
                                <div class="user-img">
                                    <img src="{{asset('plugins/images/users/1.jpg')}}" alt="user" class="img-circle">
                                    <span class="profile-status online pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:30 AM</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="user-img">
                                    <img src="{{asset('plugins/images/users/2.jpg')}}" alt="user" class="img-circle">
                                    <span class="profile-status busy pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5>
                                    <span class="mail-desc">I've sung a song! See you at</span>
                                    <span class="time">9:10 AM</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="user-img">
                                    <img src="{{asset('plugins/images/users/3.jpg')}}" alt="user"
                                         class="img-circle"><span class="profile-status away pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5>
                                    <span class="mail-desc">I am a singer!</span>
                                    <span class="time">9:08 AM</span>
                                </div>
                            </a>
                            <a href="javascript:void(0);">
                                <div class="user-img">
                                    <img src="{{asset('plugins/images/users/4.jpg')}}" alt="user" class="img-circle">
                                    <span class="profile-status offline pull-right"></span>
                                </div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5>
                                    <span class="mail-desc">Just see the my admin!</span>
                                    <span class="time">9:02 AM</span>
                                </div>
                            </a> --}}
                        </div>
                    </li>
                    
                </ul>
            </li>
            {{-- <li class="dropdown">
                <a class="dropdown-toggle waves-effect waves-light font-20" data-toggle="dropdown"
                   href="javascript:void(0);">
                    <i class="icon-calender"></i>
                    <span class="badge badge-xs badge-danger">3</span>
                </a>
                <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                    <li>
                        <a href="javascript:void(0);">
                            <div>
                                <p>
                                    <strong>Task 1</strong>
                                    <span class="pull-right text-muted">40% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                            <div>
                                <p>
                                    <strong>Task 2</strong>
                                    <span class="pull-right text-muted">20% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                            <div>
                                <p>
                                    <strong>Task 3</strong>
                                    <span class="pull-right text-muted">60% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="javascript:void(0);">
                            <div>
                                <p>
                                    <strong>Task 4</strong>
                                    <span class="pull-right text-muted">80% Complete</span>
                                </p>
                                <div class="progress progress-striped active">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="javascript:void(0);">
                            <strong>See All Tasks</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </li> --}}
            <li class="right-side-toggle">
                {{-- <a class="right-side-toggler waves-effect waves-light b-r-0 font-20" href="javascript:void(0)">
                    <i class="icon-settings"></i>
                </a> --}}
                <div class="profile_toggler">
                    <div class="profile_img">
                       <img src="{{asset('storage')}}/uploads/users/{{ Auth::user()->profile->pic??'' }}" class="avatar">
                       <div class="logout_dropdown">
                            <ul>
                                <li><a class="btn btn-success" href="{{ route('myprofle') }}">Profile</a></li>
                                <li class="two-column">
                                    <a class="waves-effect btn" href="javascript:void(0);" aria-expanded="false"><span class="hide-menu">&#160;&#160; Setting</span><i
                                                class="fa fa-angle-down"></i> </a>
                                    <ul aria-exzpanded="false" class="collapse">
                                        <li><a href="{{ route('Contact') }}">Contact</a></li>
                                        <li><a href="{{ route('Personal') }}">Personal</a></li>
                                        <li><a href="{{ route('Security') }}">Security</a></li>
                                        <li><a href="{{ route('Notification')}}">Notification</a></li>

                                    </ul>
                                </li>
                                <li><a class="btn btn-success" href="{{route('logout')}}">Logout</a></li>
                            </ul>
                           
                           
                           
                       </div>
                    </div>
                    <div class="profile_desc">
                        <h4>@if(Auth::user()->name == 'User') Admin @else {{ Auth::user()->name }} @endif</h4>
                        <p>@if(Auth::user()->hasRole('Manager')) Manager @elseif(Auth::user()->hasRole('employee')) Employee @elseif(Auth::user()->hasRole('company')) Company @elseif(Auth::user()->hasRole('user')) Admin @elseif(Auth::user()->hasRole('admin')) Developer @endif</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
@push('js')
<script type="text/javascript">
    jQuery('.logout_dropdown a.waves-effect.btn').click(function(){
     jQuery('.logout_dropdown li>ul.collapse').toggleClass('show');
    });
    jQuery('.navbar-right .profile_toggler>.profile_img>img').click(function(){
    jQuery('.logout_dropdown').toggleClass('show');
});
     $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#employee tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
</script>

</script>
@endpush