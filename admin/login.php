<div class="container">
    <div class="d-flex flex-column min-vh-100 px-3 pt-4">
        <div class="row justify-content-center my-auto">
            <div class="col-md-8 col-lg-6 col-xl-4">

                <div class="text-center  py-5">
                    <div class="mb-4 mb-md-5">
                        <a href="index.html" class="d-block auth-logo">
                            <img src="assets/images/logo-dark.png" alt="" height="22" class="auth-logo-dark">
                        </a>
                    </div>
                    <div class="mb-4">
                        <h5>Welcome Back !</h5>
                        <p class="text-danger">
                            <?php
                                if(isset($_POST['logmit']) && !isset($_SESSION['login'])){
                                    echo "Wrong username or password.";
                                }
                            ?>
                        </p>
                    </div>
                    <form method="post">
                        <div class="form-floating form-floating-custom mb-3">
                            <input type="text" name="username" class="form-control" id="input-username" placeholder="Enter User Name">
                            <label for="input-username">Username</label>
                            <div class="form-floating-icon">
                                <i class="uil uil-users-alt"></i>
                            </div>
                        </div>
                        <div class="form-floating form-floating-custom mb-3">
                            <input type="password" name="password" class="form-control" id="input-password"
                                placeholder="Enter Password">
                            <label for="input-password">Password</label>
                            <div class="form-floating-icon">
                                <i class="uil uil-padlock"></i>
                            </div>
                        </div>

                        <div class="form-check form-check-info font-size-16">
                            <input class="form-check-input" type="checkbox" id="remember-check">
                            <label class="form-check-label font-size-14" for="remember-check">
                                Remember me
                            </label>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-info w-100" type="submit" name="logmit">Log In</button>
                        </div>

                        <div class="mt-4">
                            <a href="auth-resetpassword-basic.html" class="text-muted text-decoration-underline">Forgot
                                your password?</a>
                        </div>
                    </form><!-- end form -->
                </div>
            </div><!-- end col -->
        </div><!-- end row -->

        

    </div>
</div>