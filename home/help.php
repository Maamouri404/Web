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

h1 {
    font-size: clamp(20px, 4vw, 30px);
    line-height: 1.2;
    margin-bottom: 40px;
    margin-top: 150px;
}

main {
    max-width: 520px;
    margin: 0 auto;
}

summary {
    font-size: 1.25rem;
    font-weight: 600;
    background-color: #fafafa;
    background-image: radial-gradient(circle at 40% 91%, rgba(251, 251, 251, 0.04) 0%, rgba(251, 251, 251, 0.04) 50%, rgba(229, 229, 229, 0.04) 50%, rgba(229, 229, 229, 0.04) 100%), radial-gradient(circle at 66% 97%, rgba(36, 36, 36, 0.04) 0%, rgba(36, 36, 36, 0.04) 50%, rgba(46, 46, 46, 0.04) 50%, rgba(46, 46, 46, 0.04) 100%), radial-gradient(circle at 86% 7%, rgba(40, 40, 40, 0.04) 0%, rgba(40, 40, 40, 0.04) 50%, rgba(200, 200, 200, 0.04) 50%, rgba(200, 200, 200, 0.04) 100%), radial-gradient(circle at 15% 16%, rgba(99, 99, 99, 0.04) 0%, rgba(99, 99, 99, 0.04) 50%, rgba(45, 45, 45, 0.04) 50%, rgba(45, 45, 45, 0.04) 100%), radial-gradient(circle at 75% 99%, rgba(243, 243, 243, 0.04) 0%, rgba(243, 243, 243, 0.04) 50%, rgba(37, 37, 37, 0.04) 50%, rgba(37, 37, 37, 0.04) 100%), linear-gradient(90deg, rgb(34, 222, 237), rgb(135, 89, 215));
    color: #fff;
    padding: 1rem;
    margin-bottom: 1rem;
    outline: none;
    border-radius: 0.25rem;
    text-align: left;
    cursor: pointer;
    position: relative;
}

p {
    text-align: left;
}

details[open] summary~* {
    animation: sweep .5s ease-in-out;
}

@keyframes sweep {
    0% {
        opacity: 0;
        margin-top: -10px
    }

    100% {
        opacity: 1;
        margin-top: 0px
    }
}

details>summary::after {
    position: absolute;
    content: "+";
    right: 20px;
}

details[open]>summary::after {
    position: absolute;
    content: "-";
    right: 20px;
}

details>summary::-webkit-details-marker {
    display: none;
}

.titrefq {
    text-align: center;
    font-size: 2.4rem;
    color: #0073b1;
    font-weight: 600;
    margin-bottom: 3em;
}

.titrefq small {
    margin-top: 10px;
    display: block;
    color: #666;
    font-size: 1.2rem;
}
</style>

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="Maamouri_Taher&Fkiri_Samed" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Multi-purpose Business html5 template">
    <link href="assets/images/favicon/iconl.png" rel="icon">







    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i"
        rel="stylesheet">


    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link href="assets/css/external.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/btn.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <title>CV TEMP | Help Center</title>

</head>
<?php  
session_start(); 
?>

