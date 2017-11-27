<div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="sidebar-nav">
        <ul class="nav">
            <li class="<?php echo $__env->yieldContent('province'); ?>"><a href="<?php echo e(route('province.index')); ?>"><i class="fa fa-building"></i>&nbsp;Provinces</a></li>
            <li class="<?php echo $__env->yieldContent('city'); ?>"><a href="<?php echo e(route('city.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Cities</a></li>
            <li class="<?php echo $__env->yieldContent('fleet'); ?>"><a href="<?php echo e(route('fleet.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Fleet</a></li>
            <li class="<?php echo $__env->yieldContent('customer'); ?>"><a href="<?php echo e(route('customer.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Customer</a></li>
            <li class="<?php echo $__env->yieldContent('user'); ?>"><a href="#"><i class="fa fa-archive"></i>&nbsp;User</a></li>
            <li class="nav-divider"></li>
            <li class="<?php echo $__env->yieldContent('driver'); ?>"><a href="<?php echo e(route('driver.index')); ?>"><i class="fa fa-car"></i>&nbsp;&nbsp;Driver</a></li>
            <li class="<?php echo $__env->yieldContent('category'); ?>"><a href="<?php echo e(route('category.index')); ?>"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Category</a></li>
            <li class="<?php echo $__env->yieldContent('vehicle'); ?>"><a href="<?php echo e(route('vehicle.index')); ?>"><i class="fa fa-car"></i>&nbsp;&nbsp;Vehicle</a></li>
            <li class="<?php echo $__env->yieldContent('zone'); ?>"><a href="<?php echo e(route('zone.index')); ?>"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;&nbsp;Zones</a></li>
        </ul>
    </div>
</div>