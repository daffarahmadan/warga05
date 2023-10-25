<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo site_url('Welcome'); ?>">Warga</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Master
			</a>
			<ul class="dropdown-menu">
				<li><a class="dropdown-item" href="<?php echo site_url('Welcome/blok'); ?>">Blok Kavling</a></li>
				<li><a class="dropdown-item" href="<?php echo site_url('Welcome/Penduduk'); ?>">Penduduk</a></li>
			</ul>
			</li>
    	</ul>
    </div>
  </div>
</nav>
<!-- navbar akhir -->

<!-- ini adalah container -->
<div class="container">

  <!-- ini adalah content -->
<?php $this->load->view($content); ?>
<!-- ini adalah akhir content -->

</div>
<!-- ini adalah akhir container -->

  	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>