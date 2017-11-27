<?php $__env->startSection('content'); ?>
<div id="container">
   <div class="content">
      <div class="title">
         <h3>Reset password</h3>
      </div>

      <form class="form-horizontal" method="POST" action="<?php echo e(route('password.request')); ?>">
         <?php echo e(csrf_field()); ?>

         <input type="hidden" name="token" value="<?php echo e($token); ?>">
         <div class="container-form">

            <?php if(session('status')): ?>
            <div class="form-group">
               <div class="alert alert-success">
                  <?php echo e(session('status')); ?>

               </div>
            </div>
            <?php endif; ?>

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

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
               <label class="control-label col-sm-3" for="password">Password</label>
               <div class="col-sm-9">
                  <input id="password" type="password" class="form-control" name="password" required>
                  <?php if($errors->has('password')): ?>
                     <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                     </span>
                  <?php endif; ?>
               </div>
            </div>

            <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                <label class="control-label col-sm-3" for="password-confirm">Confirm Password</label>
                <div class="col-md-6">
                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                     <?php if($errors->has('password_confirmation')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                        </span>
                     <?php endif; ?>
                </div>
            </div>

            <div class="form-group" style="margin-bottom:0px; padding-bottom:20px;">
               <label class="control-label col-sm-3"></label>
               <div class="col-sm-9">
                  <div class="checkbox">
                     <button type="submit" class="btn btn-blue">Reset Password</button>
                  </div>
               </div>
            </div>
            
         </div>
      </form>
   </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>