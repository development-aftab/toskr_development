<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('')); ?><?php echo e(App\CommonSetting::first()->favicon??''); ?>">
    <title><?php echo e(App\CommonSetting::first()->title??''); ?></title>
    <!-- ===== Bootstrap CSS ===== -->
    <link href="<?php echo e(asset('bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- ===== Plugin CSS ===== -->
    <link href="<?php echo e(asset('plugins/components/chartist-js/dist/chartist.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')); ?>"
          rel="stylesheet">
    <link href="<?php echo e(asset('plugins/components/toast-master/css/jquery.toast.css')); ?>" rel="stylesheet">

    <!-- ===== Animation CSS ===== -->
    <link href="<?php echo e(asset('css/animate.css')); ?>" rel="stylesheet">
    <!-- ===== Custom CSS ===== -->
    <link href="<?php echo e(asset('css/common.css')); ?>" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <?php echo $__env->yieldPushContent('css'); ?>


    <!--====== Dynamic theme changing =====-->

    <?php if(session()->get('theme-layout') == 'fix-header'): ?>
        <link href="<?php echo e(asset('css/style-fix-header.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/colors/default.css')); ?>" id="theme" rel="stylesheet">

    <?php elseif(session()->get('theme-layout') == 'mini-sidebar'): ?>
        <link href="<?php echo e(asset('css/style-mini-sidebar.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/colors/default.css')); ?>" id="theme" rel="stylesheet">
    <?php else: ?>
        <link href="<?php echo e(asset('css/style-normal.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('css/colors/default.css')); ?>" id="theme" rel="stylesheet">
    <?php endif; ?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.9.0/css/bootstrap-iconpicker.min.css"/>


    <!-- ===== Color CSS ===== -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        nav .message-center .mail-contnet {display: flex;justify-content: center;align-items: center;}
        nav .message-center .mail-contnet .buttons{display: flex;}
        nav .message-center .mail-contnet .buttons a{padding: 5px 5px;}
        nav .dropdown .mailbox{width: 310px;}
        nav .message-center .mail-contnet .buttons a.btn_reject{margin-left: 5px;}
        nav .dropdown .message-center .mail-contnet h5, nav .dropdown .message-center .mail-contnet .mail-desc {white-space: normal;}
        nav .dropdown .message-center .mail-contnet > a{width: 150px;}
    </style>
    <style>
        @media (min-width: 768px) {
            .extra.collapse li a span.hide-menu {
                display: block !important;
            }

            .extra.collapse.in li a.waves-effect span.hide-menu {
                display: block !important;
            }

            .extra.collapse li.active a.active span.hide-menu {
                display: block !important;
            }

            ul.side-menu li:hover + .extra.collapse.in li.active a.active span.hide-menu {
                display: block !important;
            }
        }
    </style>
</head>

<body class="<?php if(session()->get('theme-layout')): ?> <?php echo e(session()->get('theme-layout')); ?> <?php endif; ?>">
<!-- ===== Main-Wrapper ===== -->
<div id="wrapper">
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <!-- ===== Top-Navigation ===== -->
<?php echo $__env->make('layouts.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ===== Top-Navigation-End ===== -->

    <!-- ===== Left-Sidebar ===== -->
<?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('layouts.partials.right-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ===== Left-Sidebar-End ===== -->
    <!-- ===== Page-Content ===== -->
    <div class="page-wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        <footer class="footer t-a-c">
            <div class="p-20 bg-white">
                <center> <?php echo e(App\CommonSetting::first()->footer_text??''); ?> </center>
            </div>
        </footer>
    </div>
    <!-- ===== Page-Content-End ===== -->
</div>
<!-- ===== Main-Wrapper-End ===== -->
<!-- ==============================
    Required JS Files
=============================== -->
<!-- ===== jQuery ===== -->
<script src="<?php echo e(asset('plugins/components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- ===== Bootstrap JavaScript ===== -->
<script src="<?php echo e(asset('bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- ===== Slimscroll JavaScript ===== -->
<script src="<?php echo e(asset('js/jquery.slimscroll.js')); ?>"></script>
<!-- ===== Wave Effects JavaScript ===== -->
<script src="<?php echo e(asset('js/waves.js')); ?>"></script>
<!-- ===== Menu Plugin JavaScript ===== -->
<script src="<?php echo e(asset('js/sidebarmenu.js')); ?>"></script>
<script src="<?php echo e(asset('js/fontawesome.js')); ?>"></script>
<!-- ===== Custom JavaScript ===== -->

<?php if(session()->get('theme-layout') == 'fix-header'): ?>
    <script src="<?php echo e(asset('js/custom-fix-header.js')); ?>"></script>
<?php elseif(session()->get('theme-layout') == 'mini-sidebar'): ?>
    <script src="<?php echo e(asset('js/custom-mini-sidebar.js')); ?>"></script>
<?php else: ?>
    <script src="<?php echo e(asset('js/custom-normal.js')); ?>"></script>
<?php endif; ?>


<!-- ===== Plugin JS ===== -->
<script src="<?php echo e(asset('plugins/components/chartist-js/dist/chartist.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/components/sparkline/jquery.sparkline.min.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/components/sparkline/jquery.charts-sparkline.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/components/knob/jquery.knob.js')); ?>"></script>
<script src="<?php echo e(asset('plugins/components/easypiechart/dist/jquery.easypiechart.min.js')); ?>"></script>
<!-- ===== Style Switcher JS ===== -->
<script src="<?php echo e(asset('plugins/components/styleswitcher/jQuery.style.switcher.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.9.0/js/bootstrap-iconpicker-iconset-all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-iconpicker/1.9.0/js/bootstrap-iconpicker.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
    <?php endif; ?>
    <?php if(Auth::user()->hasRole('employee')): ?>
    <script>
    $.ajax({
        type:'get',
        url:'<?php echo e(route('get_coworker_request')); ?>',
        data:{ 'id':<?php echo e(Auth::id()); ?> },
        success: function( msg ) {
            $('.message-center').html(msg);
        }
    }); 
        
    </script>
    <?php endif; ?>
<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/layouts/master.blade.php ENDPATH**/ ?>