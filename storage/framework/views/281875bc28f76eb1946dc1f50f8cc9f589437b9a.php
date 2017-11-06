<?php $__env->startSection('title', 'Transport :: Fleet'); ?>
<?php $__env->startSection('fleet', 'active'); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<?php echo $__env->make('includes.sidebar-administration', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="col-xs-12 col-sm-10 container-trailing">
			<div class="trailing">Administration / Fleet / <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
		</div>
		<div class="col-xs-12 col-sm-10 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Fleet <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('fleet.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
					<div class="panel-body">
						<?php if($errors->any()): ?>
						<div class="alert alert-danger">
						    <ul>
						        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						            <li><?php echo e($error); ?></li>
						        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						    </ul>
						</div>
						<?php endif; ?>
					    <?php echo e(csrf_field()); ?>

					    <?php if($id != 0): ?>
					    <input name="_method" type="hidden" value="PUT">
						<?php endif; ?>
						<div class="row">
							<div class="col-lg-8">

					            <div class="form-group">
					               	<label for="Name" class="col-sm-2 control-label">Name</label>
					               	<div class="col-sm-10">
					                  	<input type="text" name="fleetName" class="form-control" id="Name" placeholder="Name" required="" value="<?php echo e(old('fleetName', isset($item) ? $item->fleetName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               <label for="Seq" class="col-sm-2 control-label">Seq</label>
					               <div class="col-sm-10">
					                  <input type="text" name="fleetSeq" class="form-control" id="Seq" placeholder="Seq" required="" value="<?php echo e(old('fleetSeq', isset($item) ? $item->fleetSeq : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Color" class="col-sm-2 control-label">Color</label>
					               <div class="col-sm-10">
					                  <input type="text" name="fleetColor" class="form-control" id="Color" placeholder="Color" required="" value="<?php echo e(old('fleetColor', isset($item) ? $item->fleetColor : '')); ?>" />
					               </div>
					            </div>

					      	</div>
					    </div>
					</div>
					<div class="panel-footer">
						<div class="col-lg-2">
							<button class="btn btn-md btn-block btn-primary" type="submit">Save</button>
						</div>
						<div class="col-lg-2">
							<a href="<?php echo e(route('fleet.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>