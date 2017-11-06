<?php $__env->startSection('title', 'PT SOLUSI PRIMA PACKAGING :: Material'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(url('assets/components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Material</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   <div class="row row-offcanvas row-offcanvas-left">
      <div class="col-xs-12 content">
         <?php if(Session::has('message')): ?>
            <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
         <?php endif; ?>
         <div class="btn-container">
            <a href="<?php echo e(route('material.create')); ?>" class="btn btn-primary">Add New</a>
         </div>
         <div class="container-fluid table-responsive" align="center-block">
            
            <table class="table table-striped table-hover" id="dataTables">
               <thead>
                  <tr>
                     <th>Material</th>
                     <th>Price</th>
                     <th>Unit Price</th>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/components/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/datatables.min.js')); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
   listManager.listUrl = "<?php echo e(route('material.index')); ?>/list";
   listManager.deleteUrl = "<?php echo e(route('material.index')); ?>";
   listManager.token = "<?php echo e(csrf_token()); ?>";
   listManager.searching = true;
   listManager.bLengthChange = true;
   listManager.dataTable = [
                              { "data": "materialName" },
                              { "data": "price" },
                              { "data": "unitPrice" },
                              { "data": 'action', name: 'action', orderable: false, searchable: false},
                         ];
   listManager.ready();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>