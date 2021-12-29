<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Open Blog" />
        <meta name="author" content="Kelompok 7" />
        <title><?= $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/open-blog-logo-mini.png" />
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />
    </head>
    <body>
        <div class="login">
            <div class="navbar">
                <a href="/" class='image'>
                    <img src="<?php echo base_url(); ?>assets/open-blog-logo.png" alt="Logo" class="image" />
                </a>
                <div class="right">
                    <a href="about" class="signInText">
                        About Us
                    </a>
                    <a href="login" class="signInText">
                        Sign In
                    </a>
                    <a href="signup" class="signUpText">
                        Get Started
                    </a>
                </div>
            </div>

            <div class="main">
                <div class="container">
                    <p class="title">Sign Up</p>
                    <p class="lead">Beberapa langkah lagi untuk memulai menjadi orang sukses</p>
                    <form class="form" action="<?= base_url('signup'); ?>" method="POST">
                        <p className="text">Email address</p>
                        <input type="email" id="email" name="email" class="fill" placeholder="email" />
                        <p className="text">Password</p>
                        <input type="password" class="fill" placeholder="Password" />
                        <div class="bottom">
                            <button class="button" type="submit">Sign Up</button>
                            <a href="login" class="signUpText">
                                Saya sudah punya akun
                            </a>   
                            <div>
                                <p class="lead"><?= $this->session->flashdata('error'); ?></p>
                                <p class="lead"><?= validation_errors(); ?></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="footer">
                <p class="footer">
                    Copyright &copy; Open Blog 2021
                </p>
            </div>
        </div>
    </body>
</html>
