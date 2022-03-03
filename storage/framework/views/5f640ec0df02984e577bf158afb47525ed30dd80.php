<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo e(asset('website')); ?>/css/responsive.css">
    

    <title>toskr</title>
    <style type="text/css">
        .swal-button {background-color: #d85b2b;}
    </style>
</head>






<section class="main_nav">

    <div class="container custom-container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <a class="navbar-brand" href="index.php">
                        <img src="<?php echo e(asset('website')); ?>/assets/images/Logo.png" width="138" height="105" alt="">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="login_btn">
                               <?php if(Auth::id()): ?> 
                               <a  class="btn" href="<?php echo e(route('logout')); ?>">Logout</a>
                               <?php else: ?>
                                <a type="button" class="btn" data-toggle="modal" data-target="#sign_in_modal" data-whatever="@mdo">Log in</a>
                               <?php endif; ?>



                                <div class="modal fade" id="sign_in_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body toskr_modal tabs">

                                                <div class="toskr_modal">
                                                    <h5 class="modal-title modal_heading" id="sign_in_modal">Sign In</h5>
                                                    <div class="modal_para">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                    </div>
                                                    <form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo e(route('login_process')); ?>">
                                                        <?php echo e(csrf_field()); ?>

                                                        <div class="form-group">
                                                            <label for="exampleInputEmail1">Email Address</label>
                                                            <input type="email" name="email" class="form-control modal_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username@domain.com">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword1">Password</label>
                                                            <input type="password" name="password" class="form-control modal_input" id="exampleInputPassword1" placeholder="xxxxxxxxxxxxxxx">
                                                        </div>
                                                        <div class="form-check modal_custom_checkbox">
                                                            <input type="checkbox" class="form-check-input modal_check" id="exampleCheck1">
                                                            <label class="form-check-label lbl_modal" for="exampleCheck1">Remember Me</label>
                                                        </div>
                                                        <button type="submit" class="btn  modal_btn">Sign In</button>
                                                    </form>
                                                    <!-- <div class="modal_footer">
                                                        <p>Don't have an account? <a href="#">Signup</a> </p>
                                                    </div> -->
                                                </div>
                                            </div>


                                            <!-- ----------- -->
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="sec_Get_started_btn">
                              <?php if(Auth::id()): ?>
                              <a href="<?php echo e(route('dashboard')); ?>" type="button" class="btn btn-primary">Dashboard</a>
                              <?php else: ?>
                                <a href="#!" type="button" class="btn btn-primary" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a>
                              <?php endif; ?>

                                <!--modal body start  -->


                                <div class="modal in" id="get_started" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-body toskr_modal tabs">
                                                <div id="exTab1">
                                                    <ul class="nav nav-pills">
                                                        <?php if(Session::get('Employee_reg')): ?>
                                                          <li class="active">
                                                              <a href="#1a" data-toggle="tab" class="active">Employee</a>
                                                          </li>
                                                        <?php else: ?>
                                                          <li class="active"><a href="#2a" data-toggle="tab" class="active">Client</a>
                                                          </li>
                                                        <?php endif; ?>
                                                    </ul>
                                                    <div class="tab-content clearfix">
                                                    <?php if(Session::get('Employee_reg')): ?>
                                                        <div class="tab-pane active" id="1a">
                                                            <h3>
                                                                <div class="toskr_modal">
                                                                    <h5 class="modal-title modal_heading" id="exampleModalLabel">Signup As Employee</h5>
                                                                    <div class="modal_para">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                                    </div>
                                                                    <form method="POST" action="<?php echo e(route('register_employee_procces')); ?>" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                                                                      <?php echo e(csrf_field()); ?>

                                                                        <div class="form-group">
                                                                           <input type="hidden" name="company_id" value="<?php echo e($invitation->company_id); ?>">
                                                                            <input type="hidden" name="department_id" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->department_id); ?>" <?php endif; ?>>
                                                                            <input type="hidden" name="role_id" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->role_id); ?>" <?php endif; ?>>
                                                                            <input type="hidden" name="unique_code" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->unique_code); ?>" <?php endif; ?>>
                                                                            <label for="exampleInputEmail1">Name</label>
                                                                            <input type="text" class="form-control modal_input" id="exampleInputEmail1"  name="name" aria-describedby="emailHelp" placeholder="username">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Email Address</label>
                                                                            <input type="email" class="form-control modal_input" id="exampleInputEmail1" name="email" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->email??''); ?>" <?php endif; ?> aria-describedby="emailHelp" placeholder="username@domain.com" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Phone No</label>
                                                                            <input type="text" name="phone" class="form-control modal_input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1234567890">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Department</label>
                                                                            <input type="text" class="form-control modal_input" id="exampleInputEmail1" aria-describedby="emailHelp" name="department" placeholder="Department" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->getDepartmentDetail->name); ?>" <?php endif; ?> readonly required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Company Name</label>
                                                                            <input type="text" name="company_name" class="form-control modal_input" id="exampleInputEmail1" <?php if(isset($invitation)): ?> value="<?php echo e($invitation->getCompanyDetail->name); ?>" <?php endif; ?> readonly  aria-describedby="emailHelp" placeholder="Company Name" required>
                                                                        </div>
                                                                       
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Password</label>
                                                                            <input type="password" name="password" class="form-control modal_input" id="exampleInputPassword1" placeholder="xxxxxxxxxxxxxxx">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Retype Password</label>
                                                                            <input type="password" name="password_confirmation" class="form-control modal_input" id="exampleInputPassword1" placeholder="xxxxxxxxxxxxxxxxxx">
                                                                        </div> 
                                                                         <div class="form-group">
                                                                            <label for="file">Image</label>
                                                                            <input type="file" name="image" class="form-control modal_input" id="file" placeholder="xxxxxxxxxxxxxxxxxx">
                                                                        </div>
                                                                        <div class="form-check modal_custom_checkbox">
                                                                            <input type="checkbox" class="form-check-input modal_check" id="exampleCheck1">
                                                                            <label class="form-check-label lbl_modal modal_termsconditions" for="exampleCheck1">I agree <a href="#">terms &amp; conditons</a></label>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary modal_btn">Sign In</button>
                                                                    </form>
                                                                    <!-- <div class="modal_footer">
                                                                        <p>Don't have an account? <a href="#">Signup</a> </p>
                                                                    </div> -->
                                                                </div>
                                                            </h3>
                                                        </div>
                                                      <?php else: ?>  
                                                        <div class="tab-pane active" id="2a">
                                                            <h3>
                                                                <div class="toskr_modal">
                                                                    <h5 class="modal-title modal_heading" id="exampleModalLabel">Signup As Client</h5>
                                                                    <div class="modal_para">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                                                                    </div>
                                                                    <form method="POST" action="<?php echo e(route('register_company_procces')); ?>" accept-charset="UTF-8"
                                                                        class="form-horizontal" enctype="multipart/form-data">
                                                              <?php echo e(csrf_field()); ?>

                                                              <input type="hidden" name="status" value="2">
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Name</label>
                                                                            <input type="text" class="form-control modal_input" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name" placeholder="First Name">
                                                                        </div>
                                                                      
                                                                        <div class="form-group">
                                                                            <label for="exampleInputEmail1">Email Address</label>
                                                                            <input type="email" class="form-control modal_input" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="username@domain.com">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Password</label>
                                                                            <input type="password" class="form-control modal_input" id="exampleInputPassword1" name="password" placeholder="xxxxxxxxxxxxxxx">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="exampleInputPassword1">Retype Password</label>
                                                                            <input type="password" class="form-control modal_input" id="exampleInputPassword1" name="password_confirmation"  placeholder="xxxxxxxxxxxxxxxxxx">
                                                                        </div>
                                                                         <div class="form-group">
                                                                            <label for="exampleInputPassword1">Image</label>
                                                                            <input id="image" type="file" class="form-control<?php echo e($errors->has('image') ? ' is-invalid' : ''); ?>" placeholder="image" name="image" value="<?php echo e(old('image')); ?>" required autofocus>
                                                                        </div>
                                                                        <div class="form-check modal_custom_checkbox">
                                                                            <input type="checkbox" class="form-check-input modal_check" id="exampleCheck1">
                                                                            <label class="form-check-label lbl_modal modal_termsconditions" for="exampleCheck1">I agree <a href="#">terms &amp; conditons</a></label>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary modal_btn">Sign In</button>
                                                                    </form>
                                                                    <!-- <div class="modal_footer">
                                                                        <p>Don't have an account? <a href="#">Signup</a> </p>
                                                                    </div> -->
                                                                </div>
                                                            </h3>
                                                        </div>
                                                    <?php endif; ?>    
                                                    </div>
                                                </div>

                                            </div>


                                            <!-- ----------- -->
                                        </div>
                                    </div>
                                </div>
                                <!--modal body end  -->
                            </li>


                        </ul>
                    </div>



                </nav>
            </div>
        </div>
    </div>
    </div>



