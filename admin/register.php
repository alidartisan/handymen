
<!doctype html>
<html lang="en">

    
<!-- Mirrored from preview.pichforest.com/dashonic/layouts/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:02:36 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Signup | Dashonic - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Pichforest" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

        <div class="authentication-bg min-vh-100">
            <div class="bg-overlay bg-white"></div>
            <div class="container">
                <div class="d-flex flex-column min-vh-100 px-3 pt-4">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="text-center py-5">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="assets/images/logo-dark.png" alt="" height="22" class="auth-logo-dark">
                                        <img src="assets/images/logo-light.png" alt="" height="22" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="mb-4">
                                    <h5 class="">Register Account</h5>
                                    <p>
                                        <?=(isset($_GET['err'])) ? 'User Found.' : ''?>
                                    </p>
                                </div>
                                <form method="post" action="signup.php">
                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="email" name="email" class="form-control" id="input-email" placeholder="Enter Email">
                                        <label for="input-email">Email</label>
                                        <div class="form-floating-icon">
                                            <i class="uil uil-envelope-alt"></i>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="text" name="user" class="form-control" id="input-username" placeholder="Enter User Name">
                                        <label for="input-username">Username</label>
                                        <div class="form-floating-icon">
                                            <i class="uil uil-users-alt"></i>
                                        </div>
                                    </div>
                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Enter Password">
                                        <label for="floatingPassword">Password</label>
                                        <div class="form-floating-icon">
                                            <i class="uil uil-padlock"></i>
                                        </div>
                                    </div>

                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="password" name="pass2" class="form-control" id="floatingPassword" placeholder="Enter Password">
                                        <label for="floatingPassword">Password</label>
                                        <div class="form-floating-icon">
                                            <i class="uil uil-padlock"></i>
                                        </div>
                                    </div>

                                    <div class="text-start">
                                        <p>By registering you agree to the Dashonic <a href="#" class="text-decoration-underline">Terms of Use</a></p>
                                    </div>

                                    <div class="mt-3">
                                        <button class="btn btn-info w-100" type="submit" name="regmit">Register</button>
                                    </div>
                                </form><!-- end form -->

                                <div class="mt-5 text-center">
                                    <p>Already have an account ? <a href="auth-signin-basic.html" class="fw-medium text-decoration-underline"> Signin </a></p>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center text-muted p-4">
                                <p class="mb-0">&copy; <script>document.write(new Date().getFullYear())</script> Dashonic. Crafted with <i class="mdi mdi-heart text-danger"></i> by Pichforest</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- end container -->
        </div>
        <!-- end authentication section -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

    </body>

<!-- Mirrored from preview.pichforest.com/dashonic/layouts/auth-signup-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 17 Nov 2023 11:02:36 GMT -->
</html>
