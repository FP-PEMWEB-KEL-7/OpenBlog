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
    <body class="d-flex flex-column">
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
            <hr style="border: 1px black;">
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-3">
                            <div class="d-flex align-items-center mt-lg-5 mb-4">
                                <img width="50" height="50" class="img-fluid rounded-circle" src="<?= $artikel->author_photo ? $artikel->author_photo : 'https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg'; ?>" alt="<?= $artikel->author_name; ?>" />
                                <div class="ms-3">
                                    <div class="fw-bold"><?= $artikel->author_name; ?></div>
                                    <div class="text-muted"><?= $artikel->author_email; ?></div>
                                </div>
                            </div>
							<?php
								if ($artikel->author_id == $akun->id) {
							?>
							<a href="<?= base_url('confirm_delete/'.$artikel->id); ?>" role="button" class="btn btn-danger btn-sm mx-2">Hapus</a>
							<a href="<?= base_url('edit/'.$artikel->id); ?>" role="button" class="btn btn-primary btn-sm mx-2">Ubah</a>
							<?php
								}
							?>
						</div>
                        <div class="col-lg-9">
                            <!-- Post content-->
                            <article>
                                <!-- Post header-->
                                <header class="mb-4">
                                    <!-- Post title-->
                                    <h1 class="fw-bolder mb-1"><?= $artikel->title; ?></h1>
                                    <!-- Post meta content-->
                                    <div class="text-muted fst-italic mb-2">
										<?php 
											$date = date_create($artikel->createdAt); 
											echo date_format($date, 'F d, Y');
										?>
									</div>
                                </header>
                                <!-- Preview image figure-->
								<?php if (!empty($artikel->poster)) { ?>
                                	<figure class="mb-4"><img class="img-fluid rounded" src="<?= $artikel->poster; ?>" alt="<?= $artikel->author_name; ?>" /></figure>
                                <?php } ?>
									<!-- Post content-->
                                <section class="mb-5">
									<?php 
										$paragraphs = explode("\n", $artikel->content);
										foreach ($paragraphs as $paragraph) {
											if (!empty($paragraph)) {
												echo "<p class='fs-5 mb-4'>$paragraph</p>";
											}
										}
									?>
                                </section>
                            </article>
                            
                            </section>
                        </div>
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
