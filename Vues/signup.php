<?php 
    session_start();
?>
<!DOCTYPE html>
<head>
    <title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="SHORTCUT ICON" href="../assets/images//Forum_Picture.ico" />
    <link href="../assets/css/navbar-top-fixed.css" rel="stylesheet">
    <script src="../bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<html>

<body  style="padding-top: 0 !important;">
    <!--Header-->
    <?php include(dirname(__FILE__).'/header.php'); ?>
    <!--Contenu-->
    <section class="vh-100 " >
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="POST" action="/../Forum/Controllers/signup.php">

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name">Your Name</label>
                                        <input type="text" id="name" class="form-control form-control-lg" name="name" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="mail">Your Email</label>
                                        <input type="mail" id="mail" class="form-control form-control-lg" name="mail" />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password2">Repeat your password</label>
                                        <input type="password" id="password2" class="form-control form-control-lg" name="password2" />
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <label class="form-check-label" for="agreement">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="agreement" required/>
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Sign up</button>
                                    </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!--Footer-->
    <section class="container">
        <?php include 'footer.php'; ?>
    </section>
</body>

</html>