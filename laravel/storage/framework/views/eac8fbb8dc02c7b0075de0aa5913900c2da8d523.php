<style>
.modal{ z-index: 20; }
.modal-backdrop{ z-index: 10; }​
</style>
<div class="modal-dialog modal-lg">
   <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         <h4 class="modal-title" id="myLargeModalLabel">Information</h4>
      </div>
      <form action="" class="form-horizontal" id="form-add" name="form-add" method="PUT" role="form" enctype="multipart/form-data">
         <?php echo e(csrf_field()); ?>

         <div class="modal-body">
            <div id="alert" class="notif"></div>
            <div class="form-group">
               <label for="Name" class="col-sm-2 control-label">Name</label>
               <div class="col-sm-10">
                  <input type="text" name="zoneName" class="form-control" id="Name" placeholder="Name" required="" />
               </div>
            </div>
            <div class="form-group">
               <label for="province" class="col-sm-2 control-label">Province</label>
               <div class="col-sm-4" class="form-control">
                  <select name="provinceId" class="form-control" id="province" placeholder="Province" onchange="select.load(this, '<?php echo e(route('cityByProvince')); ?>', 'container-city');" data-token="<?php echo e(csrf_token()); ?>" data-selectedid="" required="required">
                     <option value="">Select Province</option>
                     <?php $__currentLoopData = $provinces; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $province): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <option value="<?php echo e($province->provinceId); ?>"><?php echo e($province->provinceName); ?></option>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
               </div>
            </div>
            <div class="form-group">
               <label for="city" class="col-sm-2 control-label">City</label>
               <div class="col-sm-4" class="form-control" id="container-city">
                  <select name="provinceId" class="form-control" id="city" placeholder="City" required="required">
                  </select>
               </div>
            </div>

            <div class="form-group">
               <label for="Address" class="col-sm-2 control-label">Address</label>
               <div class="col-sm-10">
                  <input type="text" name="address" class="form-control" id="Address" placeholder="Address" required="" />
               </div>
            </div>
            <div class="form-group">
               <label for="Longitude" class="col-sm-2 control-label">Longitude</label>
               <div class="col-sm-4">
                  <input type="number" name="longitude" class="form-control" id="Longitude" placeholder="Longitude" value="0" readonly="" required="" />
               </div>
               <label for="Latitude" class="col-sm-2 control-label">Latitude</label>
               <div class="col-sm-4">
                  <input type="number" name="latitude" class="form-control" id="Latitude" placeholder="Latitude" value="0" readonly="" required="" />
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-info waves-effect text-left"> Save </button>
            <button type="button" class="btn btn-danger waves-effect text-left" data-dismiss="modal">Close</button>
         </div>
      </form>
   </div>
</div>
<script src="<?php echo e(url('assets/components/jquery.confirm/jquery.confirm.js')); ?>"></script>
<script src="<?php echo e(url('assets/js/loadingoverlay.min.js')); ?>"></script>
<script>
   $(document).ready(function()
   {
      initAutocomplete();
      saveManager.submit("form-add", "<?php echo e(route('zoneStore')); ?>");
   });

   var placeSearch, autocomplete;
   function initAutocomplete()
   {
      autocomplete = new google.maps.places.Autocomplete((document.getElementById('Address')), {
         types: ['geocode'],
         componentRestrictions: { country: "id" },
      });
      autocomplete.addListener('place_changed', fillInAddress);
   }
   function fillInAddress()
   {
      var place = autocomplete.getPlace();
      for (var i = 0; i < place.address_components.length; i++)
      {
         var addressType = place.address_components[i].types[0];

         document.getElementById('Latitude').value = place.geometry.location.lat();
         document.getElementById('Longitude').value = place.geometry.location.lng();

         /*if (componentForm[addressType])
         {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
         }*/
      }
   }

</script>