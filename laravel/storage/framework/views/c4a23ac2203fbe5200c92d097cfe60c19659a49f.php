<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   <meta name="format-detection" content="telephone=no" />
   <title><?php echo $__env->yieldContent('title'); ?></title>
   <style type="text/css">
      /* RESET STYLES */
      html { background-color:#ECFCFC; margin:0; padding:0; }
      body, #bodyTable, #bodyCell, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;font-family:Helvetica, Arial, "Lucida Grande", sans-serif;}
      table{border-collapse:collapse;}
      table[id=bodyTable] {width:100%!important;margin:auto;max-width:740px !important;color:#7A7A7A;font-weight:normal;}
      img, a img{border:0; outline:none; text-decoration:none;height:auto; line-height:100%;}
      a {text-decoration:none !important;border-bottom: 1px solid;}
      h1, h2, h3, h4, h5, h6{color:#5F5F5F; font-weight:normal; font-family:Helvetica; font-size:20px; line-height:125%; text-align:Left; letter-spacing:normal;margin-top:0;margin-right:0;margin-bottom:10px;margin-left:0;padding-top:0;padding-bottom:0;padding-left:0;padding-right:0;}
      /* CLIENT-SPECIFIC STYLES */
      .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail/Outlook.com to display emails at full width. */
      .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div{line-height:100%;} /* Force Hotmail/Outlook.com to display line heights normally. */
      table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up. */
      #outlook a{padding:0;} /* Force Outlook 2007 and up to provide a "view in browser" message. */
      img{-ms-interpolation-mode: bicubic;display:block;outline:none; text-decoration:none;} /* Force IE to smoothly render resized images. */
      body, table, td, p, a, li, blockquote{-ms-text-size-adjust:100%; -webkit-text-size-adjust:100%; font-weight:normal!important;} /* Prevent Windows- and Webkit-based mobile platforms from changing declared text sizes. */
      .ExternalClass td[class="ecxflexibleContainerBox"] h3 {padding-top: 10px !important;} /* Force hotmail to push 2-grid sub headers down */
      /* ========== Page Styles ========== */
      h1{display:block;font-size:26px;font-style:normal;font-weight:normal;line-height:100%;}
      h2{display:block;font-size:20px;font-style:normal;font-weight:normal;line-height:120%;}
      h3{display:block;font-size:17px;font-style:normal;font-weight:normal;line-height:110%;}
      h4{display:block;font-size:18px;font-style:italic;font-weight:normal;line-height:100%;}
      .flexibleImage{height:auto;}
      .linkRemoveBorder{border-bottom:0 !important;}
      table[class=flexibleContainerCellDivider] {padding-bottom:0 !important;padding-top:0 !important;}
      body, #bodyTable{background-color:#ECFCFC;}
      #emailHeader{background-color:#ECFCFC;}
      #emailBody{background-color:#FFFFFF;}
      #emailFooter{background-color:#ECFCFC;}
      .nestedContainer{background-color:#F8F8F8; border:1px solid #CCCCCC;}
      .emailButton{background-color:#205478; border-collapse:separate;}
      .buttonContent{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; line-height:100%; padding:15px; text-align:center; background-color: #40DEDF;}
      .btn{color:#FFFFFF; font-family:Helvetica; font-size:18px; font-weight:bold; padding:15px; text-align:center; background-color: #40DEDF;}
      /* .buttonContent a{color:#FFFFFF; display:block; text-decoration:none!important; border:0!important;} */
      .emailCalendar{background-color:#FFFFFF; border:1px solid #CCCCCC;}
      .emailCalendarMonth{background-color:#205478; color:#FFFFFF; font-family:Helvetica, Arial, sans-serif; font-size:16px; font-weight:bold; padding-top:10px; padding-bottom:10px; text-align:center;}
      .emailCalendarDay{color:#205478; font-family:Helvetica, Arial, sans-serif; font-size:60px; font-weight:bold; line-height:100%; padding-top:20px; padding-bottom:20px; text-align:center;}
      .imageContentText {margin-top: 10px;line-height:0;}
      .imageContentText a {line-height:0;}
      #invisibleIntroduction {display:none !important;} /* Removing the introduction text from the view */
      /*FRAMEWORK HACKS & OVERRIDES */
      span[class=ios-color-hack] a {color:#275100!important;text-decoration:none!important;} /* Remove all link colors in IOS (below are duplicates based on the color preference) */
      span[class=ios-color-hack2] a {color:#205478!important;text-decoration:none!important;}
      span[class=ios-color-hack3] a {color:#8B8B8B!important;text-decoration:none!important;}
      
      .a[href^="tel"], a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:none!important;cursor:default!important;}
      .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {text-decoration:none!important;color:#606060!important;pointer-events:auto!important;cursor:default!important;}
      table.container { margin-top: 1%; margin-bottom: 1%; padding: 20px; }
      table[class=table-blue], .table-blue { border: 1px solid #002281; }
      table[class=table-blue] thead, .table-blue thead { background-color: #002281; text-align: center; color: #ffffff; }
      table[class=table-blue] thead th, .table-blue thead th { padding-top: 10px; padding-bottom: 10px; }
      table[class=table-blue] tbody td, .table-blue tbody td { border: 1px solid #002281; padding: 10px; }
      /* MOBILE STYLES */
      @media  only screen and (max-width: 480px){
         /*////// CLIENT-SPECIFIC STYLES //////*/
         body{width:100% !important; min-width:100% !important;} /* Force iOS Mail to render the email at full width. */
         /* FRAMEWORK STYLES */
         /*td[class="textContent"], td[class="flexibleContainerCell"] { width: 100%; padding-left: 10px !important; padding-right: 10px !important; }*/
         table[id="emailHeader"],
         table[id="emailBody"],
         table[id="emailFooter"],
         table[class="flexibleContainer"],
         td[class="flexibleContainerCell"] {width:100% !important;}
         td[class="flexibleContainerBox"], td[class="flexibleContainerBox"] table {display: block;width: 100%;text-align: left;}
         td[class="imageContent"] img {height:auto !important; width:100% !important; max-width:100% !important; }
         img[class="flexibleImage"]{height:auto !important; width:100% !important;max-width:100% !important;}
         img[class="flexibleImageSmall"]{height:auto !important; width:auto !important;}
         
         table[class="flexibleContainerBoxNext"]{padding-top: 10px !important;}
         
         table[class="emailButton"]{width:100% !important;}
         td[class="buttonContent"]{padding:0 !important;}
         td[class="buttonContent"] a{padding:15px !important;}
      }
      /*=====================================================*/
      @media  only screen and (-webkit-device-pixel-ratio:.75){
         /* Put CSS for low density (ldpi) Android layouts in here */
      }
      @media  only screen and (-webkit-device-pixel-ratio:1){
         /* Put CSS for medium density (mdpi) Android layouts in here */
      }
      @media  only screen and (-webkit-device-pixel-ratio:1.5){
         /* Put CSS for high density (hdpi) Android layouts in here */
      }
      @media  only screen and (min-device-width : 320px) and (max-device-width:740px) {
         table.container { width: 95% !important; margin-top: 5%; margin-bottom: 5%; }
      }
      @media  only screen and (min-width : 320px) and (max-width:740px) {
         table.container { width: 95% !important; }
      }
      <?php echo $__env->yieldContent('css'); ?>
   </style>
   <!--[if mso 12]>
      <style type="text/css">
         .flexibleContainer{display:block !important; width:100% !important;}
      </style>
   <![endif]-->
   <!--[if mso 14]>
      <style type="text/css">
         .flexibleContainer{display:block !important; width:100% !important;}
      </style>
   <![endif]-->
</head>
<body bgcolor="#ECFCFC" leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
   <center style="background-color:#ECFCFC;">
      <table class="container" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" style="table-layout: fixed; border-bottom: 5px solid #002281;">
         <tr>
            <td align="center" valign="top" id="bodyCell">
               <table bgcolor="#FFFFFF"  border="0" cellpadding="40%" cellspacing="0" width="100%" id="emailBody">
                  <tr mc:hideable>
                     <td align="center" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                           <tr>
                              <td align="center" valign="top">
                                 <table border="0" cellpadding="0" cellspacing="0" width="100%" class="flexibleContainer">
                                    <tr>
                                       <td valign="top" width="100%" class="flexibleContainerCell">
                                          <table align="left" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-bottom: 5px solid #002583;">
                                             <tr>
                                                <td align="center" create-editable-content-areas-with-mailchimps-template-language="2" valign="middle" class="flexibleContainerBox">
                                                   <table border="0" cellpadding="20" cellspacing="0" width="100%" style="max-width:100%; margin-bottom: 20px;">
                                                      <tr>
                                                         <td align="left" class="textContent">
                                                            <div>
                                                               <a href="<?php echo e(url('')); ?>"><img src="<?php echo e(url('assets/img/logo-2.png')); ?>" width="150px"></a>
                                                               <br>
                                                               <span style="color: #55D6DB; font-weight: bold;">Email Notification</span>
                                                            </div>
                                                         </td>
                                                      </tr>
                                                   </table>
                                                </td>
                                             </tr>
                                          </table>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                           <tr>
                              <td align="center" valign="top">
                                 <table border="0" cellpadding="20" cellspacing="2" width="100%" class="flexibleContainer">
                                    <tr>
                                       <td valign="top" width="100%" class="flexibleContainerCell">
                                          <div style="text-align:left;font-family:Helvetica,Arial,sans-serif;font-size:12px;margin-bottom:0;color:#5F5F5F;line-height:135%;">
                                             <?php echo $__env->yieldContent('content'); ?>
                                          </div>
                                       </td>
                                    </tr>
                                 </table>
                              </td>
                           </tr>
                        </table>
                     </td>
                  </tr>
               </table>
            </td>
         </tr>
      </table>
   </center>
</body>
</html>