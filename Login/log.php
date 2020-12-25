<!DOCTYPE html>

<html dir="ltr" lang="en-US">

<head>
    <!-- Document Meta
    ============================================= -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--IE Compatibility Meta-->
    <meta name="author" content="Taher" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="/images/modeles-de-cv-144x144-66x66.png" sizes="192x192">
    <script src="jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Fonts
    ============================================= -->
    <link
        href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i%7CMontserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CPlayfair+Display:400,400i"
        rel="stylesheet">

    <!-- Stylesheets
    ============================================= -->

    <link rel="stylesheet" href="./styleLogin.css">




    <!-- Document Title
    ============================================= -->
    <title>Login</title>
</head>
<style>
.swal-wide {
    width: 450px !important;
}
</style>

<body>


    <?php if (!empty($_GET['message'])) {
        $message = $_GET['message'];
        $type = $_GET['type'];
        echo '<script>
        document.addEventListener("DOMContentLoaded", () => {
    
            Swal.fire({
                position: "top-end",
                icon: "' . $type . '",
                title: "' . $message . '",
                customClass: "swal-wide",
                showConfirmButton: false,
                timer: 2000
            })
        })
        </script>';
    }
    ?>

    <!-- Page Title #1
============================================= -->
    <section id="page-title" class="page-title mt-0">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="title title-1 text-center">
                        <div class="title--content">
                            <div class="title--heading">
                                <h1>Login & Register</h1>
                            </div>
                        </div>

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

    <!-- register-login
============================================= -->
    <section id="register-login" class="register-login pt-30 pb-150">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <div class="register-title">
                        <h4>Login your account</h4>
                        <p>Login to your account to discovery all great features in this website</p>
                    </div>
                    <!-- .register-title end -->
                    <form action="./login.php" method="POST">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control" id="user-name"
                                        placeholder="User Name">
                                </div>
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" id="login-password"
                                        placeholder="Your Password">
                                </div>
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-40">
                                <div class="input-checkbox inline-block">
                                    <label class="label-checkbox">Keep me logged in
                                        <input type="checkbox" checked>
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                                <a href="#" class="forget--password"> Forgot your password?</a>
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-30">
                                <input class="btn btn--primary btn--rounded" type="submit" value="Login"></input>
                            </div>

                        </div>
                        <!-- .row end -->
                    </form>
                </div>
                <!-- .col-lg-6 end -->
                <div class="col-sm-12 col-md-6 col-lg-6 offset-lg-1">
                    <div class="register-title">
                        <h4>Register account now</h4>
                        <p>Create new account to discovery all great features in this website</p>
                    </div>
                    <!-- .register-title end -->
                    <form method="POST" action="./register.php">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="name"
                                        placeholder="Your Name">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control" id="register-user-name"
                                        placeholder="User Name">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input name="phone" type="text" class="form-control" id="Phone" placeholder="Phone">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control" id="register-password"
                                        placeholder="Password">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group mb-40">
                                    <input name="passwordc" type="password" class="form-control"
                                        id="register-password-confirm" placeholder="Re Password">
                                </div>
                            </div>
                            <!-- .col-lg-6 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-40">
                                <div class="input-checkbox inline-block">
                                    <label class="label-checkbox">I accept the terms and conditions, including the
                                        Privacy
                                        <input name="cond" type="checkbox">
                                        <span class="check-indicator"></span>
                                    </label>
                                </div>
                            </div>
                            <!-- .col-lg-12 end -->
                            <div class="col-sm-12 col-md-12 col-lg-12 mb-40">
                                <input type="submit" value="Register" class="btn btn--primary btn--rounded"></input>
                            </div>

                        </div>
                        <!-- .row end -->
                    </form>

                </div>
                <!-- .col-lg-6 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>







</body>

</html>