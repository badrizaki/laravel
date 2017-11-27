<?php $__env->startSection('content'); ?>
<div id="container">
   <div class="content">
      <div class="title">
         <h3>Request a password reset</h3>
      </div>
      <form class="form-horizontal" method="POST" action="<?php echo e(route('password.email')); ?>">
         <?php echo e(csrf_field()); ?>

         <div class="container-form">

            <?php if(session('status')): ?>
            <div class="form-group">
               <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

               </div>
            </div>
            <?php endif; ?>

            <div class="form-group">
               <label class="control-label col-sm-3" for="customerCode">Company Code</label>
               <div class="col-sm-9">
                  <input type="text" class="form-control" name="customerCode" id="customerCode" placeholder="Your Company Code">
                  <?php if($errors->has('customerCode')): ?>
                     <div <?php echo e($errors->has('customerCode') ? 'class="has-error"' : ''); ?>>
                        <span class="help-block">
                           <strong><?php echo e($errors->first('customerCode')); ?></strong>
                        </span>
                     </div>
                  <?php endif; ?>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-3" for="email">Email</label>
               <div class="col-sm-9">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                  <?php if($errors->has('email')): ?>
                     <div <?php echo e($errors->has('email') ? 'class="has-error"' : ''); ?>>
                        <span class="help-block">
                           <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                     </div>
                  <?php endif; ?>
               </div>
            </div>

            <div class="form-group">
               <label class="control-label col-sm-3"></label>
               <div class="col-sm-9 colorgrey">Contact us, if you need assistance</div>
            </div>

            <div class="form-group" style="margin-bottom:0px; padding-bottom:20px;">
               <label class="control-label col-sm-3"></label>
               <div class="col-sm-9">
                  <div class="checkbox">
                     <button type="submit" class="btn btn-blue">Send Password Reset Link</button>
                  </div>
               </div>
            </div>
         </div>
      </form>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>