<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Open Blog" />
        <meta name="author" content="Kelompok 7" />
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
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffffff;">
                <div class="container px-5">
                    <a class="navbar-brand" href="home"><img src="<?php echo base_url(); ?>assets/medium-logo.png" style="width : 150px"; alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="about">Tentang kami</a></li>
                            <li class="nav-item"><a class="nav-link" href="login">Masuk</a></li>
                            <li class="nav-item"><a class="btn btn-primary btn-lg rounded-pill mb-3" href="signup">Memulai</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <hr style="border: 1px black;">
            <!-- Header-->
            <header class="bg-dark py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-white mb-2">Open Blog</h1>
                                <p class="lead fw-normal text-white-50 mb-4">Tempat untuk menulisak dan membaca artike secara gratis.</p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-outline-light btn-lg px-4" href="login">Mulai menulis</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                    </div>
                </div>
            </header>
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
                                    <a class="text-decoration-none link-dark stretched-link" href="post.html"><h5 class="card-title mb-3"><?= $artikel->title; ?></h5></a>
                                    <p class="card-text mb-0"><?= $artikel->content; ?></p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" width="40px" src="<?= $artikel->author_photo ? $artikel->author_photo : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; ?>" alt="<?= $artikel->author_name; ?>" />
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
