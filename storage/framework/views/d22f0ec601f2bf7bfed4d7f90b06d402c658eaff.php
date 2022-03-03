<aside class="sidebar">
    <div class="scroll-sidebar">

        <?php if(session()->get('theme-layout') != 'fix-header'): ?>
            <div class="user-profile">
                <div class="dropdown user-pro-body ">
                    <div class="profile-image">
                        <?php if(auth()->user()->profile->pic == null): ?>
                        <img src="<?php echo e(asset('storage/uploads/users/no_avatar.jpg')); ?>" alt="user-img" class="img-circle">
                        <?php else: ?>
                            <img src="<?php echo e(asset('storage/uploads/users/'.auth()->user()->profile->pic)); ?>" alt="user-img" class="img-circle">
                        <?php endif; ?>


                        <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue"
                           data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">
                            <i class="fa fa-angle-down"></i>
                        </span>
                        </a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="<?php echo e(url('profile')); ?>"><i class="fa fa-user"></i> Profile</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo e('account-settings'); ?>"><i class="fa fa-cog"></i> Account Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                    <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> <?php echo e(auth()->user()->name); ?></a></p>
                </div>
            </div>
        <?php endif; ?>
        <nav class="sidebar-nav">
            <ul id="side-menu">


                    <li>
                        <a class="active waves-effect" href="<?php echo e(url('dashboard')); ?>" aria-expanded="false"> 
                             <i class="fas fa-home fa-lg"></i>  &#160;&#160;
                            <span
                                    class="hide-menu"> Dashboard </span></a>
                        <?php if(auth()->user()->isAdmin() == true): ?>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('dashboard')); ?>">Modern Version</a></li>
                            <li><a href="<?php echo e(asset('index2')); ?>">Clean Version</a></li>
                            <li><a href="<?php echo e(asset('index3')); ?>">Analytical Version</a></li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span
                                            class="hide-menu"> eCommerce </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo e(asset('index4')); ?>">Dashboard</a></li>
                                    <li><a href="<?php echo e(asset('products')); ?>">Products</a></li>
                                    <li><a href="<?php echo e(asset('product-detail')); ?>">Product Detail</a></li>
                                    <li><a href="<?php echo e(asset('product-edit')); ?>">Product Edit</a></li>
                                    <li><a href="<?php echo e(asset('product-orders')); ?>">Product Orders</a></li>
                                    <li><a href="<?php echo e(asset('product-cart')); ?>">Product Cart</a></li>
                                    <li><a href="<?php echo e(asset('product-checkout')); ?>">Product Checkout</a></li>
                                </ul>
                            </li>
                        </ul>
                        <?php endif; ?>
                    </li>
                <?php if(auth()->user()->isAdmin() == true): ?>

                    <li><a class="waves-effect" href="<?php echo e(asset('role-management')); ?>">
                            <i class=" icon-layers fa-fw"></i><span class="hide-menu"> Roles </span></a>
                    </li>
                    <li class="two-column">
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-user fa-fw"></i> <span class="hide-menu"> Users</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('users')); ?>">Manage Users</a></li>
                            <li><a href="<?php echo e(asset('user/create')); ?>">Add New User</a></li>
                            <li><a href="<?php echo e(asset('user/deleted')); ?>">Deleted Users</a></li>

                        </ul>
                    </li>
                    <li><hr /></li>
                    
                                    
                    <li><a class="waves-effect" href="<?php echo e(asset('crud-generator')); ?>">
                            <i class="icon-drawar fa-fw"></i><span class="hide-menu"> CRUD Generator</span></a>
                    </li>
                    <li class="two-column">
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-eye fa-fw"></i> <span class="hide-menu"> Logs</span></a>
                        <ul aria-exzpanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('log-viewer')); ?>">Laravel Log</a></li>
                            <li><a href="<?php echo e(asset('activity-log')); ?>">Activity Log</a></li>

                        </ul>
                    </li>

                    <?php endif; ?>
                    <?php $__currentLoopData = $laravelAdminMenus->menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(count(collect($section->items)) > 0): ?>
                                <?php if(Auth::user()->hasRole('Manager')): ?>
                                    <li  <?php if(Session::get('side_show')): ?> style="display: none"   class="<?php echo e(Session::get('side_show')); ?>" <?php else: ?> style="display: flex;" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url('/userInsight/user-insight')); ?>">
                                           <i class="fa fa-pie-chart fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'User Insight')); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php $__currentLoopData = $section->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-'.str_slug($menu->title))): ?>
                                
                                <?php if($menu->title == 'Company'): ?>
                                
                                <li>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                            <i class="fa fa-landmark fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>
                                <?php elseif($menu->title == 'Department'): ?>
                                      <li>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                          <i class="fas fa-building fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; Add<?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>
                                    <li class="two-column <?php if(Request::is('employee/employee')): ?> active <?php endif; ?>" >
                                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i class="fa fa-users fa-lg"></i> <span class="hide-menu">  &#160;&#160;Department`s</span></a>
                                        <ul aria-expanded="false" class="collapse">
                                            <?php $department = App\Department::where('company_id',Auth::id())->get(); ?>
                                           <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a style="cursor: pointer;" data-dep="<?php echo e($element->name); ?>" data-id="<?php echo e($element->id); ?>" <?php if(Request::is('employee/employee') && Session::get('request_type')==$element->name): ?> class='get_dep active' <?php else: ?> class="get_dep" <?php endif; ?> ><?php echo e($element->name); ?></a></li>
                                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                        </ul>
                                    </li>
                                    
                                <?php elseif($menu->title == 'CoworkerRequest'): ?>
                                <?php elseif($menu->title == 'Task'): ?>
                               
                                <?php elseif($menu->title == 'TaskInsight'): ?>
                                      <li <?php if(Session::get('side_show')): ?> style="display: none"   class="<?php echo e(Session::get('side_show')); ?>" <?php else: ?> style="display: flex;" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                          <i class="fa fa-bar-chart fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>   
                                <?php elseif($menu->title == 'Progre'): ?>
                                      <li <?php if(Session::get('side_show')): ?>  style="display: flex;"  <?php else: ?> style="display: none" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                          <i class="fas fa-tachometer-alt fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?>ss</span>
                                        </a>
                                    </li> 
                                <?php elseif($menu->title == 'Contact'): ?>
                                      <li <?php if(Session::get('side_show')): ?> style="display: none"   <?php else: ?> style="display: flex;" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                          <i class="fa fa-envelope fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?> Us</span>
                                        </a>
                                    </li>  
                                <?php elseif($menu->title == 'UserInsight'): ?>
                                <?php elseif($menu->title == 'HomePage'): ?>
                                <?php elseif($menu->title == 'Faq'): ?>
                                <?php elseif($menu->title == 'Feature'): ?>
                                <?php elseif($menu->title == 'HowItWorks'): ?>
                                <?php elseif($menu->title == 'SocialMedia'): ?>
                                <?php elseif($menu->title == 'Information'): ?>
                                      
                                <?php elseif($menu->title == 'TaskDetail'): ?>
                                      <li <?php if(Session::get('side_show')): ?> style="display: flex;"  <?php else: ?> style="display: none" <?php endif; ?>>
                                        <a  class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                           <i class="fas fa-clipboard-list fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>
                                <?php elseif($menu->title == 'Attachment'): ?>
                                      <li <?php if(Session::get('side_show')): ?> style="display: flex;"  <?php else: ?> style="display: none" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                          <i class="fas fa-paperclip fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li> 
                                <?php elseif($menu->title == 'Message'): ?>
                                      <li <?php if(Session::get('side_show')): ?> style="display: flex;"  <?php else: ?> style="display: none" <?php endif; ?>>
                                        <a class="waves-effect" href="<?php echo e(url('chat')); ?>">
                                          <i class="fas fa-comment-alt fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?>

                                                    <span  class="badge badge-xs badge-danger" id="mess_count">
                                                           <?php   $Message = App\MessageViewed::where('receiver',Auth::id())->where('send_to', '!=', Auth::user()->id)->where('task_id',Session::get('task_id'))->where('viewed',0)->count(); ?>
                                                                        <?php echo e($Message); ?>

                                                  </span>
                                            </span>
                                        </a>
                                    </li> 
                                <?php elseif($menu->title == 'TaskCategory'): ?>
                                      <li >
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                         <i class="fas fa-align-center fa-lg"></i>
                                            <span class="hide-menu">  &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>
                               <?php elseif($menu->title == 'Employee'): ?>
                                      
                                <?php else: ?>    
                                    <li>
                                        <a class="waves-effect" href="<?php echo e(url($menu->url)); ?>">
                                            <i class="glyphicon <?php echo e($menu->icon); ?> fa-fw"></i>
                                            <span class="hide-menu"> &#160;&#160; <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', $menu->title)); ?></span>
                                        </a>
                                    </li>
                                <?php endif; ?>

                                  
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <li>
                   <?php if(Auth::user()->hasRole('user')): ?>
                    <li class="two-column">
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="fa fa-cog fa-lg"></i> <span class="hide-menu">&#160;&#160; CMS</span></a>
                        <ul aria-exzpanded="false" class="collapse">
                            <li><a href="<?php echo e(url('/homePage/home-page')); ?>">Home page</a></li>
                            <li><a href="<?php echo e(url('/feature/feature')); ?>">Features</a></li>
                            <li><a href="<?php echo e(url('/howItWorks/how-it-works')); ?>">How it work</a></li>
                            <li><a href="<?php echo e(url('/faq/faq')); ?>">Faq</a></li>
                            <li><a href="<?php echo e(url('/socialMedia/social-media')); ?>">Social Media</a></li>
                            <li><a href="<?php echo e(url('/information/information')); ?>">Information</a></li>

                        </ul>
                    </li>
                   <?php endif; ?>
                   <?php if(Auth::user()->hasRole('user') || Auth::user()->hasRole('admin')): ?> 
                    <a class="waves-effect" href="<?php echo e(url('account-settings')); ?>">
                        <i class="fa fa-gear fa-fw"></i>
                        <span class="hide-menu"> Account Settigs</span>
                    </a>
                   <?php elseif(Auth::user()->hasRole('Manager') || Auth::user()->hasRole('employee')): ?>
                     
                     
                   <?php endif; ?> 
                </li>
                <?php if(auth()->user()->isAdmin() == true): ?>
                    <li><hr /></li>

                    <li class="two-column">
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-equalizer fa-fw"></i> <span class="hide-menu"> UI Elements</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('panels-wells')); ?>">Panels and Wells</a></li>
                            <li><a href="<?php echo e(asset('panel-ui-block')); ?>">Panels With BlockUI</a></li>
                            <li><a href="<?php echo e(asset('portlet-draggable')); ?>">Draggable Portlet</a></li>
                            <li><a href="<?php echo e(asset('buttons')); ?>">Buttons</a></li>
                            <li><a href="<?php echo e(asset('tabs')); ?>">Tabs</a></li>
                            <li><a href="<?php echo e(asset('modals')); ?>">Modals</a></li>
                            <li><a href="<?php echo e(asset('progressbars')); ?>">Progress Bars</a></li>
                            <li><a href="<?php echo e(asset('notification')); ?>">Notifications</a></li>
                            <li><a href="<?php echo e(asset('carousel')); ?>">Carousel</a></li>
                            <li><a href="<?php echo e(asset('user-cards')); ?>">User Cards</a></li>
                            <li><a href="<?php echo e(asset('timeline')); ?>">Timeline</a></li>
                            <li><a href="<?php echo e(asset('timeline-horizontal')); ?>">Horizontal Timeline</a></li>
                            <li><a href="<?php echo e(asset('range-slider')); ?>">Range Slider</a></li>
                            <li><a href="<?php echo e(asset('ribbons')); ?>">Ribbons</a></li>
                            <li><a href="<?php echo e(asset('steps')); ?>">Steps</a></li>
                            <li><a href="<?php echo e(asset('session-idle-timeout')); ?>">Session Idle Timeout</a></li>
                            <li><a href="<?php echo e(asset('session-timeout')); ?>">Session Timeout</a></li>
                            <li><a href="<?php echo e(asset('bootstrap-ui')); ?>">Bootstrap UI</a></li>
                        </ul>
                    </li>
                    <li class="two-column">
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-docs fa-fw"></i> <span class="hide-menu"> Pages</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('starter-page')); ?>">Starter Page</a></li>
                            <li><a href="<?php echo e(asset('blank')); ?>">Blank Page</a></li>
                            <li><a href="<?php echo e(asset('search-result')); ?>">Search Result</a></li>
                            <li><a href="<?php echo e(asset('custom-scroll')); ?>">Custom Scrolls</a></li>
                            <li><a href="<?php echo e(asset('login')); ?>">Login Page</a></li>
                            <li><a href="<?php echo e(asset('lock-screen')); ?>">Lock Screen</a></li>
                            <li><a href="<?php echo e(asset('recoverpw')); ?>">Recover Password</a></li>
                            <li><a href="<?php echo e(asset('animation')); ?>">Animations</a></li>
                            <li><a href="<?php echo e(asset('profile')); ?>">Profile</a></li>
                            <li><a href="<?php echo e(asset('invoice')); ?>">Invoice</a></li>
                            <li><a href="<?php echo e(asset('gallery')); ?>">Gallery</a></li>
                            <li><a href="<?php echo e(asset('pricing')); ?>">Pricing</a></li>
                            <li><a href="<?php echo e(asset('register')); ?>">Register</a></li>
                            <li><a href="<?php echo e(asset('400')); ?>">Error-400</a></li>
                            <li><a href="<?php echo e(asset('403')); ?>">Error-403</a></li>
                            <li><a href="<?php echo e(asset('404')); ?>">Error-404</a></li>
                            <li><a href="<?php echo e(asset('500')); ?>">Error-500</a></li>
                            <li><a href="<?php echo e(asset('503')); ?>">Error-503</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-notebook fa-fw"></i> <span class="hide-menu"> Forms </span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('form-basic')); ?>">Basic Forms</a></li>
                            <li><a href="<?php echo e(asset('form-layout')); ?>">Form Layout</a></li>
                            <li><a href="<?php echo e(asset('icheck-control')); ?>">Icheck Control</a></li>
                            <li><a href="<?php echo e(asset('form-advanced')); ?>">Form Addons</a></li>
                            <li><a href="<?php echo e(asset('form-upload')); ?>">File Upload</a></li>
                            <li><a href="<?php echo e(asset('form-dropzone')); ?>">File Dropzone</a></li>
                            <li><a href="<?php echo e(asset('form-pickers')); ?>">Form-pickers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-grid fa-fw"></i> <span class="hide-menu"> Tables</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo e(asset('basic-table')); ?>">Basic Tables</a></li>
                            <li><a href="<?php echo e(asset('table-layouts')); ?>">Table Layouts</a></li>
                            <li><a href="<?php echo e(asset('data-table')); ?>">Data Table</a></li>
                            <li><a href="<?php echo e(asset('bootstrap-tables')); ?>">Bootstrap Tables</a></li>
                            <li><a href="<?php echo e(asset('responsive-tables')); ?>">Responsive Tables</a></li>
                            <li><a href="<?php echo e(asset('editable-tables')); ?>">Editable Tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                                    class="icon-layers fa-fw"></i> <span class="hide-menu"> Extra</span></a>
                        <ul aria-expanded="false" class="collapse extra">
                            <li>
                                <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span
                                            class="hide-menu"> Inbox </span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo e(asset('inbox')); ?>">Mail Box</a></li>
                                    <li><a href="<?php echo e(asset('inbox-detail')); ?>">Mail Details</a></li>
                                    <li><a href="<?php echo e(asset('compose')); ?>">Compose Mail</a></li>
                                    <li><a href="<?php echo e(asset('contact')); ?>">Contact</a></li>
                                    <li><a href="<?php echo e(asset('contact-detail')); ?>">Contact Detail</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo e(asset('calendar')); ?>" aria-expanded="false"><span
                                            class="hide-menu">Calendar</span></a>
                            </li>
                            <li>
                                <a href="<?php echo e(asset('widgets')); ?>" aria-expanded="false"><span
                                            class="hide-menu"> Widgets </span></a>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span
                                            class="hide-menu"> Charts</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo e(asset('morris-chart')); ?>">Morris Chart</a></li>
                                    <li><a href="<?php echo e(asset('peity-chart')); ?>">Peity Charts</a></li>
                                    <li><a href="<?php echo e(asset('knob-chart')); ?>">Knob Charts</a></li>
                                    <li><a href="<?php echo e(asset('sparkline-chart')); ?>">Sparkline charts</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span
                                            class="hide-menu"> Icons</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo e(asset('simple-line')); ?>">Simple Line</a></li>
                                    <li><a href="<?php echo e(asset('fontawesome')); ?>">Fontawesome</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="waves-effect" href="javascript:void(0);" aria-expanded="false"><span
                                            class="hide-menu"> Maps</span></a>
                                <ul aria-expanded="false" class="collapse">
                                    <li><a href="<?php echo e(asset('map-google')); ?>">Google Map</a></li>
                                    <li><a href="<?php echo e(asset('map-vector')); ?>">Vector Map</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                <?php endif; ?>


            </ul>
        </nav>
    </div>
</aside>
<?php $__env->startPush('js'); ?>
<script type="text/javascript">
     $('.get_dep').click(function(e){
          name =  $(this).attr('data-dep');
          id =  $(this).attr('data-id');
            $.ajax({
              url: "<?php echo e(route('request_type')); ?>/"+name+'/'+id,
              type: "GET",
              cache: false,
              success: function(result){
                window.location.href = "<?php echo e(url('employee/employee')); ?>"
              }
            });
        });
</script>
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/layouts/partials/sidebar.blade.php ENDPATH**/ ?>