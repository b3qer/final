<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Online</title>

    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">

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
                            <li><a href="index.php">Home</a></li>


                            <li><a href="Requst.php">View Requset </a>
                            <li><a href="viewall.php">View All Projects </a>


                            </li>

                            <li><a href="view_result.php">Project Results</a></li>
                            <? @session_start();
				
				 if (!isset($_SESSION['username'])) { ?>
                            <li><a href="login.php">Sing In</a></li>
                            <? }else { ?>
                            <li><a href="#">Conrtol Admin <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="add.html">Add Project</a></li>
                                    <li><a href="account.php">Add Staf</a></li>

                                </ul>
                            </li>
                            <li><a href="logout.php">log Out</a></li>
                            <? }  ?>
                        </ul>
                        </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
    </section>

    <!-- catg header banner section -->

    <!-- / catg header banner section -->

    <!-- Cart view section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <!-- Start men product category -->
                                    <div class="tab-pane fade in active" id="men">
                                        <ul class="aa-product-catg">
                                            <!-- start single product item -->


                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>
                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>
                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>
                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>
                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>
                                            <li>
                                                <div style="height: 340px; width:310px;">
                                                    <img src="images/test.jpg"
                                                             style="width=310px" height="300px">


                                                    <h4 class="aa-product-title"><a href="#">Title : echo
                                                            $row['d1']; ?></a></h4>
                                                    <span class="aa-product-price">Superviser - echo $row['d2'];
                                                        ?></span>

                                                    <div class="aa-product-hvr-content">

                                                    </div>
                                                </div>

                                                <!-- product badge -->

                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- / quick view modal -->

    </section>

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