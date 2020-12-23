<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<style>
.nav-i {
    color: #606da6 !important;
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

#addTEMPbtnICON {
    padding-left: 20px;
}

#addTEMPbtn {
    display: block !important;
    text-align: center !important;
    padding-right: 30px;
    transition: all 0.3s ease !important;
    color: #fff !important;
    font-size: 20px !important;
    border: none;
    height: 50px !important;

}

#addTEMPbtn:hover {
    background-color: #000 !important;

}

.Addtemp {
    background: #606da6 !important;
    color: white !important;
    border-radius: 50px 0% 0% 50px !important;
    width: 60px !important;
    height: 60px !important;

}

.file-field {
    position: relative
}

.file-field .file-path-wrapper {

    padding-left: 10px;
    overflow: hidden
}

.file-field input.file-path {
    width: 60%;
    height: 36px;
    color: #00c851;
    font-size: 1.4em;
}

.file-field .btn {
    float: left
}

.file-field span {
    cursor: pointer
}

.file-field input[type="file"] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 0;
    margin: 0;
    cursor: pointer;
    filter: alpha(opacity=0);
    opacity: 0
}

.file-field input[type="file"]::-webkit-file-upload-button {
    display: none
}

.wasatni {
    margin-top: 11vh !important;
    padding-left: 4vh;

}

#addtitle {
    color: #606da6;
    margin-top: 20%;
    margin-left: 23%;
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
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i"
        rel="stylesheet">

    <!-- Stylesheets
    ============================================= -->
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link href="assets/css/external.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/btn.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


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
    $type = $_GET['type'];
    echo '<script>
    document.addEventListener("DOMContentLoaded", () => {

        Swal.fire({
            position: "top-end",
            icon: "' . $type . '",
            title: "' . $message . '",
            showConfirmButton: false,
            timer: 2000
        })
    })
    </script>';
}
?>

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapperParallax" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1  header-6 header-transparent header-white">
            <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light" style=" box-shadow:none !important; ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="#"><img style="width: 160px; height: 56px;"
                                src="/projet_web/home/assets/images/logo/logo-cv3.png" alt=""></a>
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
                                            <option value="">Trending</option>
                                            <option value="">Latest</option>

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
                                    <img style="width: 160px; height: 56px; "
                                        src="/projet_web/home/assets/images/logo/logo-cv3.png " alt="logo ">
                                </div>
                            </div>
                            <div class="footer--copyright ">
                                <span>&copy; 2021 CV TEMP - All Rights Reserved, by </span><a href="# ">ηγέτης</a>
                            </div>
                            <!-- .footer-copyright end -->
                        </div>
                        <!-- .col-lg-4 end -->
                        <div
                            class="col-sm-12 col-md-12 col-lg-4 text-right text-center-xs text-center-sm widget--social ">
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
            <!--footer-widget end. -->
        </footer>


        <div class="icon-bar">
            <button id="addTEMPbtn" type="button" class="Addtemp btn btn--primary btn--block mb-30" data-toggle="modal"
                data-target="#newsletter-popup"><i id="addTEMPbtnICON" class="fa fa-folder-plus fa-lg"></i></button>
        </div>
        <div class="modal fade newsletter-popup" id="newsletter-popup" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row" style="height:80vh;">
                            <div class="col-sm-12 col-md-6 col-lg-5 pl-0">
                                <div class="modal--img">
                                    <img src="assets/images/popup/3.jpg" alt="img" class="img-fluid"
                                        style="height:80vh; ">
                                </div>
                            </div>
                            <!-- .col-lg-5 end -->
                            <div class="col-sm-12 col-md-6 col-lg-7">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                        aria-hidden="true">&times;</span></button>

                                <h4 id="addtitle">Add Template</h4>
                                <form class="md-form wasatni" enctype="multipart/form-data" action="filesLogic.php"
                                    method="post">
                                    <div class="file-field">
                                        <a class="btn-floating purple-gradient mt-0 float-left">
                                            <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                            <input type="file" name="myfile">
                                        </a>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"
                                                placeholder="Upload template file">

                                        </div>
                                    </div><br>
                                    <div class="file-field">
                                        <a class="btn-floating purple-gradient mt-0 float-left">
                                            <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                            <input type="file" name="myimg">
                                        </a>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text"
                                                placeholder="Upload template image">

                                        </div>
                                    </div> <br>
                                    <button type="submit" class="btn btn--primary btn--rounded " name="save">upload<i
                                            class="lnr lnr-arrow-right"></i></button>
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


        <!-- .......................................................................
