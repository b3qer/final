<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teachers</title>

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
                                    <p>Website Project Graduation Online <strong></strong> <span>Publishing
                                            projects</span></p>
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
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target=".navbar-collapse">
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

    <!-- catg header banner section -->

    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="checkout">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="checkout-area">


                        <div class="row">
                            <div class="col-md-8">
                                <div class="checkout-left">
                                    <div class="panel-group" id="accordion">
@forelse ($teachers as $teacher)
<div class="panel panel-default aa-checkout-coupon">
                                           
    <div id="collapseOne" class="panel-collapse collapse in">
        <div class="panel-body">
            Teacher Name : {{$teacher->name}}
            <br>
            username : {{$teacher->username}}
            <br>
            Password : {{$teacher->pure_password}}
            <br>
            
            Department : {{$teacher->department->name}}
            <br>
            Email : {{$teacher->email}}
            <br>
           
        <a href="/edit/account/{{$teacher->id}}" class="aa-browse-btn">Edit</a>
            

        </div>
    </div>
</div>
@empty
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">


                    <div class="row">
                        <div class="col-md-8">
                            <div class="checkout-left">
                                <div class="panel-group" id="accordion">


                                    <div class="panel panel-default aa-checkout-coupon">

                                        <div id="collapseOne" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                               No Students
                                                <br>




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
</section>
@endforelse

                                        


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
   
    <!-- / Cart view section -->
   <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
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
                        <h3>University </h3>
                        <ul class="aa-footer-nav">
                          <li><a href="#">Al-Mustansiriya</a></li>

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

    <!-- Login Modal -->

    </div><!-- /.modal-dialog -->
    </div>

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