<?php $__env->startSection('title', 'Transport'); ?>
<?php $__env->startSection('customer', 'active'); ?>

<?php $__env->startSection('css'); ?>
<link href="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')); ?>" rel="stylesheet">
<link href="<?php echo e(url('assets/components/datatables-responsive/css/dataTables.responsive.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   <div class="row row-offcanvas row-offcanvas-left">
      <?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <div class="col-xs-12 col-sm-10 container-trailing">
         <div class="trailing">Administration / Customer</div>
      </div>
      <div class="col-xs-12 col-sm-10 content">
         <?php if(Session::has('message')): ?>
            <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
         <?php endif; ?>
         <div class="btn-container">
            <a href="<?php echo e(route('customer.create')); ?>" class="btn btn-add">Add New</a>
         </div>
         <div class="container-fluid table-responsive" align="center-block">
            
            <table class="table table-striped table-hover" id="dataTables">
               <thead>
                  <tr>
                     <th>Customer</th>
                     <th>Address</th>
                     <th>Phone</th>
                     <th>Fax</th>
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
<script src="<?php echo e(url('assets/components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')); ?>"></script>
<script type="text/javascript">
$(document).ready(function() {
   listManager.listUrl = "<?php echo e(route('customer.index')); ?>/list";
   listManager.deleteUrl = "<?php echo e(route('customer.index')); ?>";
   listManager.token = "<?php echo e(csrf_token()); ?>";
   listManager.searching = true;
   listManager.bLengthChange = true;
   listManager.dataTable = [
                              { "data": "name" },
                              { "data": "address" },
                              { "data": "phone1" },
                              { "data": "fax" },
                              { "data": 'action', name: 'action', orderable: false, searchable: false},
                         ];
   listManager.ready();
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>