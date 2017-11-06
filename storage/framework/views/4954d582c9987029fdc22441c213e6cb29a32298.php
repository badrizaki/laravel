<?php $__env->startSection('title', 'Transport'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(url('assets/components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   <div class="row row-offcanvas row-offcanvas-left">
      <?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="col-xs-12 col-sm-10 container-trailing">
         <div class="trailing">Administration / Shipment</div>
      </div>
      <div class="col-xs-12 col-sm-10 content">
         <div class="btn-container">
            <button type="button" class="btn btn-add" onclick="popupManager.add();">Add New</button>
         </div>
         <div class="container-fluid table-responsive" align="center-block">
            
            <table class="table table-striped table-hover" id="dataTables">
               <thead>
                  <tr>
                     <th>Shipment No</th>
                     <th>Shipper</th>
                     <th>Carrier</th>
                     <th>Departure</th>
                     <th>Arrival</th>
                     <th>Driver</th>
                     <th>Vehicle</th>
                     <th>Date</th>
                     <th>Status</th>
                  </tr>
               </thead>
               <tbody>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<div class="modal fade bs-example-modal-lg" id="popup" style="display: none;"></div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/components/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
   listManager.listUrl = "<?php echo e(route('shipmentList')); ?>";
   listManager.token = "<?php echo e(csrf_token()); ?>";
   listManager.searching = true;
   listManager.bLengthChange = true;
   listManager.dataTable = [
                              { "data": "shipmentId" },
                              { "data": "shipperName" },
                              { "data": "carrierName" },
                              { "data": "departure" },
                              { "data": "arrival" },
                              { "data": "driverName" },
                              { "data": "vehicleNo" },
                              { "data": "transactionDate" },
                              { "data": 'action', name: 'action', orderable: false, searchable: false},
                         ];
   listManager.ready();
   popupManager.urlAdd = "<?php echo e(route('shipmentCreate')); ?>"
   popupManager.urlUpdate = "<?php echo e(route('shipmentEdit')); ?>"
   popupManager.token = "<?php echo e(csrf_token()); ?>";
});
$("popup").on("hidden.bs.modal", function(){
   $(".modal-dialog").remove();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>