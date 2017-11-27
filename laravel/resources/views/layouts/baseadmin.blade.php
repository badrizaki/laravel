<!DOCTYPE html>
<html lang="en">
<head>
   <title>@yield('title')</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ url('assets/components/font-awesome/css/font-awesome.min.css') }}">
   <link rel="stylesheet" href="{{ url('assets/css/main2.css') }}">
   @yield('css')
</head>
<body>
   <header>
      <div class="container-fluid">
         <div class="logo"><a href="#"><img src="{{ url('assets/img/logo.png') }}"></a></div>
         <div class="dropdown user user-menu"><a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;Super Admin</a></div>
      </div>
   </header>

   <div class="container-fluid text-center">    
      <div class="row container-content">
         <div class="col-sm-2 sidenav">
            <div id="icon">
               <ul>
                  <li class="active"><i class="fa fa-home"></i></li>
                  <li><i class="fa fa-book"></i></li>
               </ul>
            </div>
            <div id="menu">
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">City</a></li>
                  <li><hr></li>
                  <li><a href="#">VEHICLE TYPE</a></li>
                  <li><a href="#">Group Category</a></li>
                  <li><a href="#">Category</a></li>
                  <li><a href="#">Vehicle</a></li>
               </ul>
            </div>
         </div>
         <div class="col-sm-9">
            <div class="title-page"><h1>Dashboard</h1></div>
            @yield('content')
         </div>
         <div class="col-sm-1 sidenav">
         </div>
      </div>
   </div>

   <footer class="container-fluid text-center">
     <p>Footer Text</p>
   </footer>

   <script src="{{ url('assets/js/jquery.min.js') }}"></script>
   <script src="{{ url('assets/js/bootstrap.min.js') }}"></script>
   <script src="{{ url('assets/js/main.js') }}"></script>
   @yield('js')
</body>
</html>
