<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<style>
    .nav-i {
        color: #606da6!important;
        font-weight: bold !important;
    }

    .nav-i:hover {
        color: #000000 !important;
    }

    .imgfill {
        height: 100% !important;
        width: 100% !important;
        padding: 1em;
    }

    .backlst {
        background-color: #f0f5f9 !important;
    }
    .icon-bar {
  z-index: 12;
  position: fixed;
  right: -15px;
  top: 85%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}
#addTEMPbtnICON{
    padding-left:20px;
}
#addTEMPbtn {
  display: block !important ;
  text-align: center !important;
  padding-right: 30px ;
  transition: all 0.3s ease !important;
  color: #fff !important;
  font-size: 20px !important;
  border: none;
  height:50px !important;

}

#addTEMPbtn:hover {
  background-color: #000 !important;

}

.Addtemp {
  background: #606da6 !important;
  color: white !important;
  border-radius: 50px 0% 0% 50px !important ;
  width: 60px !important;
  height: 60px !important;

}
</style>

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="zytheme" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 template">
    <link href="assets/images/favicon/iconl.png" rel="icon">


    <!-- Fonts
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i" rel="stylesheet">

    <!-- Stylesheets
    ============================================= -->
    <link href="assets/css/external.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Document Title
    ============================================= -->
    <title>CV TEMP | Templates</title>
</head>

<body>
    <div class="preloader">
        <div class="loader-eclipse">
            <div class="loader-content"></div>
        </div>
    </div>
    <?php if (!empty($_GET['message'])) {
    $message = $_GET['message'];
    echo '<script>alert("' . $message . '")</script>';
}
?>



    <!-- Document Wrapper
	============================================= -->
    <div id="wrapperParallax" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1  header-6 header-transparent header-white">
            <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img style="width: 160px; height: 56px;" src="/projet_web/home/assets/images/logo/logo-cv3.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a class="nav-i" href="./home-6.html">Home</a></li>
                        <li><a class="nav-i" href="shop-layout-fullwidth.php">Templates</a></li>
                        <li><a class="nav-i" href="#">Help Center</a></li>
                        <li><a class="nav-i" href="#">About Us</a></li>
                    </ul>
                    <a href="/projet_web/Login/login.html" class="btn btn--primary btn--rounded">Login</a>
                </div>
            </nav>
        </header>


        <section id="page-title" class="page-title bg-parallax">
            <div class="bg-section">
                <img src="assets/images/page-title/6.png" alt="background">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title title-3 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1 style="font-weight:800!important; font-size: 5em!important;">Template List</h1>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="./home-6.html">Home</a></li>
                                <li class="active">Template List</li>
                            </ol>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #page-title end -->

        <!-- category
============================================= -->
        <section id="category" class="category category-1 backlst">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-lg-12 category-options">
                        <div class="category-num pull-left pull-none-xs">

                        <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include 'nbTemp.php'
?>
                        </div>
                        <!-- .category-num end -->
                        <div class="category-select pull-right text-right text-left-sm pull-none-xs">
                            <ul class="list-unstyled mb-0">

                                <li class="option sort--options">
                                    <span class="option--title">Sort by:</span>

                                    <div class="select-form">
                                        <i class="fa fa-caret-down"></i>
                                        <select>
                                            <option selected="" value="">Categories</option>
                                            <option  value="">Trending</option>
                                            <option  value="">Latest</option>

                                        </select>
                                    </div>

                                </li>
                                <li class="option">
                                    <span class="option--title">SHOW</span>
                                    <ul class="list-unstyled show--num">
                                        <li>2</li>
                                        <li>4</li>
                                        <li>6</li>
                                    </ul>
                                </li>
                                <li class="option view--type">
                                    <a id="switch-list" href="#" class=""><i class="fa fa-th"></i></a>
                                    <a id="switch-grid" href="#" class="active"><i class="fa fa-bars"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- .category-options end -->
                </div>
                <!-- .row end -->
                <div class="row row-no-padding mb-60 ">
