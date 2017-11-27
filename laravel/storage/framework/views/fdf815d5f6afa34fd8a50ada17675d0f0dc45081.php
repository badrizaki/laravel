<?php $__env->startSection('title', 'Transport'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(url('assets/components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="title-page"><h1>Unilever, PT.</h1></div>
<div class="content">
   <div class="welcome">
      <br><br>
      <h1><center>Welcome to Transport</center></h1>
      <p>Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit. Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit.
         <br><br>
         ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit. Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit. Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit.
      </p>
      <br><br>
      <div align="center">
         <button class="btn btn-default">START YOUR ORDER</button>
      </div>
   </div>
   <div class="datas row">
      <div class="col-sm-3">
         <div class="title-section">MOVING VEHICLE</div>
         <div class="chart blue"><!-- <i class="fa fa-bar-chart"></i> --><img src="<?php echo e(url('assets/img/chart-blue.png')); ?>"></div>
         <div class="total-summary blue">59</div>
         <div class="clearfix"></div>
      </div>
      <div class="col-sm-5">
         <br><br><br>
         <div class="clearfix"></div>
      </div>
      <div class="col-sm-3">
         <div class="title-section">WAITING QUOTE REPLIED</div>
         <div class="chart red"><!-- <i class="fa fa-bar-chart"></i> --><img src="<?php echo e(url('assets/img/chart-red.png')); ?>"></div>
         <div class="total-summary red">11</div>
         <div class="clearfix"></div>
      </div>

      <div class="col-sm-6">
         <div class="title-section">VEHICLES BY DISTANCE DRIVEN</div>
         <img src="<?php echo e(url('assets/img/sample-chart-vehicle.jpg')); ?>" width="100%">
      </div>
      <div  class="col-sm-5">
         <div class="title-section">SEARCH YOUR CARRIER</div>
         <p>
            Lorem ipsum dolor sit amet, ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit.
            <br><br>
            ectetur adipiscing elit. viverra tellus. Ipsum dolor sit da amet, ectetur adipscing elit.
         </p>
      </div>

      <div class="col-sm-11">
         <div class="title-section">ORDER STATUS</div>
         <div>
            <table class="table table-striped table-hover" id="dataTables" width="100%">
               <thead>
                  <tr>
                     <th>Invoice</th>
                     <th>User</th>
                     <th>Order date</th>
                     <th>Amount</th>
                     <th>Status</th>
                     <th>Tracking Number</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/components/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
    listManager.listUrl = "<?php echo e(url('list-order')); ?>";
    listManager.dataTable = [
                                { "data": "invoice" },
                                { "data": "user" },
                                { "data": "order_date" },
                                { "data": "amount" },
                                { "data": "status" },
                                { "data": "tracking_number" }
                            ];
    listManager.ready();
} );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('basecustomer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>