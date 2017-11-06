<?php $__env->startSection('title', 'Transport'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
   <p>Hi <?php echo e($name); ?></p>
   <p>Thank you for registering at Transport.</p>
   <p>Below is the company code &amp; username information for you to login:</p>
   <div style="background-color: #F2F2F2; padding-top: 10px; padding-bottom: 10px;">
      <ul>
         <li>Company Code : <?php echo e($companyCode); ?></li>
         <li>Username : <?php echo e($username); ?></li>
      </ul>
   </div>
   <p>We Require you as a carrier to upload some documents written below by active this link.</p>
   <p><?php echo e(url('')); ?></p>
   <p style="text-align: center;">E-Company Profile / Cara penggunaan Transport</p>
   <div style="text-align: center; padding: 0; margin-top: 30px; margin-bottom: 30px;"><a href="#" class="btn" download>Download</a></div>
   <p>Thank you for trusting us annd using our service</p>
   <p>Regards</p>
   <p>Transport Admin Team.</p>
   <table class="table-blue" width="100%">
      <thead bgcolor="#002281" style="color:#ffffff; border: 1px solid #002281;padding-top: 10px; padding-bottom: 10px; border-collapse: collapse;">
         <tr>
            <th width="40%">Dokumen Persyaratan</th>
            <th width="20%">Perorangan</th>
            <th width="20%">CV</th>
            <th width="20%">PT</th>
         </tr>
      </thead>
      <tbody border="1" bordercolor="#002281" style="border: 1px solid #002281;padding-top: 10px; padding-bottom: 10px; border-collapse: separate;">
         <tr>
            <td>Akte Pendirian</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>Akte Perubahan (jika ada)</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>KTP (Pengurus)</td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>Kartu Keluarga</td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"></td>
            <td align="center"></td>
         </tr>
         <tr>
            <td>SK Menkumham</td>
            <td align="center"></td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>SK Domisili</td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>SK Catatan Kepolisian</td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"></td>
            <td align="center"></td>
         </tr>
         <tr>
            <td>NPWP</td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>TDP</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>SIUP</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>Copy STNK</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>Copy Buku KIR</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
         <tr>
            <td>Cover depan rek BCA/Mandiri</td>
            <td align="center"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
            <td align="center"><img src="<?php echo e(url('assets/img/check.png')); ?>"></td>
         </tr>
      </tbody>
   </table>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.email', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>