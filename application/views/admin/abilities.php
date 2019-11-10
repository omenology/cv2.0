<!-- Begin Page Content -->
<div class="container-fluid">
   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center mb-4">
      <h1 class="h3 mb-0 text-gray-800 mr-3">Abilities : <?=$jenis ?></h1>
   </div>
   <!-- Content Row -->
   <div class="row">
      <div class="col-12">
         <table id="example" class="table" style="width:100%">
            <thead>
               <tr>
                  <th style="width: 6%;">No</th>
                  <th>Nama</th>
                  <th>Value</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <?php $i=1; ?>
               <?php foreach($kemampuan as $row): ?>
               <?php if($row['jenis'] == $jenis): ?>
               <tr>
                  <td><?=$i; ?></td>
                  <td><?=$row['nama']; ?></td>
                  <td><?=$row['value']; ?> Bintang</td>
                  <td><a href="#" class="badge badge-secondary mr-1">edite</a><a href="#" class="badge badge-danger">delete</a></td>
               </tr>
               <?php $i++; ?>
               <?php endif; ?>
               <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
               <th>No</th>
               <th>Nama</th>
               <th>Value</th>
               <th>Action</th>
            </tr>
            </tfoot>
         </table>
      </div>
   </div>
</div>
<!-- /.container-fluid -->