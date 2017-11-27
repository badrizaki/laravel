<div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="sidebar-nav">
        <ul class="nav">
            <li<?php echo e((\Request::route()->getName() == 'order') ? ' class=active' : ''); ?>><a href="<?php echo e(route('order')); ?>"><i class="fa fa-building"></i>&nbsp;Order</a></li>
            <li<?php echo e((\Request::route()->getName() == 'bidding') ? ' class=active' : ''); ?>><a href="<?php echo e(route('bidding')); ?>"><i class="fa fa-archive"></i>&nbsp;Bidding</a></li>
            <li<?php echo e((\Request::route()->getName() == 'shipment') ? ' class=active' : ''); ?>><a href="<?php echo e(route('shipment')); ?>"><i class="fa fa-archive"></i>&nbsp;Shipment</a></li>
            <li<?php echo e((\Request::route()->getName() == 'invoice') ? ' class=active' : ''); ?>><a href="<?php echo e(route('invoice')); ?>"><i class="fa fa-archive"></i>&nbsp;Invoice</a></li>
            <li<?php echo e((\Request::route()->getName() == 'payment') ? ' class=active' : ''); ?>><a href="<?php echo e(route('payment')); ?>"><i class="fa fa-archive"></i>&nbsp;Payment</a></li>
        </ul>
    </div>
</div>