<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo $__env->yieldContent('title'); ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/font-awesome/css/font-awesome.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/main2.css')); ?>">
   <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
   <header>
      <div class="container-fluid">
         <div class="logo"><a href="#"><img src="<?php echo e(url('assets/img/logo.png')); ?>"></a></div>
         <div class="dropdown user user-menu"><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Super Admin</a></div>
      </div>
   </header>

   <div class="container-fluid text-center">    
      <div class="row container-content">
         <div class="col-sm-2 sidenav">
            <div id="icon">
               <ul>
                  <li class="active"><i class="fa fa-home"></i></li>
                  <li><i class="fa fa-book"></i></li>
               </ul>
            </div>
            <div id="menu">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">City</a></li>
                  <li><hr></li>
                  <li><a href="#">VEHICLE TYPE</a></li>
                  <li><a href="#">Group Category</a></li>
                  <li><a href="#">Category</a></li>
                  <li><a href="#">Vehicle</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-9">
            <div class="title-page"><h1>Dashboard</h1></div>
            <?php echo $__env->yieldContent('content'); ?>
         </div>
         <div class="col-sm-1 sidenav">
         </div>
      </div>
   </div>

   <footer class="container-fluid text-center">
     <p>Footer Text</p>
   </footer>

   <script src="<?php echo e(url('assets/js/jquery.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>
   <script src="<?php echo e(url('assets/js/main.js')); ?>"></script>
   <?php echo $__env->yieldContent('js'); ?>
</body>
</html>
