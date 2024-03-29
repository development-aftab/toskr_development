 <?php $__env->startSection('content'); ?>

  <section class="home_sec1">

    <div class="container custom-container">
      <div class="row">

        <div class="col-md-6 sec_1_text">
          <h1><?php echo e($Homepage->title); ?> <span class="two_color_heading">toskr</span></h1>
          <p><?php echo e($Homepage->description); ?></p>
          <a href="#!" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a>
        </div>
        <div class="col-md-6 sec1_img "><img src="<?php echo e(asset('website')); ?>/<?php echo e($Homepage->image); ?>" alt=""></div>
      </div>

    </div>

  </section>
  <section class="home_sec2">
    <div class="container custom-container">
      <div class="row home_sec2_row">
        <div class="col-md-12 text-center sec_2_heading">
          <h1><span>Boost your team </span>with advance and flexible features</h1>
        </div>


        
        <div class="col-md-3">
          <a href="#User_Friendly">
            <div class="sec2_icons_block">
              <div class="icon">
                <img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','friendly_button')->first()->image); ?>" alt="">
                <div class="icon_block_content">
                  <h2><?php echo e($feature->where('slug','friendly_button')->first()->title); ?></h2>
                  <p><?php echo e($feature->where('slug','friendly_button')->first()->description); ?></p>
                </div>
              </div>
            </div>
          </a>
        </div>


        <div class="col-md-3 ">
          <a href="#Trusted_App">
            <div class="sec2_icons_block">
              <div class="icon">
                <img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Trusted_button')->first()->image); ?>" alt="">
                <div class="icon_block_content">
                  <h2><?php echo e($feature->where('slug','Trusted_button')->first()->title); ?></h2>
                  <p><?php echo e($feature->where('slug','Trusted_button')->first()->description); ?></p>
                </div>
              </div>
            </div>
          </a>

        </div>

        <div class="col-md-3 ">
          <a href="#Flexiblility">
            <div class="sec2_icons_block">
              <div class="icon">
                <img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Flexiblility_button')->first()->image); ?>" alt="">
                <div class="icon_block_content">
                  <h2><?php echo e($feature->where('slug','Flexiblility_button')->first()->title); ?></h2>
                  <p><?php echo e($feature->where('slug','Flexiblility_button')->first()->description); ?></p>
                </div>
              </div>
            </div>
          </a>

        </div>
        <div class="col-md-3 ">
          <a href="#Free_System">
            <div class="sec2_icons_block">
              <div class="icon">
                <img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Free_button')->first()->image); ?>" alt="">
                <div class="icon_block_content">
                  <h2><?php echo e($feature->where('slug','Free_button')->first()->title); ?></h2>
                  <p><?php echo e($feature->where('slug','Free_button')->first()->description); ?></p>
                </div>
              </div>
            </div>
          </a>

        </div>
      </div>
    </div>
  </section>
  <section class="home_sec3" id="User_Friendly">
    <div class="container custom-container">
      <div class="row">
        <div class="col-md-6 sec3_img img-fluid"><img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','friendly_title')->first()->image); ?>" alt=""></div>
        <div class="col-md-6 sec_3_text">
          <h1><?php echo e($feature->where('slug','friendly_title')->first()->title); ?></h1>
          <p><?php echo e($feature->where('slug','friendly_title')->first()->description); ?></p>
          <div class="sec3_Get_started_btn"><a href="#!" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="home_sec4" id="Trusted_App">
    <div class="container custom-container">
      <div class="row">
        <div class="col-md-6 sec_4_text">
          <h1><?php echo e($feature->where('slug','Trusted_title')->first()->title); ?></h1>
          <p><?php echo e($feature->where('slug','Trusted_title')->first()->description); ?></p>
          <div class="sec4_Get_started_btn"><a href="#!" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a></div>
        </div>
        <div class="col-md-6 sec4_img img-fluid"><img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Trusted_title')->first()->image); ?>" alt=""></div>
      </div>
    </div>
  </section>
  <section class="home_sec5" id="Flexiblility">
    <div class="container custom-container">
      <div class="row">
        <div class="col-md-6 sec5_img img-fluid"><img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Flexiblility_title')->first()->image); ?>" alt=""></div>
        <div class="col-md-6 sec_5_text">
          <h1><?php echo e($feature->where('slug','Flexiblility_title')->first()->title); ?></h1>
          <p><?php echo e($feature->where('slug','Flexiblility_title')->first()->description); ?></p>
          <div class="sec5_Get_started_btn"><a href="#!" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a></div>
        </div>
      </div>
    </div>
  </section>
  <section class="home_sec6" id="Free_System">
    <div class="container custom-container  ">
      <div class="row">
        <div class="col-md-6 sec_6_text">
          <h1><?php echo e($feature->where('slug','Free_title')->first()->title); ?></h1>
          <p><?php echo e($feature->where('slug','Free_title')->first()->description); ?></p>
          <div class="sec6_Get_started_btn"><a href="#!" data-toggle="modal" data-target="#get_started" data-whatever="@mdo">Get Started</a></div>
        </div>
        <div class="col-md-6 sec6_img img-fluid"><img src="<?php echo e(asset('website')); ?>/<?php echo e($feature->where('slug','Free_title')->first()->image); ?>" alt=""></div>
      </div>
    </div>
  </section>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('website.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/website/index.blade.php ENDPATH**/ ?>