</section>
 <?php echo $__env->yieldContent('content'); ?>
<section class="Footer">
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-4 Logo_img">
                <div class="inner-sec">
                    <div><img src="<?php echo e(asset('website')); ?>/assets/images/footer_logo.png" alt=""></div>
                    
                    <div class="social_icons">
                      <?php $__currentLoopData = $SocialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                       
                        <div class="<?php echo e($element->nam); ?>">
                            <a href="<?php echo e($element->link); ?>"><img src="<?php echo e(asset('website')); ?>/<?php echo e($element->image); ?>" target="_blank" alt=""></a>
                        </div>
                        
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-2 footer_menu">
                <div class="inner-sec">
                    <h3>Support</h3>
                    <ul>
                        <li>
                            <a class="" href="<?php echo e(route('faq')); ?>">FAQ</a>
                        </li>
                        <li>
                            <a class="" href="<?php echo e(route('how_it_works')); ?>">How its work</a>
                        </li>
                        <li>
                            <a class="" href="<?php echo e(route('features')); ?>">Featured </a>
                        </li>
                        <li>
                            <a class="" href="<?php echo e(route('contact_us')); ?>">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-2 footer_social_menu">
                <div class="inner-sec">
                    <h3>Links</h3>
                    <ul>
                        <?php $__currentLoopData = $SocialMedia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a class="" href="<?php echo e($element->link); ?>"><?php echo e($element->nam); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>

            <div class="col-md-4 Find_us">
                <div class="inner-sec">
                    <h3>Contact</h3>
                    <ul class="footer_contact">

                        <li><a href="tel:<?php echo e($information->phone??''); ?>"><?php echo e($information->phone??''); ?></a></li>
                        <li><a href="mailto:<?php echo e($information->email??''); ?>"><?php echo e($information->email??''); ?> </a></li>
                        <li><a href="" class="tb_n">a</a></li>
                        <li><a href="" class="tb_n">b</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-md-12 copy_right text-center">
                <p>©2021 by DreamStaff. All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->


</body>

</html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<?php echo $__env->yieldPushContent('js'); ?>
 <script type="text/javascript">
  
  <?php if(Session::get('Employee_reg')): ?>
$('#get_started').modal('show');
  <?php endif; ?>

</script>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if(session()->get('flash_message')): ?>
        <script>
            swal({
                icon: 'success',
                title: '<?php echo e(session()->get('flash_message')); ?>',
                showConfirmButton: false,
                timer: 4500
            })
        </script>
    <?php elseif(session()->get('error_log')): ?>
        <script>
            swal({
                icon: 'error',
                title: '<?php echo e(session()->get('error_log')); ?>',
                showConfirmButton: false,
                timer: 4500
            })
        </script>
    <?php endif; ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/website/layout/master.blade.php ENDPATH**/ ?>