<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?= base_url('asset')?>/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?= base_url('asset')?>/css/style.css">
</head>

<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?= base_url('asset')?>/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="<?php echo base_url('Home/Register') ?>" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                            <!-- validation message for a successful login -->
                            <?php if ($this->session->flashdata('error')) {?>
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                        <?php echo $this->session->flashdata('error'); ?>
                                </div>
                                    <?php  } ?>
                            <!-- validation messages for taking inputs -->
                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>','</div>');
                                ?>
                        <?php echo form_open('Login/loginUser') ?>       
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account-circle"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                    me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="signin" class="form-submit" value="Sign in" />
                            </div>
                        </form>
                        <?php echo form_close() ?>

                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?= base_url('asset')?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('asset')?>/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>