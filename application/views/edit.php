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
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #ffffff;">
				<div class="container align-items-center px-5">
                    <a class="navbar-brand" href="<?= base_url('home'); ?>"><img src="<?php echo base_url(); ?>assets/open-blog-logo.png" style="width : 150px"; alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('write'); ?>"><img src="<?php echo base_url(); ?>assets/plus.png" style="width:20px"></a></li>
                            <li>
								<div class="dropdown">
									<button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="">
											<img class="rounded-circle" width="30px" src="<?= $akun->gambar_link ? $akun->gambar_link : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; ?>">
										</div>
									</button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
										<li><a class="dropdown-item" href="<?= base_url('setting'); ?>">Settings</a></li>
										<hr>
										<li><a class="dropdown-item text-danger" href="<?= base_url('logout'); ?>">Log out</a></li>
									</ul>
								</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            

        <!-- WRITE -->
        <div class="text-center" style="margin-top : 70px;">
            <h1 class="fw-bolder">Tuliskan Artikel Anda</h1>
            <p class="lead fw-normal text-muted mb-0">tulis sesuai dengan kreatifitas anda</p>
        </div>
        <form action="<?= base_url('edit/'.$artikel->id); ?>" method="POST" class="container" style="margin-top : 30px;">
            <div class="mb-3">
			    <label for="gambar_link" class="labels"><h3>Gambar</h3></label>
			    <input type="text" class="form-control" placeholder="Masukan URL" id="gambar_link" name="gambar_link" value="<?= $artikel->poster; ?>">
			</div>
            <div class="mb-3">
                <label for="title" class="form-label"><h3>Judul</h3></label>
                <input type="title" name="title" id="title" class="form-control" placeholder="Judul" aria-describedby="passwordHelpBlock" value="<?= $artikel->title; ?>">
            </div>
            <center>
            <hr style="width: 700px;">
            </center>
            <div class="mb-3">
                <label for="cerita" class="form-label"><h3>Tuliskan Cerita Anda</h3></label>
                <textarea class="form-control" name="cerita" id="cerita" rows="3"><?= $artikel->content; ?></textarea>
            </div>
            <div class="row mt-3">
				<?= $this->session->flashdata('message'); ?>
				<?= validation_errors(); ?>
			</div>
			<div class="mt-5 text-center" style="align-text:center;"><button class="btn btn-primary profile-button" type="submit">Simpan</button>
            </div>
            <br>
            <br>
        </form>
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
