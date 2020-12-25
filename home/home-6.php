<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Maamouri_Taher&Fkiri_Samed" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 template">
    <link href="assets/images/favicon/iconl.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i"
        rel="stylesheet">

    <link href="assets/css/external.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css">

    <link rel="stylesheet" href="assets/css/style.css">


    <link href="assets/css/themes/theme-red.css" rel="stylesheet">



    <title>CV TEMP</title>
</head>

<body>
    <?php  
session_start(); 
?>
    <div class="preloader">
        <div class="loader-eclipse">
            <div class="loader-content"></div>
        </div>
    </div>

    <div id="wrapperParallax" class="wrapper clearfix">


        <header id="navbar-spy" class="header header-1  header-6 header-transparent header-white">
            <nav id="primary-menu" class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./home-6.php"><img style="width: 160px; height: 56px;"
                                src="/projet_web/home/assets/images/logo/logo-cv.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a href="./home-6.php">Home</a></li>
                        <li><a href="template-list.php">Templates</a></li>
                        <li><a href="./help.php">Help Center</a></li>
                        <li><a href="#">About Us</a></li>
                    </ul>
                    <?php
                     

                    if(isset($_SESSION['login_user'])) 
                    {
                     echo'<a href="/projet_web/Login/logout.php" class="btn btn--primary btn--rounded">Logout</a>';
                    }
                    else
                    {
                     echo'<a href="/projet_web/Login/log.php" class="btn btn--primary btn--rounded">Login</a>';                    }
                    ?>

                </div>
            </nav>
        </header>

        <div class="slider slider-3 slider-6">
            <div id="rev_slider_9_1_wrapper" class="slider-mtop rev_slider_wrapper fullscreen-container"
                data-alias="hebes-home-6" data-source="gallery" style="background:transparent;padding:0px;">
                <div id="rev_slider_9_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.7">
                    <ul>
                        <li data-index="rs-29" data-transition="slideoverleft" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="assets/images/slider/thumb/12.png">
                            <img src="assets/images/slider/bg/55.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <div class="tp-caption rev-btn" id="slide-29-layer-6" data-x="['left','left','left','left']"
                                data-hoffset="['920','727','110','70']" data-y="['top','top','top','top']"
                                data-voffset="['516','511','536','360']" data-fontsize="['14','14','13','13']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(0,0,0)','rgb(0,0,0)']"
                                data-letterspacing="['3','3','1','1']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"delay":2200,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,0);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 3px;font-family:Montserrat;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <a href="template-list.php" class="btn">TRY NOW</a>
                            </div>

                            <div class="tp-caption   tp-resizeme" id="slide-29-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['616','454','110','70']"
                                data-y="['top','top','top','top']" data-voffset="['227','214','258','204']"
                                data-fontsize="['140','140','100','60']" data-lineheight="['140','140','100','60']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1700,"speed":1500,"frame":"0","from":"z:0;rX:0deg;rY:0;rZ:0;sX:2;sY:2;skX:0;skY:0;opacity:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                PRO <br> Resume </div>
                        </li>
                        <li data-index="rs-33" data-transition="scaledownfrombottom" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="assets/images/slider/thumb/13.png">
                            <img src="assets/images/slider/bg/66.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <div class="tp-caption rev-btn" id="slide-33-layer-6" data-x="['left','left','left','left']"
                                data-hoffset="['920','727','110','70']" data-y="['top','top','top','top']"
                                data-voffset="['516','511','536','360']" data-fontsize="['14','14','13','13']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(0,0,0)','rgb(0,0,0)']"
                                data-letterspacing="['3','3','1','1']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"delay":2300,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,0);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']"
                                data-paddingtop="[10,10,10,10]" data-paddingright="[30,30,30,30]"
                                data-paddingbottom="[10,10,10,10]" data-paddingleft="[30,30,30,30]"
                                style="z-index: 5; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 3px;font-family:Montserrat;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <a href="template-list.php" class="btn">TRY NOW</a>
                            </div>

                            <div class="tp-caption   tp-resizeme" id="slide-33-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['617','454','110','70']"
                                data-y="['top','top','top','top']" data-voffset="['227','214','258','204']"
                                data-fontsize="['140','140','100','60']" data-lineheight="['140','140','100','60']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1700,"speed":1600,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                Modern <br> Resume
                            </div>

                        </li>
                        <li data-index="rs-34" data-transition="slidingoverlayleft" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="assets/images/slider/thumb/14.png">
                            <img src="assets/images/slider/bg/44.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <div class="tp-caption rev-btn" id="slide-34-layer-6" data-x="['left','left','left','left']"
                                data-hoffset="['920','727','110','70']" data-y="['top','top','top','top']"
                                data-voffset="['516','511','536','360']" data-fontsize="['14','14','13','13']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(0,0,0)','rgb(0,0,0)']"
                                data-letterspacing="['3','3','1','1']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"delay":2300,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,0);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 3px;font-family:Montserrat;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <a href="template-list.php" class="btn">TRY NOW</a>
                            </div>

                            <div class="tp-caption   tp-resizeme" id="slide-34-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['617','454','110','70']"
                                data-y="['top','top','top','top']" data-voffset="['227','214','258','204']"
                                data-fontsize="['140','140','100','60']" data-lineheight="['140','140','100','60']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1700,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                COOL<br> DESIGN </div>

                        </li>
                        <li data-index="rs-35" data-transition="slideremoveup" data-easein="Power4.easeInOut"
                            data-easeout="Power4.easeInOut" data-masterspeed="2000"
                            data-thumb="assets/images/slider/thumb/15.png">
                            <img src="assets/images/slider/bg/54.jpg" alt="" data-bgposition="center center"
                                data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg"
                                data-no-retina>

                            <div class="tp-caption rev-btn" id="slide-35-layer-6" data-x="['left','left','left','left']"
                                data-hoffset="['920','727','110','70']" data-y="['top','top','top','top']"
                                data-voffset="['516','511','536','360']" data-fontsize="['14','14','13','13']"
                                data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(0,0,0)','rgb(0,0,0)']"
                                data-letterspacing="['3','3','1','1']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                                data-responsive="off"
                                data-frames='[{"delay":3200,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0,0,0,1);bg:rgba(255,255,255,0);bs:solid;bw:0 0 0 0;"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 700; color: #ffffff; letter-spacing: 3px;font-family:Montserrat;background-color:rgba(0,0,0,0);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">
                                <a href="template-list.php" class="btn">TRY NOW</a>
                            </div>

                            <div class="tp-caption   tp-resizeme" id="slide-35-layer-5"
                                data-x="['left','left','left','left']" data-hoffset="['617','454','110','70']"
                                data-y="['top','top','top','top']" data-voffset="['227','214','258','204']"
                                data-fontsize="['140','140','100','60']" data-lineheight="['140','140','100','60']"
                                data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                data-responsive_offset="on"
                                data-frames='[{"delay":1700,"speed":2000,"sfxcolor":"#ffffff","sfx_effect":"blockfrombottom","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; white-space: nowrap; font-size: 140px; line-height: 140px; font-weight: 700; color: #ffffff; letter-spacing: 0px;font-family:Montserrat;">
                                LATEST<br> MODELS </div>

                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                </div>

            </div>
        </div>
        <script>
        var revapi9,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener(
                "DOMContentLoaded", onLoad)
            else
                onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;

                    if ("off" == "on") tpj.noConflict();
                }
                if (tpj("#rev_slider_9_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_9_1");
                } else {
                    revapi9 = tpj("#rev_slider_9_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "assets/revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "metis",
                                hide_onleave: false,
                                direction: "horizontal",
                                container: "layergrid",
                                h_align: "right",
                                v_align: "bottom",
                                h_offset: 100,
                                v_offset: 15,
                                space: 5,
                                tmp: '<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                            }
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1240, 1024, 778, 480],
                        gridheight: [700, 768, 960, 720],
                        lazyType: "none",
                        parallax: {
                            type: "mouse",
                            origo: "enterpoint",
                            speed: 400,
                            speedbg: 0,
                            speedls: 0,
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 3, 2, 55],
                        },
                        shadow: 0,
                        spinner: "spinner0",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                    var api = revapi9;

                    var divider = ' / ',
                        totalSlides,
                        numberText;

                    api.one('revolution.slide.onloaded', function() {

                        totalSlides = api.revmaxslide();
                        numberText = api.find('.slide-status-numbers').text('1' + divider + totalSlides);

                        api.on('revolution.slide.onbeforeswap', function(e, data) {

                            numberText.text((data.nextslide.index() + 1) + divider + totalSlides);

                        });

                    });
                };
            };
        }());
        </script>

        <section id="cat-list" class="cat-list bg-lightBlue text-center-xs pt-140 pt-xs-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-4 col-lg-4 mb-30-xs">
                        <div class="divider--line"></div>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="heading heading-2 text--right text-center-xs mb-85">
                            <h2 class="heading--title">Categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-3">
                        <div class="cat--list-desc">
                            <p> <b style="font-size: 20px;"> Pick a resume template. Make it more you !</b> <br>Create
                                beautiful, professional resumes in minutes, free. Here’s a million design combinations.
                                Do what you want. Whether you’re a nurse or engineer,
                                your resume will always stand out. </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="cat--list-item">
                            <a href="#">
                                <img style="width: 270px; height: 370px;" src="assets/images/categories/list/1.png"
                                    alt="img">
                                <h4># New</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="cat--list-item">
                            <a href="#">
                                <img style="width: 270px; height: 370px;" src="assets/images/categories/list/2.png"
                                    alt="img">
                                <h4># Modern</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3">
                        <div class="cat--list-item">
                            <a href="#">
                                <img style="width: 270px; height: 370px;" src="assets/images/categories/list/3.png"
                                    alt="img">
                                <h4># Professional</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="bg-white clearfix"></div>

        <section id="products-carousel" class="products-carousel pt-140 pt-xs-60">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 col-lg-8">
                        <div class="heading heading-2 mb-30">
                            <h2 class="heading--title">Featured Templates</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 text-content-right mb-30-xs">
                        <a href="template-list.php" class="btn btn--browse-cat">Browse All Templates<i
                                class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">

                        <div class="products-tabs products-filter">

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane show fade active" id="chair">
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6 col-lg-3">
                                            <div class="product-item style3">
                                                <div class="product--img">
                                                    <img style="width: 210px; height: 272px;"
                                                        src="assets/images/products/related/5.jpg" alt="product" />
                                                    <span class="featured-item">hot</span>

                                                    <div class="product--hover">
                                                        <div class="product--action">
                                                            <a href="template-list.php"><i
                                                                    class="fa fa-paint-brush"></i></a>
                                                            <?php
                                                           if(isset($_SESSION['login_user'])) 
                                                            {
                                                            echo' <a href="download.php?name=templates/7.docx"><i
                                                            class="fa fa-arrow-down"></i></a>';
                                                            }
                                                            else
                                                            {
                                                            echo' <a href="../Login/log.php"><i
                                                            class="fa fa-arrow-down"></i></a>';                    }
                                                            ?>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-3">
                                            <div class="product-item style3">
                                                <div class="product--img">
                                                    <img style="width: 210px; height: 272px;"
                                                        src="assets/images/products/related/2.jpg" alt="product" />
                                                    <div class="product--hover">
                                                        <div class="product--action">
                                                            <a href="template-list.php"><i
                                                                    class="fa fa-paint-brush"></i></a>
                                                            <?php
                                                           if(isset($_SESSION['login_user'])) 
                                                            {
                                                            echo' <a href="download.php?name=templates/3.docx"><i
                                                            class="fa fa-arrow-down"></i></a>';
                                                            }
                                                            else
                                                            {
                                                            echo' <a href="../Login/log.php"><i
                                                            class="fa fa-arrow-down"></i></a>';                    }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6 col-lg-3">
                                            <div class="product-item style3">
                                                <div class="product--img">
                                                    <img style="width: 210px; height: 272px;"
                                                        src="assets/images/products/related/3.jpg" alt="product" />
                                                    <div class="product--hover">
                                                        <div class="product--action">
                                                            <a href="template-list.php"><i
                                                                    class="fa fa-paint-brush"></i></a>
                                                            <?php
                                                           if(isset($_SESSION['login_user'])) 
                                                            {
                                                            echo' <a href="download.php?name=templates/5.docx"><i
                                                            class="fa fa-arrow-down"></i></a>';
                                                            }
                                                            else
                                                            {
                                                            echo' <a href="../Login/log.php"><i
                                                            class="fa fa-arrow-down"></i></a>';                    }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6 col-lg-3">
                                            <div class="product-item style3">
                                                <div class="product--img">
                                                    <img style="width: 210px; height: 272px;"
                                                        src="assets/images/products/related/4.jpg" alt="product" />
                                                    <span class="featured-item featured-item2">new</span>
                                                    <div class="product--hover">
                                                        <div class="product--action">
                                                            <a href="template-list.php"><i
                                                                    class="fa fa-paint-brush"></i></a>
                                                            <?php
                                                           if(isset($_SESSION['login_user'])) 
                                                            {
                                                            echo' <a href="download.php?name=templates/6.docx"><i
                                                            class="fa fa-arrow-down"></i></a>';
                                                            }
                                                            else
                                                            {
                                                            echo' <a href="../Login/log.php"><i
                                                            class="fa fa-arrow-down"></i></a>';                    }
                                                            ?>

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
                </div>
            </div>
        </section>




        <footer id="footerParallax" class="footer footer-1">
            <div class="container pr-40 pl-40">
                <div class="footer-widget">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-4 text-center-xs widget--links">
                            <div class="widget--content">
                                <ul class="list-unstyled">
                                    <li><a href="#">About Us </a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Term & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-4 text-center widget--logo">
                            <div class="widget--content">
                                <div class="widget--logo-img">
                                    <img style="width: 160px; height: 56px;"
                                        src="/projet_web/home/assets/images/logo/logo-cv2.png" alt="logo">
                                </div>
                            </div>
                            <div class="footer--copyright">
                                <span>&copy; 2021 CV TEMP - All Rights Reserved, by </span><a href="#">ηγέτης</a>
                            </div>
                        </div>
                        <div
                            class="col-sm-12 col-md-12 col-lg-4 text-right text-center-xs text-center-sm widget--social">
                            <div class="widget--content">
                                <div class="social--icons">
                                    <span>Follow Us On Social</span>
                                    <a class="facebook" href="#">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a class="twitter" href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a class="google-plus" href="#">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                    <a class="instagram" href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/functions.js"></script>
    <script src="assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/rsconfig.js"></script>

</body>

</html>