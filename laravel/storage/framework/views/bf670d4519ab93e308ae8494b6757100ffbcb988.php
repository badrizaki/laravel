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
               <label for="Company" class="col-sm-2 control-label">Company</label>
               <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="Company" placeholder="Company" required="" />
               </div>
            </div>

            <div class="form-group">
               <label class="col-sm-2 control-label"></label>
               <div class="col-sm-10" style="text-align: left;">
                  <div class="checkbox">
                      <label><input type="checkbox" name="isShipper" value="1" <?php echo e(old('isShipper') ? 'checked' : ''); ?>>Shipper</label>
                      &nbsp;&nbsp;&nbsp;
                      <label><input type="checkbox" name="isCarrier" value="1" <?php echo e(old('isCarrier') ? 'checked' : ''); ?>>Carrier</label>
                  </div>
               </div>
            </div>
<!-- 
            <div class="form-group">
               <label for="Email" class="col-sm-2 control-label">Email</label>
               <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="Email" placeholder="Email" />
               </div>
            </div>
 -->
            <div class="form-group">
               <label for="Country" class="col-sm-2 control-label">Country</label>
               <div class="col-sm-10">
                  <input type="text" name="country" class="form-control" id="Country" placeholder="Country" />
               </div>
            </div>

            <div class="form-group">
               <label for="Address" class="col-sm-2 control-label">Address</label>
               <div class="col-sm-10">
                  <textarea name="address" id="address" class="form-control" placeholder="Address"></textarea>
               </div>
            </div>

            <div class="form-group">
               <label for="city" class="col-sm-2 control-label">City</label>
               <div class="col-sm-10">
                  <input type="text" name="city" class="form-control" id="city" placeholder="City" />
               </div>
            </div>

            <div class="form-group">
               <label for="postalCode" class="col-sm-2 control-label">Postal Code</label>
               <div class="col-sm-10">
                  <input type="number" name="postalCode" class="form-control" id="postalCode" placeholder="Postal Code" />
               </div>
            </div>

            <div class="form-group">
               <label for="phone1" class="col-sm-2 control-label">Phone Number</label>
               <div class="col-sm-10">
                  <input type="number" name="phone1" class="form-control" id="phone1" placeholder="Phone Number" />
               </div>
            </div>

            <div class="form-group">
               <label for="Fax" class="col-sm-2 control-label">Fax</label>
               <div class="col-sm-10">
                  <input type="number" name="fax" class="form-control" id="Fax" placeholder="Fax" />
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
      saveManager.submit("form-add", "<?php echo e(route('customerStore')); ?>");
   });
</script>