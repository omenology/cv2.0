<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center mb-4">
      <h1 class="h3 mb-0 text-gray-800 mr-3">Profile</h1><a href="#"><i class="far fa-edit"></i></a>
   </div>
   <!-- Content Row -->
   <div class="row">
      <div class="col-6">
         <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
               <div class="col-md-4 p-2">
                  <img src="<?=base_url()?>assets/img/<?=$profile['photo'] ?>" class="card-img" alt="...">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                     <h5 class="card-title"><?=$profile['nama']; ?></h5>
                     <p class="card-text"><small class="text-muted">Garut <?=$profile['lahir']; ?></small></p>
                     <p class="card-text"><?=$profile['alamat']; ?></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="card-body">
                     <h5 class="card-title">Bio singkat</h5>
                     <p class="card-text text-justify"><?=$profile['deskripsi']; ?></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-12">
                  <div class="card-body pb-0">
                     <h5 class="card-title">Social Media</h5>
                  </div>
               </div>
            </div>
            <div class="row p-3">
               <div class="col-12">
               <?php foreach ($kontak as $row) : ?>
                  <a href="<?=$row['isi']; ?>" class="btn btn-primary btn-sm"><?= $row['nama']; ?></a>
               <?php endforeach; ?>
               </div>
            </div>
         </div>
      </div>
      <div class="col-6 d-flex align-items-center">
         <img class="w-100" src="<?=base_url()?>assets/img/undraw_surveillance_kqll.svg">
      </div>
   </div>
</div>
<!-- /.container-fluid -->