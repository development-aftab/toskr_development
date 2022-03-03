@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left">{{ preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'TaskDetail') }} {{ $taskdetail->id }}</h3>
                    @can('view-'.str_slug('TaskDetail'))
                        <a class="btn btn-success pull-right" href="{{ url('/taskDetail/task-detail') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    @endcan
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $taskdetail->id }}</td>
                            </tr>
                            <tr><th> Task Id </th><td> {{ $taskdetail->task_id }} </td></tr><tr><th> Activity Name </th><td> {{ $taskdetail->activity_name }} </td></tr><tr><th> Process </th><td> {{ $taskdetail->process }} </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="row">
            <h2>Task Detail</h2>
            <div class="col-md-4">
                <div class="white-box ui_ux_box">
                    <h4>UI/UX Designs</h4>
                    <p class="sub_heading">Lorem ipsum dolor sit amet</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>

                    <h6>Progress</h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-danger" style="width: 60%;" role="progressbar">
                        <span class="sr-only">60% Complete</span></div>
                    </div>
                </div> 

                <div class="white-box">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Created</th>
                                <td>10 july, 2021</td>
                            </tr>
                            <tr>
                                <th>Deadline</th>
                                <td>25 Aug, 2021</td>
                            </tr>
                            <tr>
                                <th>Priority</th>
                                <td>Highest</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>Working</td>
                            </tr>
                            <tr>
                                <th>Tags</th>
                                <td>#vp, #Q3</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="white-box">
                    <h4>Deliverables</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid">
                                </td>
                                <td>
                                    <h5>Jack Connor</h5>
                                    <p>Yesterday</p>
                                </td>
                                <td>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </td>
                                <td>
                                    <a href="#!">
                                        <img src="">
                                        <p>File name.pdf</p>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{asset('storage')}}/uploads/users/no_avatar.jpg" class="img-fluid">
                                </td>
                                <td>
                                    <h5>Jack Connor</h5>
                                    <p>Yesterday</p>
                                </td>
                                <td>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                </td>
                                <td>
                                    <a href="#!">
                                        <img src="">
                                        <p>File name.pdf</p>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="white-box">
                    <h4>Assigned Team</h4>
                    <div class="profile">
                        <div class="image">
                            <img src="">
                        </div>
                        <div class="desc">
                            <h5>Jack Connor</h5>
                            <a href="">info@jackconnor@gmail.com</a>
                            <p>project Lead</p>
                        </div>
                    </div>
                    <hr>
                    <div class="profiles row">
                        <div class="profile col-md-4">
                            <div class="image">
                                <img src="">
                            </div>
                            <div class="desc">
                                <h5>Jack Connor</h5>
                                <p>project Lead</p>
                            </div>
                        </div>
                        <div class="profile col-md-4">
                            <div class="image">
                                <img src="">
                            </div>
                            <div class="desc">
                                <h5>Jack Connor</h5>
                                <p>project Lead</p>
                            </div>
                        </div>
                        <div class="profile col-md-4">
                            <div class="image">
                                <img src="">
                            </div>
                            <div class="desc">
                                <h5>Jack Connor</h5>
                                <p>project Lead</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                
            </div>
        </div>




    </div>
@endsection