...................................product-popup....................................
............................................................................-->


        <div class="modal model-bg-light fade product-popup " id="product-popup" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                        <div class="product-detalis product-detalis-3 product-detalis-10 pt-0 pb-0">
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-6">
                                    <div class="products-gallery-carousel products-gallery-carousel-2">
                                        <div class="owl-carousel products-slider" data-slider-id="1">
                                            <div class="product-img" id="bigimg">

                                            </div>
                                            <div class="product-img">
                                                <img src="assets/images/products/gallery/1-1 (1).jpg"
                                                    style="height:540px" alt="product">
                                            </div>
                                            <div class="product-img">
                                                <img src="assets/images/products/gallery/1-1 (4).jpg"
                                                    style="height:540px" alt="product">
                                            </div>
                                            <div class="product-img">
                                                <img src="assets/images/products/gallery/1-1 (3).jpg"
                                                    style="height:540px" alt="product">
                                            </div>
                                        </div>
                                        <div class="owl-thumbs thumbs-bg" data-slider-id="1">
                                            <button class="owl-thumb-item">
                                                <img src="assets/images/products/gallery/thumb/17.png"
                                                    alt="product thumb">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="assets/images/products/gallery/thumb/18.png"
                                                    alt="product thumb">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="assets/images/products/gallery/thumb/19.png"
                                                    alt="product thumb">
                                            </button>
                                            <button class="owl-thumb-item">
                                                <img src="assets/images/products/gallery/thumb/20.png"
                                                    alt="product thumb">
                                            </button>
                                        </div>
                                        <!-- .owl-thumbs end -->
                                    </div>
                                    <!-- .products-gallery-carousel end -->
                                </div>
                                <!-- .col-lg-7 end -->
                                <div class="col-sm-12 col-md-12 col-lg-6">

                                    <div class="product--title">
                                        <h3 id="titl"></h3>
                                    </div>
                                    <div class="product--rating"> <i class="fa fa-star active"></i> <i
                                            class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i
                                            class="fa fa-star active"></i> <i class="fa fa-star"></i> </div>
                                    <div class="product--review">Overall Review</div>
                                    <script src="assets/js/btn.js"></script>
                                    <div class="btntn">
                                        <a href="#" class="btn-liquid">
                                            <span class="inner">Edit Template</span>
                                        </a>
                                    </div>

                                    <svg viewBox="45 60 400 320" id="svgg">

                                        <path fill="#8117dd"
                                            d="M 90 210 C 90 180 90 150 90 150 C 150 150 180 150 180 150 C 180 150 300 150 300 150 C 300 150 330 150 390 150 C 390 150 390 180 390 210 C 390 240 390 270 390 270 C 330 270 300 270 300 270 C 300 270 180 270 180 270 C 180 270 150 270 90 270 C 90 270 90 240 90 210"
                                            mask="url(#knockout-text)">
                                        </path>
                                        <mask id="knockout-text">
                                            <rect width="100%" height="100%" fill="#fff" x="0" y="0" />
                                            <text x="158" y="220" fill="#000">DOWNLOAD</text>
                                        </mask>
                                    </svg>
                                    <div class="product--meta">


                                        <!-- .product-meta-select end -->
                                        <div class="product--meta-action clearfix mb-0" style="margin-top:6vh;">

                                            <div class="clearfix">
                                                <div class="pull-left">
                                                    <a href="#" class="fav"><i class="ti-heart"></i></a>

                                                </div>
                                                <div class="product--share pull-right">
                                                    <a class="share-facebook" href="#"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="share-google-plus" href="#"><i
                                                            class="fa fa-pinterest-p"></i></a>
                                                    <a class="share-linkedin" href="#"><i
                                                            class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                            <!-- .product-share end -->
                                        </div>
                                    </div>
                                </div>

                                <!-- .col-lg-6 end -->
                            </div>
                            <!-- .row end -->

                        </div>
                        <!-- .modal-body end -->
                    </div>
                </div>
                <!-- .modal-content end -->
            </div>
            <!-- .modal-dialog end -->
        </div>
        <script>
        var idfile;

        function fct(fid) {
            idfile = fid;
            document.getElementById("bigimg").innerHTML =
                '<img src="assets/images/listtemp/' + fid +
                '.jpg" alt="template" style="height:525px; box-shadow: 5px 5px 5px gray;">';
            document.getElementById("titl").innerHTML = 'Template Model ' + fid;
            console.log(typeof(idfile));
            console.log(idfile);


        }
        document.getElementById("svgg").addEventListener("click", function() {
            console.log(typeof(idfile));
            console.log(idfile);
            window.location.href = 'download.php?name=templates/' + idfile + '.docx';
        });
        </script>
        <!-- Foot Scripts
============================================= -->
        <script src="assets/js/mdb.min.js"></script>
        <script src="assets/js/jquery-3.3.1.min.js "></script>
        <script src="assets/js/plugins.js "></script>
        <script src="assets/js/functions.js "></script>
        <script src="https://kit.fontawesome.com/ddd5622fc1.js" crossorigin="anonymous"></script>

</body>

</html>