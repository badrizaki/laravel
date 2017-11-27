<?php $__env->startSection('title', 'PT SOLUSI PRIMA PACKAGING :: Calculator'); ?>

<?php $__env->startSection('content_header'); ?>
<h1>Calculator <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid" id="container-content">
   	<div class="row row-offcanvas row-offcanvas-left">
		<div class="col-xs-12 content">
			<div class="panel panel-primary">
				<div class="panel-heading">Calculator <?php echo e(($id == 0 ? 'Add' : 'Update')); ?></div>
				<form method="POST" class="form-horizontal" action="<?php echo e(url(route('calculator.index') . ($id == 0 ? '' : '/' . $id))); ?>" enctype="multipart/form-data">
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
							<div class="col-lg-12">

					            <div class="form-group">
					               	<label for="prodName" class="col-sm-2 control-label">Prod Name</label>
					               	<div class="col-sm-9">
					                  	<input type="text" name="prodName" class="form-control" id="prodName" placeholder="Prod Name" value="<?php echo e(old('prodName', isset($item) ? $item->prodName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="customerName" class="col-sm-2 control-label">Customer Name</label>
					               	<div class="col-sm-9">
					                  	<input type="text" name="customerName" class="form-control" id="customerName" placeholder="Calculator Name" value="<?php echo e(old('customerName', isset($item) ? $item->customerName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               <label for="Currency" class="col-sm-2 control-label">Currency</label>
					               <div class="col-sm-4">
					                  <select name="currencyId" class="form-control" id="Currency" placeholder="Currency">
					                     <?php $__currentLoopData = $lookupTable['currency']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($currency->currencyId); ?>"><?php echo e($currency->currencyCode); ?> to IDR (<?php echo e(number_format($currency->sell, 0, '.', ',')); ?>)</option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-2 control-label">Raw Material</label>
							        <div class="col-sm-4">

										<?php $__currentLoopData = $lookupTable['material']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php $idMaterial = explode(' ', $material->materialName); ?>
										<input type="hidden" name="dosage[]" id="<?php echo e($idMaterial[0]); ?>-dosage" value="<?php echo e($material->dosage); ?>">
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							            <select name="materialIdFrom[]" id="materialIdSelect" class="form-control" size="8" multiple="multiple">
											<?php $__currentLoopData = $lookupTable['material']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $material): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($material->materialId); ?>"><?php echo e($material->materialName); ?> - <?php echo e('(' . number_format($material->price, 0, '.', ',') . ') ' . $material->unitPrice); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							            </select>
							        </div>
							        
							        <div class="col-sm-1">
							            <button type="button" id="materialIdSelect_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
							            <button type="button" id="materialIdSelect_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
							            <button type="button" id="materialIdSelect_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
							            <button type="button" id="materialIdSelect_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
							        </div>
							        
							        <div class="col-sm-4">
							            <select name="materialId[]" id="materialIdSelect_to" class="form-control" size="8" multiple="multiple"></select>
							        </div>
							    </div>

					            <div class="form-group">
					               	<label class="col-sm-2 control-label"><h3>Product</h3></label>
							    </div>
					            <div class="form-group">
					               	<label for="itemName" class="col-sm-2 control-label">Item Name</label>
					               	<div class="col-sm-9">
					                  	<input type="text" name="itemName" class="form-control" id="itemName" placeholder="Item Name" value="<?php echo e(old('itemName', isset($item) ? $item->itemName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               <label for="Color" class="col-sm-2 control-label">Color</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="color" class="form-control" id="Color" placeholder="Color" value="<?php echo e(old('color', isset($item) ? $item->color : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Exclusive" class="col-sm-2 control-label">Exclusive</label>
					               <div class="col-sm-4">
					                  <select name="exclusive" class="form-control" id="Exclusive" placeholder="Exclusive">
					                     <option value="No">No</option>
					                     <option value="Yes">Yes</option>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Volume" class="col-sm-2 control-label">Volume</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="volume" class="form-control" id="Volume" placeholder="Volume" value="<?php echo e(old('volume', isset($item) ? $item->volume : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Weight" class="col-sm-2 control-label">Weight</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="weight" class="form-control" id="Weight" placeholder="Weight" value="<?php echo e(old('weight', isset($item) ? $item->weight : '')); ?>" />
					               </div>
					            </div>

					            <div class="divider"><br><br><br></div>
					            <div class="form-group">
					               	<label for="packagingId" class="col-sm-2 control-label">Packaging (per Pack)</label>
							        <div class="col-sm-4">
							            <select name="packagingIdFrom[]" id="multiplePackaging" class="form-control" size="8" multiple="multiple">
											<?php $__currentLoopData = $lookupTable['packaging']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $packaging): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($packaging->packagingId); ?>"><?php echo e($packaging->packagingName); ?> - <?php echo e('(' . number_format($packaging->price, 2, '.', ',') . ') ' . $packaging->unitPrice); ?></option>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							            </select>
							        </div>
							        
							        <div class="col-sm-1">
							            <button type="button" id="multiplePackaging_rightAll" class="btn btn-block btn-packaging-slc"><i class="glyphicon glyphicon-forward"></i></button>
							            <button type="button" id="multiplePackaging_rightSelected" class="btn btn-block btn-packaging-slc"><i class="glyphicon glyphicon-chevron-right"></i></button>
							            <button type="button" id="multiplePackaging_leftSelected" class="btn btn-block btn-packaging-slc"><i class="glyphicon glyphicon-chevron-left"></i></button>
							            <button type="button" id="multiplePackaging_leftAll" class="btn btn-block btn-packaging-slc"><i class="glyphicon glyphicon-backward"></i></button>
							        </div>
							        
							        <div class="col-sm-4">
							            <select name="packagingId[]" id="multiplePackaging_to" class="form-control" size="8" multiple="multiple"></select>
							        </div>
							    </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Production Capacity</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="Cavity" class="col-sm-2 control-label">Cavity</label>
					               <div class="col-sm-9">
					                  <select name="cavity" class="form-control" id="Cavity" placeholder="Cavity">
					                     <?php $__currentLoopData = $lookupTable['cavity']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cavity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($cavity->cavity); ?>"><?php echo e($cavity->cavity); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Cycletime" class="col-sm-2 control-label">Cycle time</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="cycleTime" class="form-control" id="Cycletime" placeholder="Cycle time" value="<?php echo e(old('cycleTime', isset($item) ? $item->cycleTime : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Reject" class="col-sm-2 control-label">Reject%</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="reject" class="form-control" id="Reject" placeholder="Reject%" value="<?php echo e(old('reject', isset($item) ? $item->reject : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="DailyOutput" class="col-sm-2 control-label">Daily Output</label>
					               <div class="col-sm-5">
					                  	<input type="text" name="dailyOutput" class="form-control onlyNumeric" id="DailyOutput" placeholder="Daily Output" value="<?php echo e(old('dailyOutput', isset($item) ? $item->dailyOutput : '')); ?>" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="DailyOutputRes" class="form-control" id="DailyOutputRes" placeholder="Daily Output Result" readonly="" value="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="MonthlyOutput" class="col-sm-2 control-label">Monthly Output</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="monthlyOutput" class="form-control onlyNumeric" id="MonthlyOutput" placeholder="Monthly Output" readonly="" value="<?php echo e(old('monthlyOutput', isset($item) ? $item->monthlyOutput : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="monthlyOverhead" class="col-sm-2 control-label">Monthly Overhead</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="monthlyOverhead" class="form-control numberFormat onlyNumeric" id="monthlyOverhead" placeholder="Monthly Overhead" value="<?php echo e(old('monthlyOverhead', isset($item) ? $item->monthlyOverhead : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Invesment</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="mould" class="col-sm-2 control-label">Mould</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="mould" class="form-control numberFormat onlyNumeric" id="mould" placeholder="Mould" value="<?php echo e(old('mould', isset($item) ? $item->mould : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="dp" class="col-sm-2 control-label">DP%</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="dp" class="form-control numberFormat onlyNumeric" id="dp" placeholder="DP%" value="<?php echo e(old('dp', isset($item) ? $item->dp : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="mths" class="col-sm-2 control-label"># Mths</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="mths" class="form-control" id="mths" placeholder="# Mths" value="<?php echo e(old('mths', isset($item) ? $item->mths : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="qty" class="col-sm-2 control-label">Qty/mth</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="qty" class="form-control numberFormat onlyNumeric" id="qty" placeholder="Qty/mth" value="<?php echo e(old('qty', isset($item) ? $item->qty : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Transportation Cost</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="tipeTransport" class="col-sm-2 control-label">Tipe Transport</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="tipeTransport" class="form-control" id="tipeTransport" placeholder="Tipe Transport" value="<?php echo e(old('tipeTransport', isset($item) ? $item->tipeTransport : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="cost" class="col-sm-2 control-label">Cost</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="cost" class="form-control numberFormat onlyNumeric" id="cost" placeholder="Tipe Transport" value="<?php echo e(old('cost', isset($item) ? $item->cost : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="totalPack" class="col-sm-2 control-label">#Pack</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="totalPack" class="form-control numberFormat onlyNumeric" id="totalPack" placeholder="#Pack" value="<?php echo e(old('totalPack', isset($item) ? $item->totalPack : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="costPerPack" class="col-sm-2 control-label">Cost/Pack</label>
					               <div class="col-sm-9">
					                  	<input type="text" name="costPerPack" class="form-control numberFormat onlyNumeric" id="costPerPack" placeholder="Cost/Pack" readonly value="<?php echo e(old('costPerPack', isset($item) ? $item->costPerPack : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Cost</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="pet" class="col-sm-2 control-label">PET</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="pet" class="form-control onlyNumeric" id="pet" placeholder="PET" value="<?php echo e(old('pet', isset($item) ? $item->pet : '0')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="pet" class="col-sm-2 control-label"></label>
					               <div class="col-sm-4">
					                  	<input type="text" name="PETres" class="form-control" id="PETres" placeholder="PET Result" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentagePET" class="form-control" id="percentagePET" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="overhead" class="col-sm-2 control-label">Overhead</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="overhead" class="form-control onlyNumeric" id="overhead" placeholder="Overhead" value="<?php echo e(old('overhead', isset($item) ? $item->overhead : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentageOverhead" class="form-control" id="percentageOverhead" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="packaging" class="col-sm-2 control-label">Packaging</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="packaging" class="form-control onlyNumeric" id="packaging" placeholder="Packaging" value="<?php echo e(old('packaging', isset($item) ? $item->packaging : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentagePackaging" class="form-control" id="percentagePackaging" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="shipment" class="col-sm-2 control-label">Shipment</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="shipment" class="form-control onlyNumeric" id="shipment" placeholder="Shipment" value="<?php echo e(old('shipment', isset($item) ? $item->shipment : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentageShipment" class="form-control" id="percentageShipment" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="amortz" class="col-sm-2 control-label">Amortz.</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="amortz" class="form-control onlyNumeric" id="amortz" placeholder="Amortz" value="<?php echo e(old('amortz', isset($item) ? $item->amortz : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentageAmortz" class="form-control" id="percentageAmortz" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="pigment" class="col-sm-2 control-label">Pigment</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="pigment" class="form-control onlyNumeric" id="pigment" placeholder="Pigment" value="<?php echo e(old('pigment', isset($item) ? $item->pigment : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentagePigment" class="form-control" id="percentagePigment" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="totalCost" class="col-sm-2 control-label">Cost</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="totalCost" class="form-control onlyNumeric" id="totalCost" placeholder="Cost" value="<?php echo e(old('totalCost', isset($item) ? $item->totalCost : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentageTotalCost" class="form-control" id="percentageTotalCost" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="profit" class="col-sm-2 control-label">Profit</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="profit" class="form-control onlyNumeric" id="profit" placeholder="Profit" value="<?php echo e(old('profit', isset($item) ? $item->profit : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentageProfit" class="form-control" id="percentageProfit" placeholder="%" value="<?php echo e(old('percentageProfit', isset($item) ? $item->percentageProfit : '0')); ?>"  />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="btlPrice" class="col-sm-2 control-label">Btl Price</label>
					               <div class="col-sm-8">
					                  	<input type="text" name="btlPrice" class="form-control onlyNumeric" id="btlPrice" placeholder="Btl Price" value="<?php echo e(old('btlPrice', isset($item) ? $item->btlPrice : '0')); ?>" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Aux</h3></label>
							    </div>
					            <div class="form-group">
					               <label for="closure" class="col-sm-2 control-label">Closure</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="closure" class="form-control onlyNumeric" id="closure" placeholder="Closure" value="<?php echo e(old('closure', isset($item) ? $item->closure : '0')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="plug" class="col-sm-2 control-label">Plug</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="plug" class="form-control onlyNumeric" id="plug" placeholder="Plug" value="<?php echo e(old('plug', isset($item) ? $item->plug : '0')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="handle" class="col-sm-2 control-label">Handle</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="handle" class="form-control onlyNumeric" id="handle" placeholder="Handle" value="<?php echo e(old('handle', isset($item) ? $item->handle : '0')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="hanger" class="col-sm-2 control-label">Hanger</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="hanger" class="form-control onlyNumeric" id="hanger" placeholder="Hanger" value="<?php echo e(old('hanger', isset($item) ? $item->hanger : '0')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="others" class="col-sm-2 control-label">Others</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="others" class="form-control onlyNumeric" id="others" placeholder="Others" value="<?php echo e(old('others', isset($item) ? $item->others : '0')); ?>" />
					               </div>
					            </div>
					            <div class="form-group">
					               <label for="auxPrice" class="col-sm-2 control-label">Aux Price</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="auxPrice" class="form-control onlyNumeric" id="auxPrice" placeholder="Aux Price" value="<?php echo e(old('auxPrice', isset($item) ? $item->auxPrice : '0')); ?>" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="btlAuxPrice" class="col-sm-2 control-label">Tot. Btl + Aux</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="btlAuxPrice" class="form-control onlyNumeric" id="btlAuxPrice" placeholder="Tot. Btl + Aux" value="<?php echo e(old('btlAuxPrice', isset($item) ? $item->btlAuxPrice : '0')); ?>" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="ppn" class="col-sm-2 control-label">PPN</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="ppn" class="form-control onlyNumeric" id="ppn" placeholder="PPN" value="<?php echo e(old('ppn', isset($item) ? $item->ppn : '0')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4">
					                  	<input type="text" name="percentagePPN" class="form-control onlyNumeric" id="percentagePPN" placeholder="%" value="<?php echo e(old('percentagePPN', isset($item) ? $item->percentagePPN : '0')); ?>"  />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="totalFinalPrice" class="col-sm-2 control-label">Price w/ PPN</label>
					               <div class="col-sm-4">
					                  	<input type="text" name="totalFinalPrice" class="form-control onlyNumeric" id="totalFinalPrice" placeholder="Price w/ PPN" value="<?php echo e(old('totalFinalPrice', isset($item) ? $item->totalFinalPrice : '0')); ?>" readonly="" />
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
							<a href="<?php echo e(route('calculator.index')); ?>" class="btn btn-md btn-block btn-default">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
				</form>
			</div>
      	</div>
  	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="<?php echo e(url('assets/components/multiselect/dist/js/multiselect.min.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
<script src="<?php echo e(url('assets/components/jquery-number/jquery.number.min.js')); ?>" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
jQuery(document).ready(function($)
{    
    // $('.numberFormat').number( true );

    $('#materialIdSelect').multiselect({
        search: {
            left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
        },
        fireSearch: function(value) {
            return value.length > 3;
        }
    });
    $('#multiplePackaging').multiselect({
        search: {
            left: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
            right: '<input type="text" name="q" class="form-control" placeholder="Search..." />',
        },
        fireSearch: function(value) {
            return value.length > 3;
        }
    });

    // MONTHLY OUTPUT
    $("#DailyOutput").keyup(function (e)
    {
    	var DailyOutput = $('#DailyOutput').val();
    	var Reject = $('#Reject').val();
    	var Cycletime = $('#Cycletime').val();
    	var Cavity = $('#Cavity').val();
    	result = (1 - Reject / 100) * (DailyOutput / Cycletime * Cavity);
	    $('#DailyOutputRes').val($.number(result));
	    $('#MonthlyOutput').val($.number(30 * result));

	    totalCost();
    });

    // SHIPMENT
    $("#cost, #totalPack").keyup(function (e)
    {
    	var cost = $('#cost').val();
    	var totalPack = $('#totalPack').val();
    	result = cost / totalPack;
	    $('#costPerPack').val($.number(result));

	    // SHIPMENT CALC
	    shipment = parseFloat(cost) / (parseFloat(totalPack) * 2000);
	    $('#shipment').val($.number(shipment, 2));

	    totalCost();
    });

    // PET
    $("#pet").keyup(function (e)
    {
    	// =($B$16*(1+$B$25))*($B$7*1.1*$B$5/1000000)
    	// 4.1     2     1050     1000000 = 6521
    	var Weight = $('#Weight').val();
    	var val1 = 1;
    	var Reject = $('#Reject').val();
    	var pet = getPricePet(); // GET PET FROM MULTIPLE
    	var val2 = 1.1;
    	var currency = getCurrency();
    	var inputPET = $('#pet').val();

    	result = (Weight * (val1 + Reject / 100)) * (pet * val2 * currency / inputPET);
	    $('#PETres').val($.number(result, 2));

	    totalCost();
    });

    // OVERHEAD
    $("#monthlyOverhead, #MonthlyOutput").keyup(function (e)
    {
    	// =$B$29/$B$27
    	// 250.000.000 / 4.233.600 = 
    	// MonthlyOverhead / MonthlyOutput
    	var monthlyOverhead = $('#monthlyOverhead').val().replace(',', '').replace('.', '');
    	var MonthlyOutput = $('#MonthlyOutput').val().replace(',', '').replace('.', '');
    	
    	result = monthlyOverhead / MonthlyOutput;
	    $('#overhead').val($.number(result, 2));

	    totalCost();
    });

    // PACKAGING
    $(".btn-packaging-slc").click(function (e)
    {
		// =B18+B19
		// 2.63 + 0.60 = 3.23
		// CartonBox + Plastik
		var result = 0;
		var regExp = /\(([^)]+)\)/;
		setTimeout(function()
		{
			$("#multiplePackaging_to option").each(function()
			{
				var pack = $(this).text();
				var matches = regExp.exec(pack);
				result = (parseFloat(result) + parseFloat(matches[1].replace(',', '.'), 10));
				// result = (result + matches[1].replace(',', '').replace('.', ''));
			});
	    	$('#packaging').val($.number(result, 2));

	    	totalCost();
		}, 1000);
	});
    $("#multiplePackaging_to, #multiplePackaging").bind("change keyup", function(event)
    {
		// =B18+B19
		// 2.63 + 0.60 = 3.23
		// CartonBox + Plastik
		var result = 0;
		var regExp = /\(([^)]+)\)/;
		setTimeout(function()
		{
			$("#multiplePackaging_to option").each(function()
			{
				var pack = $(this).text();
				var matches = regExp.exec(pack);
				result = (parseFloat(result) + parseFloat(matches[1].replace(',', '.'), 10));
				// result = (result + matches[1].replace(',', '').replace('.', ''));
			});
	    	$('#packaging').val($.number(result, 2));

	    	totalCost();
		}, 1000);
	});

	// PIGMENT COST
    $("#Reject").keyup(function (e)
    {
    	// =($B$10*($B$16*(1+$B$25)))*($B$9*$B$5/1000)
    	// ((dosagePigment / 100) * (weight * (1 + (Reject / 100)))) * (pricePigment * currency / 1000)
    	var dosagePigment = parseFloat($('#Pigment-dosage').val()) / 100;
    	var weight = $('#Weight').val();
    	var val1 = 1;
    	var Reject = parseFloat($('#Reject').val()) / 100;
    	var pricePigment = getPricePigment();
    	var currency = parseFloat(getCurrency());
    	var val2 = 1000;
    	var resultPigment = (dosagePigment*(weight*(val1+Reject)))*(pricePigment*currency/val2)
    	$('#pigment').val($.number(resultPigment, 2));

    	totalCost();
	});
	
	// COST/TOTAL COST
    $("#pet, #Reject").keyup(function (e)
    {
    	totalCost();
    });

    // Amortz.
    $("#qty").keyup(function (e)
    {
    	// =SLN(((1-$B$32)*$B$31),0,$B$34)/$B$35
    	// (((1-$B$32)*$B$31) / $B$34) / $B$35
    	// (((1-dp)*mould) / mths) / qty
    	var val1 = 1;
    	var dp = parseFloat($("#dp").val()) / 100;	
    	var mould = parseFloat($("#mould").val());
    	var mths = parseFloat($("#mths").val());
    	var qty = parseFloat($("#qty").val());
    	var resultAmortz = (((val1 - dp) * mould) / mths) / qty;
    	$('#amortz').val($.number(resultAmortz, 2));

    	totalCost();
    });

    // PROFIT
    $("#percentageProfit").keyup(function (e)
    {
    	var totalCostRes = parseFloat($("#totalCost").val());	
    	var percentageProfit = parseFloat($("#percentageProfit").val()) / 100;
    	var resultProfit = totalCostRes * percentageProfit;
    	$('#profit').val($.number(resultProfit, 2));

    	totalCost();
    });

    // ALL INPUT TEXT
    $(".onlyNumeric").keyup(function (e)
    {
    	totalCost();
    });
});

function totalCost()
{
	var PET = parseFloat($('#PETres').val());
	var Overhead = parseFloat($('#overhead').val());
	var Packaging = parseFloat($('#packaging').val());
	var Shipment = parseFloat($('#shipment').val());
	var Amortz = parseFloat($('#amortz').val());
	var Pigment = parseFloat($('#pigment').val());
	var resultCost = (PET + Overhead + Packaging + Shipment + Amortz + Pigment);

	console.log('PET = ' + PET + "\n");
	console.log('Overhead = ' + Overhead + "\n");
	console.log('Packaging = ' + Packaging + "\n");
	console.log('Shipment = ' + Shipment + "\n");
	console.log('Amortz = ' + Amortz + "\n");
	console.log('Pigment = ' + Pigment + "\n");
	
	$('#totalCost').val($.number(resultCost, 2));

	// btl Price
	var profit = parseFloat($('#profit').val());
	resBtlPrice = resultCost + profit;
	$('#btlPrice').val($.number(resBtlPrice, 2));

	// cost PERCENTAGE
	var percentagePET = parseFloat(PET) / parseFloat(resultCost) * 100;
	$('#percentagePET').val($.number(percentagePET));
	var percentageOverhead = parseFloat(Overhead) / parseFloat(resultCost) * 100;
	$('#percentageOverhead').val($.number(percentageOverhead));
	var percentagePackaging = parseFloat(Packaging) / parseFloat(resultCost) * 100;
	$('#percentagePackaging').val($.number(percentagePackaging));
	var percentageShipment = parseFloat(Shipment) / parseFloat(resultCost) * 100;
	$('#percentageShipment').val($.number(percentageShipment));
	var percentageAmortz = parseFloat(Amortz) / parseFloat(resultCost) * 100;
	$('#percentageAmortz').val($.number(percentageAmortz));
	var percentagePigment = parseFloat(Pigment) / parseFloat(resultCost) * 100;
	$('#percentagePigment').val($.number(percentagePigment));
	$('#percentageTotalCost').val($.number(100));

	// AUX price =sum(closure:others)
	var closure = parseFloat($('#closure').val());
	var plug = parseFloat($('#plug').val());
	var handle = parseFloat($('#handle').val());
	var hanger = parseFloat($('#hanger').val());
	var others = parseFloat($('#others').val());
	var resAuxPrice = closure + plug + handle + hanger + others;
	$('#auxPrice').val($.number(resAuxPrice, 2));
	
	// Btl + aux price
	var resBtlAuxPrice = resBtlPrice + resAuxPrice;
	$('#btlAuxPrice').val($.number(resBtlAuxPrice, 2));

	// PPN
	var percentagePPN = parseFloat($('#percentagePPN').val()) / 100;
	var resPPN = resBtlAuxPrice * percentagePPN;
	$('#ppn').val($.number(resPPN, 2));

	// Price w/ PPN
	var resTotalFinalPrice = resBtlAuxPrice + resPPN;
	$('#totalFinalPrice').val($.number(resTotalFinalPrice, 2));
}

function getPricePet()
{
	var regExp = /\(([^)]+)\)/;
	var price = '';
	$("#materialIdSelect_to option").each(function()
	{
		var pet = $(this).text();
		if (pet.indexOf("PET") >= 0) 
		{	
			var matches = regExp.exec(pet);
			price = matches[1].replace(',', '').replace('.', '');
			return price;
		}
	});
	return price;
}

function getPricePigment()
{
	var regExp = /\(([^)]+)\)/;
	var price = '';
	$("#materialIdSelect_to option").each(function()
	{
		var pigment = $(this).text();
		if (pigment.indexOf("Pigment") >= 0) 
		{	
			var matches = regExp.exec(pigment);
			price = matches[1].replace(',', '').replace('.', '');
			return price;
		}
	});
	return price;
}

function getCurrency()
{
	var regExp = /\(([^)]+)\)/;
	var price = $("#Currency option:selected").text();
	var matches = regExp.exec(price);
	price = matches[1].replace(',', '').replace('.', '');
	return price;
}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>