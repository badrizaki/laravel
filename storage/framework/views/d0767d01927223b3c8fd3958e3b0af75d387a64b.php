<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo e($title); ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/font-awesome/css/font-awesome.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/userActivity.css')); ?>">
</head>
<body>
   <header>
      <div class="logo"><a href="#"><img src="<?php echo e(url('assets/img/logo-2.png')); ?>"></a></div>
   </header>
   <div id="container">
      <div class="content">
         <div class="title">
            <h3>Request a password reset</h3>
         </div>
         <form method="POST" class="form-horizontal" id="frm_signup">
            <div class="container-form">

               <div class="form-group">
                  <label class="control-label col-sm-3" for="company">Company</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control" name="company" id="company" placeholder="Your Company">
                  </div>
               </div>

               <div class="form-group">
                  <label class="control-label col-sm-3" for="email">Email</label>
                  <div class="col-sm-9">
                     <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
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
                        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
                        <button type="button" onClick="userActivity.signup()" class="btn btn-blue">Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>
   <div class="footer">Copyright &copy; 2017 Transport. All right reserved.</div>
   <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>

   <script src="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/loadingoverlay.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
   <script src='https://www.google.com/recaptcha/api.js'></script>
   <script src="<?php echo e(url('assets/js/userActivity.js')); ?>"></script>
   <script>
      userActivity.url = "<?php echo e(url('signup')); ?>";
    </script>
</body>
</html>