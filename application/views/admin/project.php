<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center mb-4">
		<h1 class="h3 mb-0 text-gray-800 mr-3">Projects</h1>
	</div>
	<!-- Content Row -->
	<div class="row">
		<?php foreach ($project as $row) : ?>
		<div class="col-12">
			<div class="card mb-3">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="<?=base_url().'assets/img/'.$row['gambar']; ?>" class="card-img">
					</div>
					<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?= $row['nama']; ?></h5>
							<p class="card-text"><?= $row['deskripsi']; ?></p>
							<p class="card-text"><small class="text-muted"><?= $row['link']; ?></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach; ?>
	</div>
</div>
<!-- /.container-fluid -->