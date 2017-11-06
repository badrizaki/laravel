<!DOCTYPE html>
<html lang="en">
<head>
   <title>Login</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/font-awesome/css/font-awesome.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/login.css')); ?>">
</head>
<body>
   <header>
      <div class="logo"><a href="#"><img src="<?php echo e(url('assets/img/logo-2.png')); ?>"></a></div>
   </header>
   <div id="container">
      <div class="content">
         <form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>

            <h3>Log in to Transport</h3>

            <?php if($errors->has('customerCode')): ?>
            <div class="alert alert-danger"><?php echo e($errors->first('customerCode')); ?></div>
            <?php endif; ?>
            <?php if($errors->has('email')): ?>
            <div class="alert alert-danger"><?php echo e($errors->first('email')); ?></div>
            <?php endif; ?>
            <?php if($errors->has('password')): ?>
            <div class="alert alert-danger"><?php echo e($errors->first('password')); ?></div>
            <?php endif; ?>

            <div class="form-group">
               <div class="input-icon">
                  <input type="text" class="input" placeholder="Company Code" name="customerCode" value="<?php echo e(old('customerCode')); ?>"/>
               </div>
            </div>
            <div class="form-group">
               <div class="input-icon">
                  <input type="email" class="input" placeholder="Email" name="email" value="<?php echo e(old('email')); ?>" required />
               </div>
            </div>
            <div class="form-group">
               <div class="input-icon">
                  <input type="password" class="input" placeholder="Password" name="password" id="password" required/>
               </div>
            </div>

            <div class="form-group">
               <div class="input-icon">
                  <div class="checkbox">
                      <label for="remember"><input type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?> style="width:auto;"> Remember Me</label>
                     input
                  </div>
               </div>
            </div>

            <div class="form-actions">
               <button type="submit" class="btn btn-blue">Log In</button>
            </div>
         </form>
         <div class="txt-bottom"><a href="<?php echo e(route('password.request')); ?>">Forgot password?</a></div>
         <div class="txt-bottom"><a href="<?php echo e(route('register')); ?>">Don't have a Transport ID? Sign up now.</a></div>
      </div>
      <div class="footer">Copyright &copy; 2017 Transport. All right reserved.</div>
   </div>
   <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
</body>
</html>