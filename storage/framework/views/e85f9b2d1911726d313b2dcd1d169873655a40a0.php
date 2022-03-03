 
<?php $__env->startPush('css'); ?>
    <link href="<?php echo e(asset('plugins/components/datatables/jquery.dataTables.min.css')); ?>" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet"
          type="text/css"/>
          <style type="text/css">
              a.btn, a.btn:hover, a.btn:focus {display: inline-block;background: #d85b2b;border: #d85b2b;padding: 16px 30px;border-radius: 5px;font-size: 16px;}
          </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title pull-left"><?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company')); ?></h3>
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add-'.str_slug('Company'))): ?>
                        <a class="btn btn-success pull-right" href="<?php echo e(url('/company/company/create')); ?>"><i
                                    class="icon-plus"></i> Add <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company')); ?></a>
                    <?php endif; ?>
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th><th>Email</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <?php if($item->hasRole('company')): ?>
                             <?php if($item->status == 1): ?> <?php continue; ?> <?php endif; ?>
                                <tr>
                                    <td><?php echo e($loop->iteration??$item->id); ?></td>
                                    <td><?php echo e($item->name); ?></td><td><?php echo e($item->email); ?></td>

                                    <td>
                                        <?php if($item->status == '2'): ?>
                                          
                                            <a href="<?php echo e(route('change_approval')); ?>/<?php echo e($item->id); ?>/0" class="btn btn-success btn-sm">
                                                        <i class="fa fa-check" aria-hidden="true"></i> Accept
                                            </a>
                                            <a href="<?php echo e(route('change_approval')); ?>/<?php echo e($item->id); ?>/1" class="btn btn-danger btn-sm">
                                                        <i class="fa fa-times" aria-hidden="true"></i> Reject
                                            </a>
                                      
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('view-'.str_slug('Company'))): ?>
                                            <a href="<?php echo e(url('/company/company/' . $item->id)); ?>"
                                               title="View <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company')); ?>">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-'.str_slug('Company'))): ?>
                                            <a href="<?php echo e(url('/company/company/' . $item->id . '/edit')); ?>"
                                               title="Edit <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company')); ?>">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button>
                                            </a>
                                        <?php endif; ?>

                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-'.str_slug('Company'))): ?>
                                            <form method="POST"
                                                  action="<?php echo e(url('/company/company' . '/' . $item->id)); ?>"
                                                  accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete <?php echo e(preg_replace('/(?<=[a-z])[A-Z]|[A-Z](?=[a-z])/', ' $0', 'Company')); ?>"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        <?php endif; ?>


                                    </td>
                                </tr>
                             <?php endif; ?>   
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                        <div class="pagination-wrapper"> <?php echo $company->appends(['search' => Request::get('search')])->render(); ?> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('plugins/components/toast-master/js/jquery.toast.js')); ?>"></script>

    <script src="<?php echo e(asset('plugins/components/datatables/jquery.dataTables.min.js')); ?>"></script>
    <!-- start - This is for export functionality only -->
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {

            <?php if(\Session::has('message')): ?>
            $.toast({
                heading: 'Success!',
                position: 'top-center',
                text: '<?php echo e(session()->get('message')); ?>',
                loaderBg: '#ff6849',
                icon: 'success',
                hideAfter: 3000,
                stack: 6
            });
            <?php endif; ?>
        })

        $(function () {
            $('#myTable').DataTable({
                'aoColumnDefs': [{
                    'bSortable': false,
                    'aTargets': [-1] /* 1st one, start by the right */
                }]
            });

        });
         $("input[name='query']").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Aftab (Backend Nigh)\Downloads\Toskr_1.1-main\Toskr_1.1-main\resources\views/company/company/index.blade.php ENDPATH**/ ?>