<?php
include 'uploadTemp.php'
?>
                </div>


                <!-- .row end -->
                <div class="row ">
                    <div class="col-sm-12 col-md-12 col-lg-12 text-center ">
                        <a href="# " class="btn--loading ">
                            <div class="bullets ">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            loading
                        </a>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </section>
        <!-- #category end -->

        <!-- Footer #2
============================================= -->
        <footer id="footerParallax " class="footer footer-1 ">
            <div class="container pr-40 pl-40 ">
                <div class="footer-widget ">
                    <div class="row ">
                        <div class="col-sm-12 col-md-12 col-lg-4 text-center-xs widget--links ">
                            <div class="widget--content ">
                                <ul class="list-unstyled ">
                                    <li><a href="# ">About Us </a></li>
                                    <li><a href="# ">Privacy Policy</a></li>
                                    <li><a href="# ">Term & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- .col-lg-4 end -->
                        <div class="col-sm-12 col-md-12 col-lg-4 text-center widget--logo ">
                            <div class="widget--content ">
                                <div class="widget--logo-img ">
                                    <img style="width: 160px; height: 56px; " src="/projet_web/home/assets/images/logo/logo-cv3.png " alt="logo ">
                                </div>
                            </div>
                            <div class="footer--copyright ">
                                <span>&copy; 2019 Hebes - All Rights Reserved, by </span><a href="# ">ηγέτης</a>
                            </div>
                            <!-- .footer-copyright end -->
                        </div>
                        <!-- .col-lg-4 end -->
                        <div class="col-sm-12 col-md-12 col-lg-4 text-right text-center-xs text-center-sm widget--social ">
                            <div class="widget--content ">
                                <div class="social--icons ">
                                    <span>Follow Us On Social</span>
                                    <a class="facebook " href="# ">
                                        <i class="fa fa-facebook "></i>
                                    </a>
                                    <a class="twitter " href="# ">
                                        <i class="fa fa-twitter "></i>
                                    </a>
                                    <a class="google-plus " href="# ">
                                        <i class="fa fa-pinterest-p "></i>
                                    </a>
                                    <a class="instagram " href="# ">
                                        <i class="fa fa-instagram "></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .col-lg-4 end -->
                    </div>
                    <!-- .row end -->
                </div>
                <!-- .container end -->
            </div>
            <!-- .footer-widget end -->
        </footer>


        <div class="icon-bar">
        <button id="addTEMPbtn" type="button" class="Addtemp btn btn--primary btn--block mb-30" data-toggle="modal" data-target="#newsletter-popup"><i id="addTEMPbtnICON" class="fa fa-folder-plus fa-lg"></i></button>
        </div>
  <div class="modal fade newsletter-popup" id="newsletter-popup" tabindex="-1" role="dialog" >
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-5 pl-0">
                        <div class="modal--img">
                            <img src="assets/images/popup/1.jpg" alt="img" class="img-fluid">
                        </div>
                    </div>
                    <!-- .col-lg-5 end -->
                    <div class="col-sm-12 col-md-6 col-lg-7">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                        <form enctype="multipart/form-data" action="filesLogic.php" method="post" >
                            <h3>Upload File</h3>
                            <input type="file" name="myfile"> <br>
                            <input type="file" name="myimg"> <br>
                            <button type="submit"class="btn btn--primary btn--rounded" name="save">upload<i class="lnr lnr-arrow-right"></i></button>
                        </form>

                    </div>
                    <!-- .col-lg-7 end -->
                </div>
                <!-- .row end -->
            </div>
        </div>
        <!-- .modal-content end -->
    </div>
</div>


    <!-- Foot Scripts
============================================= -->
    <script src="assets/js/jquery-3.3.1.min.js "></script>
    <script src="assets/js/plugins.js "></script>
    <script src="assets/js/functions.js "></script>
    <script src="https://kit.fontawesome.com/ddd5622fc1.js" crossorigin="anonymous"></script>

</body>

</html>