<?php $__env->startSection('title', 'Transport'); ?>

<?php $__env->startSection('css'); ?>
<style type="text/css" media="screen">
@media  screen and (max-width: 768px) {
  .row-offcanvas {
    position: relative;
    -webkit-transition: all 0.25s ease-out;
    -moz-transition: all 0.25s ease-out;
    transition: all 0.25s ease-out;
    background:#ecf0f1;
  }
}

#container-content { background-color: #fafafa; }
#container-content .content { background-color: #ffffff; }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
    <div class="row row-offcanvas row-offcanvas-left">
        <?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="col-xs-12 col-sm-10 content">
            <br>
            <div class="jumbotron">
                <a href="#" class="visible-xs" data-toggle="offcanvas"><i class="fa fa-lg fa-reorder"></i></a>
                <h1>Hello, world!</h1>
                <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap friendly HTML, CSS and Javascript. Bootstrap is a front-end framework that uses CSS and JavaScript to
                        facilitate responsive Web design. </p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->

                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
                <div class="col-6 col-sm-6 col-lg-4">
                    <h2>Heading</h2>
                    <p>Bootstrap is a front-end framework that uses CSS and JavaScript to facilitate responsive Web design. Bootply is a playground for Bootstrap that enables developers and designers to test, prototype and create mockups using Bootstrap
                        friendly HTML, CSS and Javascript.</p>
                    <p><a class="btn btn-default" href="#">View details »</a></p>
                </div>
                <!--/span-->
            </div>
            <!--/row-->
        </div>
        <!--/span-->
    </div>
</div>

<!-- <div class="main-sidebar">
    <ul class="sidebar-menu">
        <li class="treeview  "><a href="/Administration/Fleet"><i class="fa fa-archive"></i> Fleet</a></li>
        <li class="treeview  "><a href="/Administration/Customer"><i class="fa fa-cogs"></i> Customer</a></li>
        <li class="treeview  "><a href="/Administration/User"><i class="fa fa-cogs"></i> User</a></li>
        <hr/>
        <li class="treeview  "><a href="/Membership/Driver"><i class="fa fa-cogs"></i> Driver</a></li>
        <li class="treeview  "><a href="/Membership/Category"><i class="fa fa-cogs"></i> Category</a></li>
        <li class="treeview  active  "><a href="/Membership/Vehicle"><i class="fa fa-cogs"></i> Vehicle</a></li>
        <li class="treeview  "><a href="/Membership/Zones"><i class="fa fa-cogs"></i> Zones</a></li>
    </ul>
</div>
<div class="content">
   <div class="content-container">
      <div class="title"><h1>Job Order</h1></div>
   </div>
</div> -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>