<!DOCTYPE html>
<html lang="en">
<head>
   <title>@yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" type="image/png" sizes="16x16" href="{{ url('assets/img/icon.png') }}">
   <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('assets/components/font-awesome/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ url('assets/css/main.css') }}">
   @yield('css')
</head>
<body>
   <nav class="bars-menu navbar navbar-default" role="navigation">
      <div class="container-fluid" id="navfluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigationbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar top-bar"></span>
               <span class="icon-bar mid-bar"></span>
               <span class="icon-bar bot-bar"></span>
            </button>
            <div class="logo">
               <a class="navbar-brand" href="{{ url('') }}"><img src="{{ url('assets/img/logo-2.png') }}"></a>
               <div class="clearfix"></div>
            </div>
         </div>
         <div class="collapse navbar-collapse" id="navigationbar">
            <ul class="nav navbar-nav">
               <li><a href="{{ route('map') }}"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;&nbsp;Map</a></li>
               <li><a href="{{ route('vehicleSummary') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;Vehicle Summary</a></li>    
               <li><a href="{{ route('job-order') }}"><i class="fa fa-cube" aria-hidden="true"></i>&nbsp;&nbsp;Job Order</a></li>    
               <li><a href="{{ route('administration') }}"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;&nbsp;Administration</a></li>    
               <li><a href="{{ route('historyShipping') }}"><i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp;&nbsp;History Shipping</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <li><a href="#"><i class="fa fa-home"></i></a></li>
               <li class="dropdown">
                  <a href="#" data-toggle="dropdown"><div class="bell"><i class="fa fa-bell"></i></div></a>
                  <ul class="dropdown-menu dropdown-bell animated bounceInDown">
                     <li>
                        <div class="drop-title">You have 4 new messages</div>KXTN22W3SR
                     </li>
                     <li>
                        <div class="message-center">
                           <a href="#">
                              <div class="user-img"> <img src="/Contents/images/pawandeep.jpg" alt="user" class="img-circle"> </div>
                              <div class="mail-content">
                                 <h5>Pavan kumar</h5>
                                 <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                              </div>
                           </a> <a href="#">
                              <div class="user-img"> <img src="/Contents/images/sonu.jpg" alt="user" class="img-circle"> </div>
                              <div class="mail-content">
                                 <h5>Sonu Nigam</h5>
                                 <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span>
                              </div>
                           </a> <a href="#">
                              <div class="user-img"> <img src="/Contents/images/arijit.jpg" alt="user" class="img-circle"> </div>
                              <div class="mail-content">
                                 <h5>Arijit Sinh</h5>
                                 <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span>
                              </div>
                           </a>
                           <a href="#">
                              <div class="user-img"> <img src="/Contents/images/pawandeep.jpg" alt="user" class="img-circle"> </div>
                              <div class="mail-content">
                                 <h5>Pavan kumar</h5>
                                 <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span>
                              </div>
                           </a>
                        </div>
                     </li>
                     <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a href="#"><i class="fa fa-power-off"></i> My Profile</a></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> My Balance</a></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Inbox</a></li>
                     <li role="separator" class="divider"></li>
                     <li><a href="#"><i class="fa fa-power-off"></i> Account Setting</a></li>
                     <li role="separator" class="divider"></li>
                     <li>
                         <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <div class="container-fluid text-center">    
      <div class="row container-content">
         <div class="col-sm-12">
            @yield('content')
         </div>
         <!-- <div class="col-sm-1 sidenav">
         </div> -->
      </div>
   </div>

   <footer class="container-fluid text-center">
      <p>Copyright © 2017 Transport. All right reserved</p>
   </footer>

   <script src="{{ url('assets/js/jquery.min.js') }}"></script>
   <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ url('assets/js/main.js') }}"></script>
   @yield('js')
</body>
</html>
