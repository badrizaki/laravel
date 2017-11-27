<div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="sidebar-nav">
        <ul class="nav">
            <li<?php echo e((\Request::route()->getName() == 'fleet') ? ' class=active' : ''); ?>><a href="<?php echo e(url('administration/fleet')); ?>"><i class="fa fa-archive"></i>&nbsp;Fleet</a></li>
            <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Customer</a></li>
            <li><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;User</a></li>
            <li class="nav-divider"></li>
            <li><a href="#"><i class="fa fa-car"></i>&nbsp;&nbsp;Driver</a></li>
            <li><a href="#"><i class="fa fa-cogs"></i>&nbsp;&nbsp;Category</a></li>
            <li><a href="#"><i class="fa fa-car"></i>&nbsp;&nbsp;Vehicle</a></li>
            <li<?php echo e((\Request::route()->getName() == 'zones') ? ' class=active' : ''); ?>><a href="<?php echo e(url('membership/zones')); ?>"><i class="fa fa-map" aria-hidden="true"></i>&nbsp;&nbsp;Zones</a></li>
        </ul>
    </div>
</div>