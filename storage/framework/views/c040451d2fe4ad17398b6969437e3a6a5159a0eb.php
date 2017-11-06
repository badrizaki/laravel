<div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="sidebar-nav">
        <ul class="nav">
            <li class="<?php echo $__env->yieldContent('province'); ?>"><a href="<?php echo e(route('province.index')); ?>"><i class="fa fa-building"></i>&nbsp;Provinces</a></li>
            <li<?php echo e((\Request::route()->getName() == 'city') ? ' class=active' : ''); ?>><a href="<?php echo e(route('city')); ?>"><i class="fa fa-archive"></i>&nbsp;Cities</a></li>
            <li<?php echo e((\Request::route()->getName() == 'fleet') ? ' class=active' : ''); ?>><a href="<?php echo e(route('fleet')); ?>"><i class="fa fa-archive"></i>&nbsp;Fleet</a></li>
            <li<?php echo e((\Request::route()->getName() == 'customer') ? ' class=active' : ''); ?>><a href="<?php echo e(route('customer')); ?>"><i class="fa fa-archive"></i>&nbsp;Customer</a></li>
            <li<?php echo e((\Request::route()->getName() == 'user') ? ' class=active' : ''); ?>><a href="#"><i class="fa fa-archive"></i>&nbsp;User</a></li>
            <li class="nav-divider"></li>
            <li<?php echo e((\Request::route()->getName() == 'driver') ? ' class=active' : ''); ?>><a href="<?php echo e(route('driver')); ?>"><i class="fa fa-car"></i>&nbsp;&nbsp;Driver</a></li>
            <li<?php echo e((\Request::route()->getName() == 'category') ? ' class=active' : ''); ?>><a href="<?php echo e(route('category')); ?>"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Category</a></li>
            <li<?php echo e((\Request::route()->getName() == 'vehicle') ? ' class=active' : ''); ?>><a href="<?php echo e(route('vehicle')); ?>"><i class="fa fa-car"></i>&nbsp;&nbsp;Vehicle</a></li>
            <li<?php echo e((\Request::route()->getName() == 'zone') ? ' class=active' : ''); ?>><a href="<?php echo e(route('zone')); ?>"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;&nbsp;Zones</a></li>
        </ul>
    </div>
</div>