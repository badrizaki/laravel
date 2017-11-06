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
         <div class="trailing">Administration / Zones</div>
      </div>
      <div class="col-xs-12 col-sm-10 content">
         <div class="btn-container">
            <button type="button" class="btn btn-add" onclick="popupManager.add();">Add New</button>
         </div>
         <div class="container-fluid table-responsive" align="center-block">
            
            <table class="table table-striped table-hover" id="dataTables">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Seq</th>
                     <th>Color</th>
                     <th>Action</th>
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
   listManager.listUrl = "<?php echo e(url('administration/fleet')); ?>";
   listManager.token = "<?php echo e(csrf_token()); ?>";
   listManager.searching = true;
   listManager.bLengthChange = true;
   listManager.dataTable = [
                              { "data": "fleetName" },
                              { "data": "fleetSeq" },
                              { "data": "fleetColor" },
                              { "data": 'action', name: 'action', orderable: false, searchable: false},
                         ];
   listManager.ready();
   popupManager.urlAdd = "<?php echo e(url('administration/fleet/add')); ?>"
   popupManager.urlUpdate = "<?php echo e(url('administration/fleet/update')); ?>"
   popupManager.token = "<?php echo e(csrf_token()); ?>";
});
$("popup").on("hidden.bs.modal", function(){
   $(".modal-dialog").remove();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.base', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>