<body>
    <div class="preloader">
        <div class="loader-eclipse">
            <div class="loader-content"></div>
        </div>
    </div>



    <div id="wrapperParallax" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1  header-6 header-transparent header-white">
            <nav id="primary-menu" class="navbar navbar-expand-lg navbar-light" style=" box-shadow:none !important; ">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./home-6.php"><img style="width: 160px; height: 56px;"
                                src="/projet_web/home/assets/images/logo/logo-cv3.png" alt=""></a>
                    </div>
                    <ul class="nav navbar-nav">
                        <li><a class="nav-i" href="./home-6.php">Home</a></li>
                        <li><a class="nav-i" href="template-list.php">Templates</a></li>
                        <li><a class="nav-i" href="./help.php">Help Center</a></li>
                        <li><a class="nav-i" href="#">About Us</a></li>
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


        <section id="page-title" class="page-title bg-parallax">
            <div class="bg-section">
                <img src="assets/images/page-title/9.jpg" alt="background">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title title-3 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1 style="font-weight:800!important; font-size: 5em!important;">Help Center</h1>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <ol class="breadcrumb">
                                <li><a href="./home-6.php">Home</a></li>
                                <li class="active">Help Center</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="backlst">

            <h1 class="titrefq">Creating a CV has never been so simple
                <small>Information, frequently asked questions and tips regarding the CV .
                </small>
            </h1>
            <main>
                <details>
                    <summary>What is a CV?</summary>
                    <div class="faq__content">
                        <p>A CV is a summary of someone’s professional background. It is the abbreviation of the Latin
                            “curriculum vitae”, which means “life course”. Your CV summarizes your studies, diplomas,
                            professional experiences and skills. The CV enables
                            the recruiter to make up his mind about your experience and skills in order to assess your
                            ability to fill a vacancy.</p>
                    </div>
                </details>

                <details>
                    <summary>What is the CV composed of?</summary>
                    <div class="faq__content">
                        <p>A CV is generally composed of the following information: Essential personal details: first
                            name and last name, address, locality, email address, phone number(s).. Optional/additional
                            details: identity photo, gender, birth date,
                            birth place, nationality, civil status, driving licence, a link to a website or your social
                            networks profiles (LinkedIn, Facebook).). Academical and/or professional background: your
                            studies (include the date of awarding of
                            a certificate or degree and the date of issue), your professional experiences (employers,
                            positions and assignments conducted), your skills, languages skills, the courses
                            (trainings), the internships you did, the extra-professional
                            activities (volunteer activities for example), your recommendations, hobbies and personality
                            traits. All the information must be comprehensive and correct (be careful with languages,
                            which you actually have to master).</p>
                    </div>
                </details>
                <details>
                    <summary>Chronology and chronological CV</summary>
                    <div class="faq__content">
                        <p>The chronological CV is the most commonly used form of CV. A chronological CV must mention
                            the most recent studies and professional experiences first. Your last job (the most recent
                            one) must appear in the first position (on top
                            of the list), and your first job in the last position (at the bottom of the list). This also
                            applies to your experiences’ section, in which you include the experiences that held in a
                            specific period of time. Examples: studies,
                            courses attended, internships and extra-professional activities. The sections of your CV
                            must appear in the following order: personal and contact details, followed by a possible
                            brief description of your personal profile. Next,
                            mention your studies and professional experiences, your skills (languages…) and personality
                            traits and interests.</p>
                    </div>
                </details>
                <details>
                    <summary>How to write a CV (or a covering letter)</summary>
                    <div class="faq__content">
                        <p>You can write a CV using a word-processing software such as Microsoft Word. Browse a free CV
                            example or a template online and look if you can reproduce it. Or opt for using our CV
                            generator: simply enter your information and download
                            a perfect CV in only 15 minutes. The same goes for covering letters. When you have completed
                            your CV and covering letter, send them by email to the recruiter to apply for the job you
                            are looking for.</p>
                    </div>
                </details>

                <details>
                    <summary>Tips to write a perfect CV</summary>
                    <div class="faq__content">
                        <p>In our CV generator, you will find tips grouped per topics that will help you write an
                            optimal CV. Here are a few general tips: - Only give relevant information that convey an
                            added value for the job you are applying for. - Do
                            not mention weird hobbies or interests that could raise certain questions. - The main
                            information must appear on the first page. Add a brief description of your personal profile.
                            - Use bulleted and numbered lists in order to
                            improve the clarity of your CV for the recruiters. - Always go for a chronological CV,
                            except otherwise required in the job offer. - Be brief but persuasive when presenting your
                            CV. Mention the important information in a concise
                            manner.
                        </p>
                    </div>
                </details>





                <details>
                    <summary>Can I add a picture to my CV?</summary>
                    <div class="faq__content">
                        <p>In the first step of our CV maker , you can add a photo to your CV. Simply click on the photo
                            icon . You can then upload, edit, and then add your photo to your CV. </p>
                    </div>
                </details>
                <details>
                    <summary>Is my CV also available for download in Word?</summary>
                    <div class="faq__content">
                        <p>Yes you can xD</p>
                    </div>
                </details>


            </main>


        </section>


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
                        </div>
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
                    </div>
                </div>
            </div>
        </footer>


        <script src="assets/js/mdb.min.js"></script>
        <script src="assets/js/jquery-3.3.1.min.js "></script>
        <script src="assets/js/plugins.js "></script>
        <script src="assets/js/functions.js "></script>
        <script src="https://kit.fontawesome.com/ddd5622fc1.js" crossorigin="anonymous"></script>

</body>

</html>