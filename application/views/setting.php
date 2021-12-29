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
                            <li>
								<div class="dropdown">
									<button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
										<div class="">
											<img class="rounded-circle" width="30px" src="<?= $akun->gambar_link ? $akun->gambar_link : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; ?>">
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
            <div class="container rounded bg-white mt-10 mb-5">
                <div class="row">
                    <div class="col-md-3 border-right">
                        <div class="d-flex flex-column align-items-center text-center p-3">
							<img class="rounded-circle mt-5" width="150px" height="180px" src="<?= $akun->gambar_link ? $akun->gambar_link : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; ?>">
							<span class="font-weight-bold"><?= $akun->name; ?></span>
							<span class="text-black-50"><?= $akun->email; ?></span>
							<span> </span>
						</div>
                    </div>
                    <div class="col-md-8 border-right">
                        <div class="p-3 py-5">
							<form action="<?= base_url('setting'); ?>" method="POST" class="container">
								<div class="d-flex justify-content-between align-items-center mb-3">
									<h4 class="text-right">Pengaturan Akun</h4>
								</div>
								<div class="row mt-3">
									<label for="gambar_link" class="labels">Gambar</label>
									<input type="text" class="form-control" placeholder="Masukan URL" id="gambar_link" name="gambar_link" value="<?= $akun->gambar_link; ?>">
								</div>
								<div class="row mt-3">
									<label for="name" class="labels">Nama</label>
									<input type="text" class="form-control" placeholder="Masukan Nama" id="name" name="name" value="<?= $akun->name; ?>">
								</div>
								<div class="row mt-3">
									<label for="password" class="labels">Password</label>
									<input type="password" class="form-control" placeholder="Masukan Password" id="password" name="password" value="<?= $password_raw; ?>">
								</div>
								<div class="row mt-3">
									<?= $this->session->flashdata('error'); ?>
									<?= validation_errors(); ?>
								</div>
								<div class="mt-5 text-center" style="align-text:center;"><button class="btn btn-primary profile-button" type="submit">Simpan</button></div>
							</form>
						</div>
                    </div>
                </div>
            </div>

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
