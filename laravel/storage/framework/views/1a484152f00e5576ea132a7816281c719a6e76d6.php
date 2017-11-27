<div class="col-xs-4 col-sm-2 sidebar-offcanvas" id="sidebar" role="navigation">
    <div class="sidebar-nav">
        <ul class="nav">
            <li class="<?php echo $__env->yieldContent('order'); ?>"><a href="<?php echo e(route('order.index')); ?>"><i class="fa fa-building"></i>&nbsp;Order</a></li>
            <li class="<?php echo $__env->yieldContent('bidding'); ?>"><a href="<?php echo e(route('bidding.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Bidding</a></li>
            <li class="<?php echo $__env->yieldContent('shipment'); ?>"><a href="<?php echo e(route('shipment.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Shipment</a></li>
            <li class="<?php echo $__env->yieldContent('invoice'); ?>"><a href="<?php echo e(route('invoice.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Invoice</a></li>
            <li class="<?php echo $__env->yieldContent('payment'); ?>"><a href="<?php echo e(route('payment.index')); ?>"><i class="fa fa-archive"></i>&nbsp;Payment</a></li>
        </ul>
    </div>
</div>