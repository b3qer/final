<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Font awesome -->
        <link href="/css/font-awesome.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <!-- SmartMenus jQuery Bootstrap Addon CSS -->
        <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
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
                                  <li><a href="/edit/account/{{auth()->user()->id}}">Account Settings</a></li>
                                    <li><a href="/logout">logout</a></li>
                                  @else
                                    <li><a href="/teacher/myProjects">My Projects</a></li>
                                    <li><a href="/addproject">Add Project</a></li>
                                    <li><a href="/teacher/reservations">Reservations</a></li>
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

    <!-- product category -->

    <section id="aa-product-details">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-product-details-area">
                        <div class="aa-product-details-content">
                            <div class="row">

                               

                                <!-- Modal view slider -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="aa-product-view-slider">
                                        <div id="demo-1" class="simpleLens-gallery-container">
                                            <div class="simpleLens-container">

                                            <div class="simpleLens-big-image-container"><img src="{{$project->picture}}"
                                                        class="simpleLens-big-image"
                                                        style="max-width:500px; height:400px;"></a></div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal view content -->


                            <div class="col-md-7 col-sm-7 col-xs-12">
                                @if (Session::has('done'))

                                <span class="" role="alert" style="color:red;">
                                  <strong>{{ Session::get('done') }}</strong>
                                </span>
                                @endif
                                <div class="aa-product-view-content">
                                <h3>Title : {{$project->title}}</h3>
                                    
                                </div>
                                <div class="aa-product-view-content">
                                <h3>Superviser : {{$project->teacher->name}}</h3>
                                   
                                </div>
                                <div class="aa-product-view-content">
                                    <h3>Field : {{$project->field}}</h3>
                                   
                                </div>
                                <div class="aa-product-view-content">
                                    <h3>Students Number: {{$project->std_number}}</h3>
                                   
                                </div>
                                <div class="aa-product-view-content">
                                    <h3>Descrption : {{$project->note}}</h3>
                                   
                                </div>
                               
                                <form class="aa-login-form" action="/student/add/request" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @if (auth()->user())
                                    @if (auth()->user()->role_id == 3)
                                    <div class="aa-product-view-content">
                                    <input type="hidden" name="project_id" value="{{$project->id}}"
                                            class="form-control">
                                    <input type="hidden" name="teacher_id" value="{{$project->teacher_id}}"
                                            class="form-control">
                                       
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">No.Student<span>*</span></label>
                                            <select class="form-control w-50 " id="studentlist" style="height:30px;"
                                                name="d5">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div><br>
                                        <label for="">Students name <span>*</span></label><br>
                                        <div id="group">

                                            <input type="text" name="name1" placeholder="Your Name"> <br>

                                        </div>


                                        <h3> <input type="submit" class="aa-browse-btn" value="Send">
                                        </h3>


                                        </p>
                                    </div>
                                    @endif
                                  
                                    @else
                                    <a href="/login" class="aa-browse-btn">Login to request</a>
                                    @endif
                                   
                                   
                            </div>
                            </form>
                            
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="aa-product-details-area">
                            <div class="aa-product-details-content">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5 col-xs-12">
                                        <div class="aa-product-view-slider">
                                            <div id="demo-1" class="simpleLens-gallery-container">
                                                <div class="simpleLens-container">


                                                </div>
                                            </div>
                                        </div>
                                    </div>
    </section>

    <!-- Tab panes -->
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
    <!-- / footer -->

    <!-- Login Modal -->

    </div><!-- /.modal-dialog -->
    </div>
    <script>
        $(document).ready(function() {
      $("#studentlist").change(function() {
        var number = $(this).children("option:selected").val();
        if (number == 1) {
          $('#group').empty();
          var data = '<input type="text" name="name1" placeholder="First Name">';
          $('#group').append(data);
        } else if (number == 2) {
          $('#group').empty();

          $('#group').append('<input type="text" name="name1" placeholder="First Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name2" placeholder="Second Name">');
        } else if (number == 3) {
         
          $('#group').empty();

          $('#group').append('<input type="text" name="name1" placeholder="First Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name2" placeholder="Second Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name3" placeholder="Third Name">');
        } else if (number == 4) {
          $('#group').empty();

          $('#group').append('<input type="text" name="name1" placeholder="First Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name2" placeholder="Second Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name3" placeholder="Third Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name4" placeholder="Four Name">');
        } else if (number == 5) {
          $('#group').empty();

          $('#group').append('<input type="text" name="name1" placeholder="First Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name2" placeholder="Second Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name3" placeholder="Third Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name4" placeholder="Four Name">');
          $('#group').append('<br>');
          $('#group').append('<input type="text" name="name5" placeholder="Five Name">');
        } else {
          $('#group').empty();
        }
      });
    });
    </script>

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