<?php $__env->startPush('css'); ?>
    <style>
        .info-box .info-count {
            margin-top: 0px !important;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->user()->hasRole('admin')): ?>
        <div class="row m-0">

            <div class="col-md-3 col-sm-6 info-box">
                <div class="media">
                    <div class="media-left">
                        <span class="icoleaf bg-primary text-white"><i
                                    class="mdi mdi-checkbox-marked-circle-outline"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="info-count text-blue">154</h3>
                        <p class="info-text font-12">Bookings</p>
                        <span class="hr-line"></span>
                        <p class="info-ot font-15">Target<span class="label label-rounded label-success">300</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 info-box">
                <div class="media">
                    <div class="media-left">
                        <span class="icoleaf bg-primary text-white"><i class="mdi mdi-comment-text-outline"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="info-count text-blue">68</h3>
                        <p class="info-text font-12">Complaints</p>
                        <span class="hr-line"></span>
                        <p class="info-ot font-15">Total Pending<span
                                    class="label label-rounded label-danger">154</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 info-box">
                <div class="media">
                    <div class="media-left">
                        <span class="icoleaf bg-primary text-white"><i class="mdi mdi-coin"></i></span>
                    </div>
                    <div class="media-body">
                        <h3 class="info-count text-blue">&#36;9475</h3>
                        <p class="info-text font-12">Earning</p>
                        <span class="hr-line"></span>
                        <p class="info-ot font-15">March : <span class="text-blue font-semibold">&#36;514578</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 info-box b-r-0">
                <div class="media">
                    <div class="media-left p-r-5">
                        <div id="earning" class="e" data-percent="60">
                            <div id="pending" class="p" data-percent="55"></div>
                            <div id="booking" class="b" data-percent="50"></div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h2 class="text-blue font-22 m-t-0">Report</h2>
                        <ul class="p-0 m-b-20">
                            <li><i class="fa fa-circle m-r-5 text-primary"></i>60% Earnings</li>
                            <li><i class="fa fa-circle m-r-5 text-primary"></i>55% Pending</li>
                            <li><i class="fa fa-circle m-r-5 text-info"></i>50% Bookings</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="white-box stat-widget">
                        <div class="row">
                            <div class="col-md-3 col-sm-3">
                                <h4 class="box-title">Statistics</h4>
                            </div>
                            <div class="col-md-9 col-sm-9">
                                <select class="custom-select">
                                    <option selected value="0">Feb 04 - Mar 03</option>
                                    <option value="1">Mar 04 - Apr 03</option>
                                    <option value="2">Apr 04 - May 03</option>
                                    <option value="3">May 04 - Jun 03</option>
                                </select>
                                <ul class="list-inline">
                                    <li>
                                        <h6 class="font-15"><i class="fa fa-circle m-r-5 text-success"></i>New Sales
                                        </h6>
                                    </li>
                                    <li>
                                        <h6 class="font-15"><i class="fa fa-circle m-r-5 text-primary"></i>Existing
                                            Sales</h6>
                                    </li>
                                </ul>
                            </div>
                            <div class="stat chart-pos"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="white-box">
                        <h4 class="box-title">Task Progress</h4>
                        <div class="task-widget t-a-c">
                            <div class="task-chart" id="sparklinedashdb"></div>
                            <div class="task-content font-16 t-a-c">
                                <div class="col-sm-6 b-r">
                                    Urgent Tasks
                                    <h1 class="text-primary">05 <span class="font-16 text-muted">Tasks</span></h1>
                                </div>
                                <div class="col-sm-6">
                                    Normal Tasks
                                    <h1 class="text-primary">03 <span class="font-16 text-muted">Tasks</span></h1>
                                </div>
                            </div>
                            <div class="task-assign font-16">
                                Assigned To
                                <ul class="list-inline">
                                    <li class="p-l-0">
                                        <img src="<?php echo e(asset('plugins/images/users/1.png')); ?>" alt="user"
                                             data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Steave">
                                    </li>
                                    <li>
                                        <img src="<?php echo e(asset('plugins/images/users/2.png')); ?>" alt="user"
                                             data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Steave">
                                    </li>
                                    <li>
                                        <img src="<?php echo e(asset('plugins/images/users/3.png')); ?>" alt="user"
                                             data-toggle="tooltip"
                                             data-placement="top" title="" data-original-title="Steave">
                                    </li>
                                    <li class="p-r-0">
                                        <a href="javascript:void(0);" class="btn btn-success font-16">3+</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="white-box bg-primary color-box">
                        <h1 class="text-white font-light">&#36;6547 <span class="font-14">Revenue</span></h1>
                        <div class="ct-revenue chart-pos"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="white-box bg-success color-box">
                        <h1 class="text-white font-light m-b-0">5247</h1>
                        <span class="hr-line"></span>
                        <p class="cb-text">current visits</p>
                        <h6 class="text-white font-semibold">+25% <span class="font-light">Last Week</span></h6>
                        <div class="chart">
                            <div class="ct-visit chart-pos"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="white-box bg-danger color-box">
                        <h1 class="text-white font-light m-b-0">25%</h1>
                        <span class="hr-line"></span>
                        <p class="cb-text">Finished Tasks</p>
                        <h6 class="text-white font-semibold">+15% <span class="font-light">Last Week</span></h6>
                        <div class="chart">
                            <input class="knob" data-min="0" data-max="100" data-bgColor="#f86b4a"
                                   data-fgColor="#ffffff" data-displayInput=false data-width="96" data-height="96"
                                   data-thickness=".1" value="25" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box user-table">
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="box-title">Table Format/User Data</h4>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-inline">
                                    <li>
                                        <a href="javascript:void(0);" class="btn btn-default btn-outline font-16"><i
                                                    class="fa fa-trash" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="btn btn-default btn-outline font-16"><i
                                                    class="fa fa-commenting" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                                <select class="custom-select">
                                    <option selected>Sort by</option>
                                    <option value="1">Name</option>
                                    <option value="2">Location</option>
                                    <option value="3">Type</option>
                                    <option value="4">Role</option>
                                    <option value="5">Action</option>
                                </select>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox checkbox-info">
                                            <input id="c1" type="checkbox">
                                            <label for="c1"></label>
                                        </div>
                                    </th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Type</th>
                                    <th>Role</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c2" type="checkbox">
                                            <label for="c2"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Daniel Kristeen</a></td>
                                    <td>Texas, US</td>
                                    <td>Posts 564</td>
                                    <td><span class="label label-success">Admin</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c3" type="checkbox">
                                            <label for="c3"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Hanna Gover</a></td>
                                    <td>Los Angeles, US</td>
                                    <td>Posts 451</td>
                                    <td><span class="label label-info">Staff</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c4" type="checkbox">
                                            <label for="c4"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Jeffery Brown</a></td>
                                    <td>Houston, US</td>
                                    <td>Posts 978</td>
                                    <td><span class="label label-danger">User</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c5" type="checkbox">
                                            <label for="c5"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Elliot Dugteren</a></td>
                                    <td>San Antonio, US</td>
                                    <td>Posts 34</td>
                                    <td><span class="label label-warning">General</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox checkbox-info">
                                            <input id="c6" type="checkbox">
                                            <label for="c6"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-link">Sergio Milardovich</a></td>
                                    <td>Jacksonville, US</td>
                                    <td>Posts 31</td>
                                    <td><span class="label label-primary">Partial</span></td>
                                    <td>
                                        <select class="custom-select">
                                            <option value="1">Modulator</option>
                                            <option value="2">Admin</option>
                                            <option value="3">Staff</option>
                                            <option value="4">User</option>
                                            <option value="5">General</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination">
                            <li class="disabled"><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                        <a href="javascript:void(0);" class="btn btn-success pull-right m-t-10 font-20">+</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="white-box">
                        <div class="task-widget2">
                            <div class="task-image">
                                <img src="<?php echo e(asset('plugins/images/task.jpg')); ?>" alt="task" class="img-responsive">
                                <div class="task-image-overlay"></div>
                                <div class="task-detail">
                                    <h2 class="font-light text-white m-b-0">07 April</h2>
                                    <h4 class="font-normal text-white m-t-5">Your tasks for today</h4>
                                </div>
                                <div class="task-add-btn">
                                    <a href="javascript:void(0);" class="btn btn-success">+</a>
                                </div>
                            </div>
                            <div class="task-total">
                                <p class="font-16 m-b-0"><strong>5</strong> Tasks for <a href="javascript:void(0);"
                                                                                         class="text-link">Jon Doe</a>
                                </p>
                            </div>
                            <div class="task-list">
                                <ul class="list-group">
                                    <li class="list-group-item bl-info">
                                        <div class="checkbox checkbox-success">
                                            <input id="c7" type="checkbox">
                                            <label for="c7">
                                                <span class="font-16">Create invoice for customers and email each customers.</span>
                                            </label>
                                            <h6 class="p-l-30 font-bold">05:00 PM</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item bl-warning">
                                        <div class="checkbox checkbox-success">
                                            <input id="c8" type="checkbox" checked>
                                            <label for="c8">
                                                <span class="font-16">Send payment of <strong>&#36;500 invoised</strong> on 23 May to <a
                                                            href="javascript:void(0);"
                                                            class="text-link">Daniel Kristeen</a> via paypal.</span>
                                            </label>
                                            <h6 class="p-l-30 font-bold">03:00 PM</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item bl-danger">
                                        <div class="checkbox checkbox-success">
                                            <input id="c9" type="checkbox">
                                            <label for="c9">
                                                <span class="font-16">It is a long established fact that a reader will be distracted by the readable.</span>
                                            </label>
                                            <h6 class="p-l-30 font-bold">04:45 PM</h6>
                                        </div>
                                    </li>
                                    <li class="list-group-item bl-success">
                                        <div class="checkbox checkbox-success">
                                            <input id="c10" type="checkbox">
                                            <label for="c10">
                                                <span class="font-16">It is a long established fact that a reader will be distracted by the readable.</span>
                                            </label>
                                            <h6 class="p-l-30 font-bold">05:30 PM</h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="task-loadmore">
                                <a href="javascript:void(0);" class="btn btn-default btn-outline btn-rounded">Load
                                    More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="white-box chat-widget">
                        <a href="javascript:void(0);" class="pull-right"><i class="icon-settings"></i></a>
                        <h4 class="box-title">Chat</h4>
                        <ul class="chat-list slimscroll" style="overflow: hidden;" tabindex="5005">
                            <li>
                                <div class="chat-image"><img alt="male"
                                                             src="<?php echo e(asset('plugins/images/users/hanna.jpg')); ?>"></div>
                                <div class="chat-body">
                                    <div class="chat-text">
                                        <p><span class="font-semibold">Hanna Gover</span> Hey Daniel, This is just a
                                            sample chat. </p>
                                    </div>
                                    <span>2 Min ago</span>
                                </div>
                            </li>
                            <li class="odd">
                                <div class="chat-body">
                                    <div class="chat-text">
                                        <p> buddy </p>
                                    </div>
                                    <span>2 Min ago</span>
                                </div>
                            </li>
                            <li>
                                <div class="chat-image"><img alt="male"
                                                             src="<?php echo e(asset('plugins/images/users/hanna.jpg')); ?>"></div>
                                <div class="chat-body">
                                    <div class="chat-text">
                                        <p><span class="font-semibold">Hanna Gover</span> Bye now. </p>
                                    </div>
                                    <span>1 Min ago</span>
                                </div>
                            </li>
                            <li class="odd">
                                <div class="chat-body">
                                    <div class="chat-text">
                                        <p> We have been busy all the day to make your website proposal and finally came
                                            with the super excited offer. </p>
                                    </div>
                                    <span>5 Sec ago</span>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-send">
                            <input type="text" class="form-control" placeholder="Write your message">
                            <i class="fa fa-camera"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== Right-Sidebar ===== -->
        
        <!-- ===== Right-Sidebar-End ===== -->
        </div>
    <?php elseif(auth()->user()->hasRole('company')): ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row dashboad_row1">
                        <div class="col-md-4">
                            <h2 align="left">Dashboard</h2> 
                        </div>
                        <div class="col-md-8 col_right">
                            
                            <ul>
                                <li <?php if(Session::get('task_status') == '0'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>">All</a></li>
                                <li <?php if(Session::get('task_status') == 'assigned'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/assigned">Assigned</a></li>
                                <li <?php if(Session::get('task_status') == 'inprogress'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/inprogress">in-Progress</a></li>
                                <li <?php if(Session::get('task_status') == 'completed'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/completed">Completed</a></li>
                            </ul>
                            <div class="labels">
                                <h4>Labels</h4>
                                <span class="high">High</span>
                                <span class="medium">Medium</span>
                                <span class="low">Low</span>
                            </div>
                        </div>
                    </div>
                         <div class="row dashboad_row2">
                              <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                  $create_at_difference=Carbon\Carbon::createFromTimestamp(strtotime($element->end_date))->diff(\Carbon\Carbon::now())->days;


                                ?>
                                <?php if(Carbon\Carbon::createFromTimestamp(strtotime($element->end_date)) > Carbon\Carbon::createFromTimestamp(strtotime(\Carbon\Carbon::now()))): ?>
                                  <?php
                                   $time ='Day Left';
                                  ?>
                                <?php else: ?>
                                  <?php
                                   $time ='Day Exceed';
                                  ?>
                                <?php endif; ?>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="card_inner">
                                            <a href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <div class="card_detail">
                                                <div <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?>    class="image"><img src="<?php echo e(asset('website')); ?>/webdesign.png"></div>
                                                <div class="desc">
                                                    <h4><?php echo e($element->project_name); ?></h4>
                                                    <p><?php echo e($element->getCategoryDetail->name); ?></p>
                                                </div>
                                            </div>
                                            <div class="card_tags">
                                                <span><i class="icon-paper-clip"></i> <?php echo e($element->attachmentCount); ?></span>
                                                <span><i class="icon-hourglass"></i> <?php echo e($create_at_difference*24); ?></span>
                                                <span><i class="fa fa-users"></i><?php echo e($element->assignedCount); ?></span>
                                                <span><?php if($element->messageviewedCount > 0): ?><span class="dot"></span> <?php endif; ?><i class="fa fa-comment" aria-hidden="true"></i><?php echo e($element->messageCount); ?></span>
                                            </div>
                                            <hr>
                                            <div class="card_footer">
                                                <div>
                                                    <p>Progress</p>
                                                    <p <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?> class="badge badge-danger"><?php if($element->status == 'completed'): ?> <i class="fa fa-check"></i> Completed  <?php else: ?> <i class="icon-clock"></i><?php echo e($create_at_difference); ?> <?php echo e($time); ?> <?php endif; ?> </p>
                                                </div>
                                                <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success active progress-bar-striped"
                                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e($element->bar_link); ?>%"
                                                     role="progressbar"><span class="sr-only">85% Complete (success)</span></div>
                            </div>
                                            </div>
                                            <a class="whole_link" href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>"></a>
                                        </div>
                                       
                                    </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </div>
                </div>
            </div>
        </div>
    <?php elseif(auth()->user()->hasRole('Manager')): ?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row dashboad_row1">
                        <div class="col-md-4">
                            <h2 align="left">Dashboard</h2> 
                        </div>
                        <div class="col-md-8 col_right">
                            <button  class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>Create Task</button>
                            <ul>
                                <li <?php if(Session::get('task_status') == '0'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>">All</a></li>
                                <li <?php if(Session::get('task_status') == 'assigned'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/assigned">Assigned</a></li>
                                <li <?php if(Session::get('task_status') == 'inprogress'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/inprogress">in-Progress</a></li>
                                <li <?php if(Session::get('task_status') == 'completed'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/completed">Completed</a></li>
                            </ul>
                            <div class="labels">
                                <h4>Labels</h4>
                                <span class="high">High</span>
                                <span class="medium">Medium</span>
                                <span class="low">Low</span>
                            </div>
                        </div>
                    </div>
                         <div class="row dashboad_row2">
                              <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                  $create_at_difference=Carbon\Carbon::createFromTimestamp(strtotime($element->end_date))->diff(\Carbon\Carbon::now())->days;
                                ?>
                                <?php if(Carbon\Carbon::createFromTimestamp(strtotime($element->end_date)) > Carbon\Carbon::createFromTimestamp(strtotime(\Carbon\Carbon::now()))): ?>
                                  <?php
                                   $time ='Day Left';
                                  ?>
                                <?php else: ?>
                                  <?php
                                   $time ='Day Exceed';
                                  ?>
                                <?php endif; ?>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 search">
                                        <div class="card_inner">
                                            <a href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <div class="card_detail">
                                                <div <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?>    class="image"><img src="<?php echo e(asset('website')); ?>/webdesign.png"></div>
                                                <div class="desc">
                                                    <h4><?php echo e($element->project_name); ?></h4>
                                                    <p><?php echo e($element->getCategoryDetail->name); ?></p>
                                                </div>
                                            </div>
                                            <div class="card_tags">
                                                <span><i class="icon-paper-clip"></i><?php echo e($element->attachmentCount); ?></span>
                                                <span><i class="icon-hourglass"></i> <?php echo e($create_at_difference*24); ?></span>
                                                <span><i class="fa fa-users"></i><?php echo e($element->assignedCount); ?></span>
                                                <span><?php if($element->messageviewedCount > 0): ?><span class="dot"></span> <?php endif; ?><i class="fa fa-comment" aria-hidden="true"></i><?php echo e($element->messageCount); ?></span>
                                            </div>
                                            <hr>
                                            <div class="card_footer">
                                                <div>
                                                    <p>Progress</p>
                                                    <p <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?> class="badge badge-danger"><?php if($element->status == 'completed'): ?> <i class="fa fa-check"></i> Completed  <?php else: ?> <i class="icon-clock"></i><?php echo e($create_at_difference); ?>  <?php echo e($time); ?> <?php endif; ?> </p>
                                                </div>
                                                <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success active progress-bar-striped"
                                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e($element->bar_link); ?>%"
                                                     role="progressbar"><span class="sr-only">85% Complete (success)</span></div>
                            </div>
                                            </div>
                                            <a href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>" class="whole_link"></a>
                                        </div>
                                       
                                    </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </div>
                </div>
            </div>
        </div>
    <?php elseif(auth()->user()->hasRole('employee')): ?>
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="row dashboad_row1">
                        <div class="col-md-4">
                            <h2 align="left">Welcome to Dashboard</h2> 
                        </div>
                        <div class="col-md-8 col_right ">
                            
                            <ul>
                                <li <?php if(Session::get('task_status') == '0'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>">All</a></li>
                                <li <?php if(Session::get('task_status') == 'assigned'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/assigned">Assigned</a></li>
                                <li <?php if(Session::get('task_status') == 'inprogress'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/inprogress">in-Progress</a></li>
                                <li <?php if(Session::get('task_status') == 'completed'): ?> class="active" <?php endif; ?>><a href="<?php echo e(route('dashboard')); ?>/completed">Completed</a></li>
                            </ul>
                            <div class="labels">
                                <span class="high">High</span>
                                <span class="medium">Medium</span>
                                <span class="low">Low</span>
                            </div>
                        </div>
                    </div>
                         <div class="row dashboad_row2">
                              <?php $__currentLoopData = $task; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                  $create_at_difference=Carbon\Carbon::createFromTimestamp(strtotime($element->end_date))->diff(\Carbon\Carbon::now())->days;
                                ?>
                                <?php if(Carbon\Carbon::createFromTimestamp(strtotime($element->end_date)) > Carbon\Carbon::createFromTimestamp(strtotime(\Carbon\Carbon::now()))): ?>
                                  <?php
                                   $time ='Day Left';
                                  ?>
                                <?php else: ?>
                                  <?php
                                   $time ='Day Exceed';
                                  ?>
                                <?php endif; ?>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="card_inner">
                                            <a href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
                                            <div class="card_detail">
                                                <div <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?> class="image"><img src="<?php echo e(asset('website')); ?>/webdesign.png"></div>
                                                <div class="desc">
                                                    <h4><?php echo e($element->project_name); ?></h4>
                                                    <p><?php echo e($element->getCategoryDetail->name); ?></p>
                                                    <?php if(auth()->user()->hasRole('employee')): ?>
                                                      <?php if(App\TaskAssigned::where('employee_id',Auth::id())->where('task_id',$element->id)->first()->task_manager == 1): ?> Task Owner <?php else: ?> Co-worker <?php endif; ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                            <div class="card_tags">
                                                <span><i class="icon-paper-clip"></i> <?php echo e($element->attachmentCount); ?></span>
                                                <span><i class="icon-hourglass"></i> <?php echo e($create_at_difference*24); ?></span>
                                                <span><i class="fa fa-users"></i><?php echo e($element->assignedCount); ?></span>
                                                <span><?php if($element->messageviewedCount > 0): ?><span class="dot"></span> <?php endif; ?><i class="fa fa-comment" aria-hidden="true"></i><?php echo e($element->messageCount); ?> </span>
                                            </div>
                                            <hr>
                                               <hr>
                                            <div class="card_footer">
                                                <div>
                                                    <p>Progress</p>
                                                    <p <?php if($element->status == 'completed'): ?> style="background: #4caf50 !important;" <?php else: ?> <?php if($element->priority == 'High'): ?> style="background: #ed1c24 !important;" <?php elseif($element->priority == 'Medium'): ?> style="background: #fbe528 !important;" <?php elseif($element->priority == 'Low' ): ?> style="background: #a4a4a4 !important;" <?php endif; ?> <?php endif; ?> class="badge badge-danger"><?php if($element->status == 'completed'): ?> <i class="fa fa-check"></i> Completed  <?php else: ?> <i class="icon-clock"></i><?php echo e($create_at_difference); ?> <?php echo e($time); ?> <?php endif; ?> </p>
                                                </div>
                                                <div class="progress progress-sm">
                                                <div class="progress-bar progress-bar-success active progress-bar-striped"
                                                     aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e($element->bar_link); ?>%"
                                                     role="progressbar"><span class="sr-only">85% Complete (success)</span></div>
                            </div>
                                            </div>
                                            <a href="<?php echo e(route('task_detial')); ?>/<?php echo e($element->id); ?>" class="whole_link"></a>
                                        </div>
                                       
                                    </div>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div id="myModal" class="modal fade Create_task_modal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Task</h4>
      </div>
    <form method="POST" action="<?php echo e(url('/task/task')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
      <?php echo e(csrf_field()); ?>

      <div class="modal-body">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Project Name</label>
                    <input type="hidden" name="company_id" value="<?php echo e(Auth::user()->company_id); ?>">
                    <input type="hidden" name="manager_id" value="<?php echo e(Auth::id()); ?>">
                    <input class="form-control" name="project_name" placeholder="Project name here" type="text" id="project_name" value="" required>
              </div>
                <div class="row">
                  <div class="col col-lg-6">
                    <label for="Category" class="form-label">Task Category</label>
                     <select class="form-control" name="category" id="category" required>
                        <option selected disabled>Select Category</option>
                       <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                         <option  value="<?php echo e($element->id); ?>"><?php echo e($element->name); ?></option>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                     </select>
                  </div>
                  <div class="col col-lg-6">
                    <label for="image" class="form-label">Task Images & Document</label>
                     <div class="custom_file_upload" ><input class="form-control" name="image" type="file" id="pic" value="" required></div>
                  </div>
                  <div class="col col-lg-6">
                    <label for="Start" class="form-label">Task Start Date</label>
                    <input class="form-control" name="start_date" type="date" id="start_date" required>
                  </div>
                  <div class="col col-lg-6">
                    <label for="End" class="form-label">Task End Date</label>
                    <input class="form-control" name="end_date" type="date" id="end_date"  required>
                  </div> 
                  <div class="col col-lg-6">
                    <label for="Assign" class="form-label">Task Assign Person</label>
                    <select class="form-control"   name="assign[]" id="Assign" required>
                      <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($element->hasRole('employee')): ?>
                         <option value="<?php echo e($element->id); ?>"><?php echo e($element->name); ?></option>
                        <?php endif; ?> 
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                    </select>
                  </div>
                  <div class="col col-lg-6">
                    <label for="Priority" class="form-label">Task Priority</label>
                    <select class="form-control" name="priority" id="priority" required>
                        <option  value="High">High</option>
                        <option  value="Medium">Medium</option>
                        <option  value="Low">Low</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                   <div class="col col-lg-12">
                    <label for="Priority" class="form-label">Task Priority</label>
                    <textarea class="form-control" name="description" placeholder="Add any extra details about the request" id="description" value="" required></textarea>
                    
                  </div> 
                </div>
      </div>
      <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-primary">Create</button>
      </div>
    </form>
    </div>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('js/db1.js')); ?>"></script>

<?php $__env->stopPush(); ?>

<?php $__env->startPush('js'); ?>
<script type="text/javascript">
    $(document).ready(function() {
    $('#Assign').select2();
});
  $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".search").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });


</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/dashboard/index.blade.php ENDPATH**/ ?>