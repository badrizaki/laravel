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
					                  	<input type="text" name="prodName" class="form-control" id="prodName" placeholder="Calculator Code" required="" value="<?php echo e(old('prodName', isset($item) ? $item->prodName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               	<label for="customerName" class="col-sm-2 control-label">Customer Name</label>
					               	<div class="col-sm-9">
					                  	<input type="text" name="customerName" class="form-control" id="customerName" placeholder="Calculator Name" required="" value="<?php echo e(old('customerName', isset($item) ? $item->customerName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               <label for="Currency" class="col-sm-2 control-label">Currency</label>
					               <div class="col-sm-4" class="form-control">
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
					                  	<input type="text" name="itemName" class="form-control" id="itemName" placeholder="Item Name" required="" value="<?php echo e(old('itemName', isset($item) ? $item->itemName : '')); ?>" />
					               	</div>
					            </div>

					            <div class="form-group">
					               <label for="Color" class="col-sm-2 control-label">Color</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="color" class="form-control" id="Color" placeholder="Color" required="" value="<?php echo e(old('color', isset($item) ? $item->color : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Exclusive" class="col-sm-2 control-label">Exclusive</label>
					               <div class="col-sm-4" class="form-control">
					                  <select name="exclusive" class="form-control" id="Exclusive" placeholder="Exclusive">
					                     <option value="No">No</option>
					                     <option value="Yes">Yes</option>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Volume" class="col-sm-2 control-label">Volume</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="volume" class="form-control" id="Volume" placeholder="Volume" required="" value="<?php echo e(old('volume', isset($item) ? $item->volume : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Weight" class="col-sm-2 control-label">Weight</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="weight" class="form-control" id="Weight" placeholder="Weight" required="" value="<?php echo e(old('weight', isset($item) ? $item->weight : '')); ?>" />
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
							            <button type="button" id="multiplePackaging_rightAll" class="btn btn-block"><i class="glyphicon glyphicon-forward"></i></button>
							            <button type="button" id="multiplePackaging_rightSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
							            <button type="button" id="multiplePackaging_leftSelected" class="btn btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
							            <button type="button" id="multiplePackaging_leftAll" class="btn btn-block"><i class="glyphicon glyphicon-backward"></i></button>
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
					               <div class="col-sm-9" class="form-control">
					                  <select name="cavity" class="form-control" id="Cavity" placeholder="Cavity">
					                     <?php $__currentLoopData = $lookupTable['cavity']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cavity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					                     <option value="<?php echo e($cavity->cavity); ?>"><?php echo e($cavity->cavity); ?></option>
					                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					                  </select>
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Cycletime" class="col-sm-2 control-label">Cycle time</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="cycleTime" class="form-control" id="Cycletime" placeholder="Cycle time" required="" value="<?php echo e(old('cycleTime', isset($item) ? $item->cycleTime : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="Reject" class="col-sm-2 control-label">Reject%</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="reject" class="form-control" id="Reject" placeholder="Reject%" required="" value="<?php echo e(old('reject', isset($item) ? $item->reject : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="DailyOutput" class="col-sm-2 control-label">Daily Output</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="dailyOutput" class="form-control onlyNumeric" id="DailyOutput" placeholder="Daily Output" required="" value="<?php echo e(old('dailyOutput', isset($item) ? $item->dailyOutput : '')); ?>" />
					               </div>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="DailyOutputRes" class="form-control" id="DailyOutputRes" placeholder="Daily Output Result" readonly="" value="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="MonthlyOutput" class="col-sm-2 control-label">Monthly Output</label>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="monthlyOutput" class="form-control onlyNumeric" id="MonthlyOutput" placeholder="Daily Output" required="" readonly="" value="<?php echo e(old('monthlyOutput', isset($item) ? $item->monthlyOutput : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="monthlyOverhead" class="col-sm-2 control-label">Monthly Overhead</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="monthlyOverhead" class="form-control numberFormat onlyNumeric" id="monthlyOverhead" placeholder="Monthly Overhead" required="" value="<?php echo e(old('monthlyOverhead', isset($item) ? $item->monthlyOverhead : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Invesment</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="mould" class="col-sm-2 control-label">Mould</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="mould" class="form-control numberFormat onlyNumeric" id="mould" placeholder="Mould" required="" value="<?php echo e(old('mould', isset($item) ? $item->mould : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="dp" class="col-sm-2 control-label">DP%</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="dp" class="form-control numberFormat onlyNumeric" id="dp" placeholder="DP%" required="" value="<?php echo e(old('dp', isset($item) ? $item->dp : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="mths" class="col-sm-2 control-label"># Mths</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="mths" class="form-control" id="mths" placeholder="# Mths" required="" value="<?php echo e(old('mths', isset($item) ? $item->mths : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="qty" class="col-sm-2 control-label">Qty/mth</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="qty" class="form-control numberFormat onlyNumeric" id="qty" placeholder="Qty/mth" required="" value="<?php echo e(old('qty', isset($item) ? $item->qty : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Transportation Cost</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="tipeTransport" class="col-sm-2 control-label">Tipe Transport</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="tipeTransport" class="form-control" id="tipeTransport" placeholder="Tipe Transport" required="" value="<?php echo e(old('tipeTransport', isset($item) ? $item->tipeTransport : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="cost" class="col-sm-2 control-label">Cost</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="cost" class="form-control numberFormat onlyNumeric" id="cost" placeholder="Tipe Transport" required="" value="<?php echo e(old('cost', isset($item) ? $item->cost : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="totalPack" class="col-sm-2 control-label">#Pack</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="totalPack" class="form-control numberFormat onlyNumeric" id="totalPack" placeholder="#Pack" required="" value="<?php echo e(old('totalPack', isset($item) ? $item->totalPack : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="costPerPack" class="col-sm-2 control-label">Cost/Pack</label>
					               <div class="col-sm-9" class="form-control">
					                  	<input type="text" name="costPerPack" class="form-control numberFormat onlyNumeric" id="costPerPack" placeholder="Cost/Pack" required="" readonly value="<?php echo e(old('costPerPack', isset($item) ? $item->costPerPack : '')); ?>" />
					               </div>
					            </div>

					            <div class="form-group">
					               	<label class="col-sm-12"><h3>Cost</h3></label>
							    </div>

					            <div class="form-group">
					               <label for="pet" class="col-sm-2 control-label">PET</label>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="pet" class="form-control onlyNumeric" id="pet" placeholder="PET" required="" value="<?php echo e(old('pet', isset($item) ? $item->pet : '')); ?>" />
					               </div>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="PETres" class="form-control" id="PETres" placeholder="PET Result" readonly="" />
					               </div>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="percentagePET" class="form-control" id="percentagePET" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="overhead" class="col-sm-2 control-label">Overhead</label>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="overhead" class="form-control onlyNumeric" id="overhead" placeholder="Overhead" required="" value="<?php echo e(old('overhead', isset($item) ? $item->overhead : '')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="percentageOverhead" class="form-control" id="percentageOverhead" placeholder="%" readonly="" />
					               </div>
					            </div>

					            <div class="form-group">
					               <label for="packaging" class="col-sm-2 control-label">Packaging</label>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="packaging" class="form-control onlyNumeric" id="packaging" placeholder="Packaging" required="" value="<?php echo e(old('packaging', isset($item) ? $item->packaging : '')); ?>" readonly="" />
					               </div>
					               <div class="col-sm-4" class="form-control">
					                  	<input type="text" name="percentagePackaging" class="form-control" id="percentagePackaging" placeholder="%" readonly="" />
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

    $("#DailyOutput").keyup(function (e)
    {
    	var DailyOutput = $('#DailyOutput').val();
    	var Reject = $('#Reject').val();
    	var Cycletime = $('#Cycletime').val();
    	var Cavity = $('#Cavity').val();
    	result = (1 - Reject / 100) * (DailyOutput / Cycletime * Cavity);
	    $('#DailyOutputRes').val($.number(result));
	    $('#MonthlyOutput').val($.number(30 * result));
    });

    $("#cost, #totalPack").keyup(function (e)
    {
    	var cost = $('#cost').val();
    	var totalPack = $('#totalPack').val();
    	result = cost / totalPack;
	    $('#costPerPack').val($.number(result));
    });

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
    });

    $("#monthlyOverhead, #MonthlyOutput").keyup(function (e)
    {
    	// =$B$29/$B$27
    	// 250.000.000 / 4.233.600 = 
    	// MonthlyOverhead / MonthlyOutput
    	var monthlyOverhead = $('#monthlyOverhead').val().replace(',', '').replace('.', '');
    	var MonthlyOutput = $('#MonthlyOutput').val().replace(',', '').replace('.', '');
    	
    	result = monthlyOverhead / MonthlyOutput;
	    $('#overhead').val($.number(result));
    });

    $("#multiplePackaging, #multiplePackaging_to").change(function (e)
    {
    	// =B18+B19
    	// 2.63 + 0.60 = 3.23
    	// CartonBox + Plastik
		var regExp = /\(([^)]+)\)/;
		var result = 0;
		$("#multiplePackaging_to option").each(function()
		{
			var pack = $(this).text();
			var matches = regExp.exec(pack);
			result = (result + matches[1].replace(',', '').replace('.', ''));
		});
    	
	    $('#packaging').val($.number(result));
    });
});

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