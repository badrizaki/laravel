<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo e($title); ?></title>
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
         <form method="POST" id="form_login">
            <h3>Log in to Transport</h3>
            <div class="form-group">
                <div class="input-icon">
                    <input type="email" class="input" placeholder="Email" name="email" id="email" />
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <input type="password" class="input" placeholder="Password" name="password" id="password" />
                </div>
            </div>
            <div class="form-actions">
               <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
               <button type="button" onClick="userActivity.login()" class="btn btn-blue">Log In</button>
            </div>
         </form>
         <div class="txt-bottom"><a href="<?php echo e(url('forgot-password')); ?>">Forgot password?</a></div>
         <div class="txt-bottom"><a href="<?php echo e(url('signup')); ?>">Don't have a Transport ID? Sign up now.</a></div>
      </div>
      <div class="footer">Copyright &copy; 2017 Transport. All right reserved.</div>
   </div>
   <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>

   <script src="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/loadingoverlay.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/userActivity.js')); ?>"></script>
   <script>
      $('.input').keypress(function (e)
      {
        if (e.which == 13) {
          userActivity.login();
          return false;
        }
      });
      userActivity.url = "<?php echo e(url('login')); ?>";
    </script>
</body>
</html>