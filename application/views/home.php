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
        <div class="home">
                <!-- Navigation-->
                <div class="navbar">
                    <a href="/" class='image'>
                        <img src="<?php echo base_url(); ?>assets/open-blog-logo.png" alt="Logo" class="image" />
                    </a>
                    <div class="right">
                        <a href="login" class="signInText">
                            Sign In
                        </a>
                        <a href="signup" class="signUpText">
                            Get Started
                        </a>
                    </div>
                </div>
    
                <!-- Banner-->
                <div class="banner">
                    <div class="main">
                        <p class='title'>Open Blog is a place for expression through words</p>
                        <p class="lead">It's easy and free to be creative and share your writing</p>
                        <a href='login' class="writeButton">
                            Start Writing
                        </a>
                    </div>
                </div>
    
                <!-- Blog preview section-->
                <div class="displayArticle">
                    <p class="title">Find Your Article</p>

                    <div class="search">
                        <form action="post">
                            <input type="text" class="fill" placeholder="Type your keyword here" autocomplete="off">
                            <input type="button" value="Search" class='button'>
                        </form>
                    </div>

                    <div class="mainDisplay">
                    <?php
                            foreach ($artikels as $artikel) {
                        ?>
                            <div class="cardArticle">
                                <div class="left">
                                    <div class="top">
                                        <img src="<?php echo base_url(); ?>assets/open-blog-logo-mini.png" alt="<?= $artikel->author_name; ?>">
                                        <p class="author"><?= $artikel->author_name; ?></p>
                                        <p class="time">
                                            <?php 
												$date = date_create($artikel->createdAt); 
												echo date_format($date, 'F d, Y');
											?>
                                        </p>
                                    </div>
                                    <div class="main">
                                        <p class="title"><?= $artikel->title; ?></p>
                                        <p class="description">
                                            <?= $artikel->content; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="right">
                                    <div class="image">
                                        <img src="https://miro.medium.com/fit/c/250/168/0*b6tqs9K4yPmIkM3D" alt="testing" class='image' />
                                    </div>
                                </div>
                            </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
    
                <!-- Footer-->
                <div class="footer">
                    <p class="footer">
                        Copyright &copy; Open Blog 2021
                    </p>
                </div>
        </div>
    </body>
</html>
