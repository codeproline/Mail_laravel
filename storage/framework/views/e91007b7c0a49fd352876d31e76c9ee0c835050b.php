 <?php $__env->startSection('title'); ?> <?php echo e($title); ?> :: ##parent-placeholder-3c6de1b7dd91465d437ef415f94f36afc1fbc8a8## <?php $__env->stopSection(); ?> <?php $__env->startSection('styles'); ?> ##parent-placeholder-bf62280f159b1468fff0c96540f3989d41279669## <style type="text/css"> </style> <?php $__env->stopSection(); ?> <?php $__env->startSection('main'); ?> <div class="panel panel-flat"> <div class="panel-heading"> <h5 class="panel-title"><?php echo e($title); ?></h5> <div class="heading-elements"> <ul class="icons-list"> <li><a data-action="collapse"></a></li> </ul> </div> </div> <div class="table-responsive"> <table class="table table-stripped"> <thead> <th><?php echo e(trans('products.package')); ?> </th> <th><?php echo e(trans('products.pv')); ?></th> <th> <?php echo e(trans('products.total_amount')); ?></th> <th> <?php echo e(trans('products.paid_by')); ?></th> <th> <?php echo e(trans('products.purchase_date')); ?></th> </thead> <tbody> <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <tr> <td> <?php echo e($item->package); ?></td> <td> <?php echo e($item->pv); ?></td> <td> <?php echo e(round($item->total_amount,2)); ?> </td> <td> <?php echo e($item->pay_by); ?></td> <td> <?php echo e(Date('d M Y',strtotime($item->created_at))); ?></td> </tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> </tbody> </table> </div> </div> <?php $__env->stopSection(); ?> 
<?php echo $__env->make('app.user.layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>