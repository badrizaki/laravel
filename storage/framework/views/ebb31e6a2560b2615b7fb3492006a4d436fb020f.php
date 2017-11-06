<!DOCTYPE html>
<html lang="en">
<head>
   <title><?php echo $__env->yieldContent('title'); ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/bootstrap.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/components/font-awesome/css/font-awesome.min.css')); ?>">
   <link rel="stylesheet" href="<?php echo e(url('assets/css/main.css')); ?>">
   <?php echo $__env->yieldContent('css'); ?>
</head>
<body>
   <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid" id="navfluid">
         <div class="navbar-header">
           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigationbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </button>
            <div class="logo"><a class="navbar-brand" href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('assets/img/logo-2.png')); ?>"></a></div>
            <!-- <a class="navbar-brand" href="./Index.html">Stadtfestlauf</a> -->
         </div>
         <div class="collapse navbar-collapse" id="navigationbar">
            <ul class="nav navbar-nav">
               <li><a href="<?php echo e(url('map')); ?>"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Map</a></li>
               <li><a href="<?php echo e(url('vehicle-summary')); ?>"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Vehicle Summary</a></li>    
               <li><a href="<?php echo e(url('job-order')); ?>"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Job Order</a></li>    
               <li><a href="<?php echo e(url('administration')); ?>"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Administration</a></li>    
               <li><a href="<?php echo e(url('history-shipping')); ?>"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;History Shipping</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#"><i class="fa fa-home"></i></a></li>
               <li><a href="#"><i class="fa fa-bell"></i></a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                     <li>
                         <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                         <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;"><?php echo e(csrf_field()); ?></form>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container-fluid text-center">    
      <div class="row container-content">
         <div class="col-sm-12">
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
