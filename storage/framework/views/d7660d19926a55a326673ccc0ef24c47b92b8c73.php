<?php $__env->startSection('content'); ?>
<div id="container">
    <div class="content">
        <div class="title">
            <h3>Sign Up / Register</h3>
        </div>
        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="container-form">
                <div class="form-group">
                    <label class="control-label col-sm-3" for="name">Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php echo e(old('name')); ?>">
                        <?php if($errors->has('name')): ?>
                        <div class="has-error">
                           <span class="help-block">
                              <strong><?php echo e($errors->first('name')); ?></strong>
                           </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="company">Company</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="company" id="company" placeholder="Your Company" value="<?php echo e(old('company')); ?>">
                        <?php if($errors->has('company')): ?>
                        <div class="has-error">
                           <span class="help-block">
                              <strong><?php echo e($errors->first('company')); ?></strong>
                           </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label><input type="checkbox" name="isShipper" value="1" <?php echo e(old('isShipper') ? 'checked' : ''); ?>>Shipper</label>
                            &nbsp;&nbsp;&nbsp;
                            <label><input type="checkbox" name="isCarrier" value="1" <?php echo e(old('isCarrier') ? 'checked' : ''); ?>>Carrier</label>
                            <?php if($errors->has('customerType')): ?>
                            <div class="has-error">
                               <span class="help-block">
                                  <strong><?php echo e($errors->first('customerType')); ?></strong>
                               </span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php echo e(old('email')); ?>">
                        <?php if($errors->has('email')): ?>
                        <div class="has-error">
                           <span class="help-block">
                              <strong><?php echo e($errors->first('email')); ?></strong>
                           </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email_confirmation">Confirm Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email_confirmation" id="email_confirmation" placeholder="Repeat Your Email" value="<?php echo e(old('email_confirmation')); ?>">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="username">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Your Username" value="<?php echo e(old('username')); ?>">
                        <?php if($errors->has('username')): ?>
                        <div class="has-error">
                           <span class="help-block">
                              <strong><?php echo e($errors->first('username')); ?></strong>
                           </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="password">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
                        <?php if($errors->has('password')): ?>
                        <div class="has-error">
                           <span class="help-block">
                              <strong><?php echo e($errors->first('password')); ?></strong>
                           </span>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="password_confirmation">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Repeat Your Password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label><input type="checkbox" name="accept_terms" valud="1">I accept the terms</label>
                            <?php if($errors->has('accept_terms')): ?>
                            <div class="has-error">
                               <span class="help-block">
                                  <strong><?php echo e($errors->first('accept_terms')); ?></strong>
                               </span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <div class="g-recaptcha" data-sitekey="<?php echo e(env('RE_CAP_SITE')); ?>" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
                            <?php if($errors->has('g-recaptcha-response')): ?>
                            <div class="has-error">
                               <span class="help-block">
                                  <strong><?php echo e($errors->first('g-recaptcha-response')); ?></strong>
                               </span>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="margin-bottom:0px; padding-bottom:20px;">
                    <label class="control-label col-sm-3"></label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <button type="submit" class="btn btn-blue">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>