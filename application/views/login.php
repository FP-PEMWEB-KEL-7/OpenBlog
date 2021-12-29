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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="d-flex flex-column bg-light">
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
        </main>

        <div class="text-center" style="margin-top : 70px;">
            <h1 class="fw-bolder">LOGIN</h1>
            <p class="lead fw-normal text-muted mb-0">Kembalilah menulis agar produktif</p>
        </div>
        
        <!-- form login -->
        <form action="<?= base_url('login'); ?>" method="POST" class="container" style="margin-top : 30px;">
            <div class="row">
                <div class="d-flex flex-column flex-nowrap col-md-6 offset-md-3 shadow p-3 mb-5 bg-body rounded">
                    <div class="mb-3 m-2">
                        <label for="password" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3 m-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
					<div class="d-flex flex-column flex-nowrap mb-3 m-2">
						<div>
							<?= $this->session->flashdata('error'); ?>
						</div>
						<div>
							<?= validation_errors(); ?>
						</div>
                    </div>
					<div class="d-flex flex-row flex-nowrap align-items-center mb-3 m-2">
						<button type="submit" class="btn btn-primary">Masuk</button>
						<a href="signup" class="ms-auto">Belum punya akun?</a>
					</div>
                </div>
            </div>
        </form>

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
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>
