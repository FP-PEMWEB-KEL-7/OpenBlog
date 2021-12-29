<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?= $title; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo base_url(); ?>css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
                <div class="container px-5">
                    <a class="navbar-brand" href="home"><img src="<?php echo base_url(); ?>assets/medium-logo.png" style="width : 150px"; alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="write.html"><img src="<?php echo base_url(); ?>assets/plus.png" style="width:20px"></a></li>
                            <li><div class="dropdown">
                                <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="">
                                        <img class="rounded-circle" width="30px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                                      </div>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                  <li><a class="dropdown-item" href="setting">Settings</a></li>
                                  <hr>
                                  <li><a class="dropdown-item text-danger" href="logout">Log out</a></li>
                                </ul>
                              </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            
            <hr class= "mx-auto" style="border: 1px black; width:800px; align : center;">
            <!-- Blog preview section-->
            <section class="py-5">
                <div class="container px-5 my-2">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Find Your Article</h2>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
						<?php
							foreach ($artikels as $artikel) {
						?>
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <div class="card-body p-4">
                                    <a class="text-decoration-none link-dark stretched-link" href="post_login.html"><h5 class="card-title mb-3"><?= $artikel->title; ?></h5></a>
                                    <p class="card-text mb-0"><?= $artikel->content; ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold"><?= $artikel->author_name; ?></div>
                                                <div class="text-muted"><?= $artikel->createdAt; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
							}
						?>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; Open Blog 2021</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo base_url(); ?>js/scripts.js"></script>
    </body>
</html>
