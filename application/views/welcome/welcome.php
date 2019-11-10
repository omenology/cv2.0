	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?=base_url() ?>assets/css/style.css">
</head>
<body>
	<div class="container-fluid p-0">
		<div id="spybar">
			<div class="menu">
				<a href="#profile">Profile</a>
				<a href="#experience">Experiences</a>
				<a href="#abilitie">Abilities</a>
				<a href="#projects">Projects</a>
				<a href="#contacts">Contac</a>
			</div>
		</div>
		<div id="banner">
			<div style="background: url(<?=base_url() ?>assets/img/layer6.png);"></div>
			<div style="background: url(<?=base_url() ?>assets/img/layer5.png);"></div>
			<div style="background: url(<?=base_url() ?>assets/img/layer4.png);"></div>
			<div style="background: url(<?=base_url() ?>assets/img/layer3.png);"></div>
			<div style="background: url(<?=base_url() ?>assets/img/layer2.png);"></div>
			<div style="background: url(<?=base_url() ?>assets/img/layer1.png);"></div>
		</div>
		<div id="profile" class="row py-4 row d-flex justify-content-center">
			<div class="col-10">
				<div class="row">
					<div class="col-12 border-bottom py-4 my-4">
						<h2 class="text-center">Profile</h2>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-md-6 col-12 d-flex justify-content-center align-items-center mb-3">
						<img class="rounded-circle" src="<?=base_url()?>assets/img/<?=$profile['photo'] ?>" style="width: 45%;">
					</div>
					<div class="col-md-6 col-12">
						<div class="tentang-saya">
							<h3>Tentang Saya</h3>
							<p style="text-indent: 50px; text-align: justify;"><?=$profile['deskripsi'] ?></p>
							<h3>Hobby</h3>
							<p>
							Fotography, Adventure, nonton film dan membaca cerita.</p>
							<h3>Social Media</h3>
							<a href="https://www.instagram.com/omenology/"><i class="fab fa-instagram"></i></a>
							<a href="https://www.facebook.com/ikballukmanulhakim/"><i class="fab fa-facebook-square"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="experience" class="row py-4 row d-flex justify-content-center pb-5">
			<div class="col-11 col-md-10">
				<div class="row">
					<div class="col-12 border-bottom py-4 my-4">
						<h2 class="text-center">Experiences</h2>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-5 border-bottom py-4 my-4">
						<h3 class="text-center">Education</h3>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-10">
						<div class="row py-3">
							<?php foreach ($pendidikan as $row):?>
							<div class="col-md-3 col-6 text-center">
								<img src="<?=base_url().'assets/img/'.$row['gambar']?>">
								<p><?=$row['intansi'] ?></p>
								<p><?=$row['tahun'] ?></p>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-5 border-bottom py-4 my-4">
						<h3 class="text-center">Careers</h3>
					</div>
				</div>
				<div class="row d-flex justify-content-center mt-3">
					<div class="col-3"><h4>Instansi</h4></div>
					<div class="col-7 text-center"><h4>Deskripsi</h4></div>
				</div>
				<div class="row d-flex justify-content-center">
					<div class="col-4 col-md-3">
						<p>Star Share - Semarang</p>
						<p>September 2019 - Nopember 2019</p>
					</div>
					<div class="col-8 col-md-7">
						<p class="text-justify">STAR SHARE adalah sebuah holding company yang mengelola dan mengendalikan berbagai jenis anak usaha yang telah di bangun nya. dan ini adalah pengalaman magang pertama saya semenjak masuk di jursan Teknik Informatika, dan yang saya kerjakan di sini lebih ke perbaikan web dan internet marketing.</p>
					</div>
				</div>
			</div>
		</div>
		<div id="abilitie" class="row py-4 row d-flex justify-content-center pb-5">
			<div class="col-10">
				<div class="row">
					<div class="col-12 border-bottom py-4 my-4">
						<h2 class="text-center">Abilities</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-3 my-3 border-bottom">
						<h3>Skills</h3>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<?php foreach($kemampuan as $row): ?>
					<?php if($row['jenis'] == 'skill'): ?>
					<div class="list-kemampuan col-md-5 col-12">
						<div class="row d-flex justify-content-between">
							<div class="col-5 my-1"><?=$row['nama'] ?></div>
							<div class="col-5 my-1 d-flex justify-content-end">
								<?php for($i=0;$i<$row['value'];$i++): ?>
								<i class="fas fa-star"></i>
								<?php endfor; ?>
								<?php for($i=0;$i<5-$row['value'];$i++): ?>
								<i class="far fa-star"></i>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="row">
					<div class="col-3 my-3 border-bottom">
						<h3>Languages</h3>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<?php foreach($kemampuan as $row): ?>
					<?php if($row['jenis'] == 'language'): ?>
					<div class="list-kemampuan col-md-5 col-12">
						<div class="row d-flex justify-content-between">
							<div class="col-5 my-1"><?=$row['nama'] ?></div>
							<div class="col-5 my-1 d-flex justify-content-end">
								<?php for($i=0;$i<$row['value'];$i++): ?>
								<i class="fas fa-star"></i>
								<?php endfor; ?>
								<?php for($i=0;$i<5-$row['value'];$i++): ?>
								<i class="far fa-star"></i>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="row">
					<div class="col-3 my-3 border-bottom">
						<h3>Tools</h3>
					</div>
				</div>
				<div class="row d-flex justify-content-between">
					<?php foreach($kemampuan as $row): ?>
					<?php if($row['jenis'] == 'tool'): ?>
					<div class="list-kemampuan col-md-5 col-12">
						<div class="row d-flex justify-content-between">
							<div class="col-5 my-1"><?=$row['nama'] ?></div>
							<div class="col-5 my-1 d-flex justify-content-end">
								<?php for($i=0;$i<$row['value'];$i++): ?>
								<i class="fas fa-star"></i>
								<?php endfor; ?>
								<?php for($i=0;$i<5-$row['value'];$i++): ?>
								<i class="far fa-star"></i>
								<?php endfor; ?>
							</div>
						</div>
					</div>
					<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div id="projects" class="row py-4 row d-flex justify-content-center pb-5">
			<div class="col-11">
				<div class="row d-flex justify-content-center">
					<div class="col-11 border-bottom py-4 my-4">
						<h2 class="text-center">Projects</h2>
					</div>
				</div>
				<div class="row d-flex justify-content-center">
					<?php foreach($project as $row) : ?>
					<div class="item-projects col-md-5 col-sm-12 overflow-hidden p-0 m-2">
						<img src="<?=base_url().'assets/img/'.$row['gambar']; ?>">
						<a href="<?=$row['link']; ?>" target="_blank" class="gotosite"><i class="fas fa-sign-in-alt"></i></a>
						<section class="d-flex justify-content-center align-items-center">
							<div>
								<h3><?=$row['nama'] ?></h3>
								<p><?=$row['deskripsi'] ?></p>
							</div>
						</section>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="row d-flex justify-content-center my-3">
					<div class="col-md-3 col-6">
						<a href="https://github.com/omenology/" class="btn-lainnya btn btn-secondary d-flex align-items-center justify-content-center">	<h3 class="m-0 mr-2">Project lainya</h3><i class="fab fa-github"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div id="contacts"></div>
		<div id="contact" class="fixed-bottom d-flex justify-content-center align-items-center">
			<section class="text-center">
				<h2>Contact</h2>
				<a href="mailto:ikballukmanulhakim5@gmail.com?subject=&amp;body=Hi! Ikbal" target="_blank">ikballukmanulhakim5@gmail.com</a>
			</section>
		</div>
		<div id="copyright" class="fixed-bottom">
			<p class="text-center m-0">----- Copyright &copy; Omenology <?=date('Y'); ?> -----</p>
		</div>
	</div>
