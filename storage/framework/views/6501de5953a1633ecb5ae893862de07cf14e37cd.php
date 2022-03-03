<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header">
        <a class="navbar-toggle font-20 hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse"
           data-target=".navbar-collapse">
            <i class="fa fa-bars"></i>
        </a>
        <div class="top-left-part">
            <a class="logo" href="<?php echo e('/dashboard'); ?>">
               
                    <img src="<?php echo e(asset('')); ?><?php echo e(App\CommonSetting::first()->dashboard_logo_text??''); ?>" alt="homepage" class="dark-logo" style="height: 131px;width: 193px" />
            </a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <?php if(session()->get('theme-layout') != 'fix-header'): ?>
                <li class="sidebar-toggle">
                    <a href="javascript:void(0)" class="sidebartoggler font-20 waves-effect waves-light"><i class="icon-arrow-left-circle"></i></a>
                </li>
            <?php endif; ?>


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
                        <?php echo e($count); ?>

                    </span>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                   
                    <li>
                        <div class="message-center">
                       
                            
                        </div>
                    </li>
                    
                </ul>
            </li>
            
            <li class="right-side-toggle">
                
                <div class="profile_toggler">
                    <div class="profile_img">
                       <img src="<?php echo e(asset('storage')); ?>/uploads/users/<?php echo e(Auth::user()->profile->pic??''); ?>" class="avatar">
                       <div class="logout_dropdown">
                            <ul>
                                <li><a class="btn btn-success" href="<?php echo e(route('myprofle')); ?>">Profile</a></li>
                                <li class="two-column">
                                    <a class="waves-effect btn" href="javascript:void(0);" aria-expanded="false"><span class="hide-menu">&#160;&#160; Setting</span><i
                                                class="fa fa-angle-down"></i> </a>
                                    <ul aria-exzpanded="false" class="collapse">
                                        <li><a href="<?php echo e(route('Contact')); ?>">Contact</a></li>
                                        <li><a href="<?php echo e(route('Personal')); ?>">Personal</a></li>
                                        <li><a href="<?php echo e(route('Security')); ?>">Security</a></li>
                                        <li><a href="<?php echo e(route('Notification')); ?>">Notification</a></li>

                                    </ul>
                                </li>
                                <li><a class="btn btn-success" href="<?php echo e(route('logout')); ?>">Logout</a></li>
                            </ul>
                           
                           
                           
                       </div>
                    </div>
                    <div class="profile_desc">
                        <h4><?php if(Auth::user()->name == 'User'): ?> Admin <?php else: ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></h4>
                        <p><?php if(Auth::user()->hasRole('Manager')): ?> Manager <?php elseif(Auth::user()->hasRole('employee')): ?> Employee <?php elseif(Auth::user()->hasRole('company')): ?> Company <?php elseif(Auth::user()->hasRole('user')): ?> Admin <?php elseif(Auth::user()->hasRole('admin')): ?> Developer <?php endif; ?></p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php $__env->startPush('js'); ?>
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
<?php $__env->stopPush(); ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/layouts/partials/navbar.blade.php ENDPATH**/ ?>