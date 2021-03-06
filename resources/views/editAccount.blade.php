<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Account</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Font awesome -->
  <link href="/css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="/css/bootstrap.css" rel="stylesheet">
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="/css/jquery.simpleLens.css">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="/css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="/css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="/css/theme-color/default-theme.css" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
  <!-- Top Slider CSS -->
  <link href="/css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
  <!-- wpf loader Two -->

  <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->


    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.html">
                  <span class=""></span>
                  <p>Website Project Graduation Online <strong></strong> <span>Publishing projects</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
              <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">


                </a>

                <!-- / cart box -->
                <!-- search box -->

                <!-- / search box -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/projects">Projects</a></li>
              @if (auth()->user())
              @if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
                  @if (auth()->user()->role_id == 1)
                  <li><a href="/dashboard">Dashboard</a></li>
                  <li><a href="/admin/reservations">Reservations</a></li>
                  <li><a href="/admin/results">Projects Result</a></li>
                  <li><a href="/edit/account/{{auth()->user()->id}}">Account Settings</a></li>
                    <li><a href="/logout">logout</a></li>
                  @else
                    <li><a href="/teacher/myProjects">My Projects</a></li>
                    <li><a href="/addproject">Add Project</a></li>
                    <li><a href="/teacher/notification">Notification</a></li>
                    <li><a href="/edit/account/{{auth()->user()->id}}">Account Settings</a></li>
                    <li><a href="/logout">logout</a></li>
                  @endif
              @else
              <li><a href="/student/notification">Notification</a></li>
                    <li><a href="/edit/account/{{auth()->user()->id}}">Account Settings</a></li>

                    <li><a href="/logout">logout</a></li>
              @endif
            @else
              <li><a href="/login">Login</a></li>
              <li><a href="/register">Sing up</a></li>
            @endif

              {{-- <li><a href="logout.php">log Out</a></li> --}}


            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>
  <!-- / menu -->
  <!-- / catg header banner section -->

  <!-- Cart view section -->
  <section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-myaccount-area">
            <div class="row">

              <div class="col-md-6">
                <div class="aa-myaccount-register">
                  <h4>Edit Account</h4>
                  @error('message')
                  <span class="" role="alert" style="color:red;">
                    <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                  @if (Session::has('done'))

                    <span class="" role="alert" style="color:red;">
                      <strong>{{ Session::get('done') }}</strong>
                    </span>
                    @endif
                  <form action="/edit/account" method="post" class="aa-login-form">
                    @csrf
                  <input type="hidden" name="id" value="{{$user->id}}">
                    <div id="regform">
                      <label for="">Name <span>*</span></label>
                    <input type="text" name="name" placeholder="Full Name " value="{{$user->name}}">
                      <label for="">Username <span>*</span></label>
                      <input type="text" name="username" placeholder="Username "value="{{$user->username}}">
                      <label for="">Password<span>*</span></label>
                      <input type="text" name="password" placeholder="Password" value="{{$user->pure_password}}">
                      @if ($user->role_id != 3)
                      <label for="">Email <span>*</span></label>
                      <input type="email" placeholder="Email " name="email" value="{{$user->email}}">
                      @if ($user->role_id != 1)
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Department<span>*</span></label>
                        <select class="form-control w-50 " id="registerAs" name="department_id">
                          <option value="{{$user->department_id}}">{{$user->department->name}}</option>
                          @forelse ($departments as $department)
                          @if ($user->department_id != $department->id)
                          <option value="{{$department->id}}">{{$department->name}}</option>
                          @endif
                          
                            @empty
                                
                            @endforelse
                        </select>
                      </div>
                      @endif
                     
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Degree<span>*</span></label>
                        <select class="form-control w-50 " id="registerAs" name="degree">
                         
                        <option value="{{$user->degree}}">{{$user->degree}}</option>
                        @forelse ($degrees as $degree)
                        @if ($degree != $user->degree)
                        <option value="{{$degree}}">{{$degree}}</option>
                        @endif
                        
                        @empty
                            
                        @endforelse
                        
                        </select>
                      </div>
                    </div>
                      @endif
                      
                   
                    
                   
                   
                    <input type="submit"  class="aa-browse-btn" name="Edit" value="Edit">
                    @if (auth()->user()->role_id == 1)
                    <input type="submit" value="delete" class="aa-browse-btn" name="delete">
                    @endif
                   
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
  <script>
    $(document).ready(function() {
      var teacher = $('#regform').html();
      var student =  '<label for="">Name <span>*</span></label>'+
                      '<input type="text" name="name" placeholder="Full Name ">'+
                     ' <label for="">Username <span>*</span></label>'+
                      '<input type="text" name="username" placeholder="Username ">'+
                      '<label for="">Password<span>*</span></label>'+
                      '<input type="password" name="password" placeholder="Password">';
      $("#registerAs").change(function() {
        var number = $(this).children("option:selected").val();
        console.log(number);
        if (number == 1) {
          $('#regform').empty();
          $('#regform').append(teacher);
          
          
        } else if (number == 2) {
          $('#regform').empty();
          $('#regform').append(student);
         
        }
      });
    });
  </script>
  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <footer id="aa-footer">
      <!-- footer bottom -->
      <div class="aa-footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="aa-footer-top-area">
                <div class="row">
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <h3>Student</h3>
                      <ul class="aa-footer-nav">
                        <li><a href="#">Issa Makki Abd-Alwaheed</a></li>
                        <li><a href="#">Waleed Ali Shuhab</a></li>


                      </ul>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Superviser</h3>
                        <ul class="aa-footer-nav">
                          <li><a href="#">Dr. Bassim Jamil</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Adress </h3>
                        <ul class="aa-footer-nav">
                          <li><a href="#">Baghdad-</a></li>

                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                    <div class="aa-footer-widget">
                      <div class="aa-footer-widget">
                        <h3>Website</h3>
                        <address>
                          <p> Project Gradution 2019-2020</p>

                        </address>
                        <div class="aa-footer-social">
                          <a href="#"><span class="fa fa-facebook"></span></a>
                          <a href="#"><span class="fa fa-twitter"></span></a>
                          <a href="#"><span class="fa fa-google-plus"></span></a>
                          <a href="#"><span class="fa fa-youtube"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- footer-bottom -->
    </footer>
    <!-- / footer -->
    </div>
    </div>
    </div>
    <!-- footer-bottom -->
  </footer>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>


</body>

</html>