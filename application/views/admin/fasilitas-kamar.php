   <!-- Main Content -->
   <div class="main-content">
       <section class="section">
           <?php if ($this->session->flashdata('create')) : ?>
               <div class="flash-data" data-flashdata="<?= $this->session->flashdata('create'); ?>"></div>
           <?php endif ?>

           <div class="section-body">
               <div class="card card-primary">
                   <div class="card-header">
                       <h4><?= $title ?></h4>
                       <div class="card-header-action">
                           <button class="btn btn-primary" data-toggle="modal" data-target="#create"> Create </button>
                       </div>
                   </div>

                   <div class="card-body">
                       <div class="table-responsive">
                           <table class="table table-striped" id="table-1">
                               <thead>
                                   <tr class="text-center">
                                       <th>
                                           No
                                       </th>
                                       <th>Tipe Kamar</th>
                                       <th>Nama Fasilitas</th>
                                       <th>Aksi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $no = 1;
                                    foreach ($fasilitaskamar as $fk) : {
                                        } ?>
                                       <tr class="text-center">
                                           <td><?= $no++ ?></td>
                                           <td><?= $fk['tipe_kamar'] ?></td>
                                           <td><?= $fk['nama_fasilitas'] ?></td>
                                           <td>
                                               <button class="btn btn-success mr-1" data-toggle="modal" data-target="#update<?= $fk['id_fasilitas'] ?>">Ubah </button>
                                               <a href="<?= base_url('admin/delete_fas_kamar/' . $fk['id_fasilitas']) ?>" class="btn btn-danger tombol-hapus">Hapus</a>
                                           </td>
                                       </tr>
                                   <?php endforeach ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>

   <div class="modal fade" tabindex="-1" role="dialog" id="create">
       <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title">Create Fasilitas Kamar</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <form action="<?= base_url('admin/create_fas_kamar') ?>" method="post">
                       <div class="form-group">
                           <label>Tipe Kamar</label>
                           <select name="id_kamar" class="form-control select2">
                               <option value="" selected disabled>-- Silahkan Pilih Tipe Kamar --</option>
                               <?php foreach ($kamar as $km) : ?>

                                   <option value="<?= $km['id_kamar'] ?>">
                                       <?= $km['tipe_kamar'] ?>
                                   </option>
                               <?php endforeach ?>
                           </select>
                       </div>
                       <div class="form-group">
                           <label>Nama Fasilitas</label>
                           <input type="text" class="form-control" name="nama_fasilitas" placeholder="Masukkan Tipe Kamar">
                       </div>
               </div>
               <div class="modal-footer bg-whitesmoke br">

                   <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                   </form>
               </div>
           </div>
       </div>
   </div>

   <?php foreach ($fasilitaskamar as $fk) : {
        } ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="update<?= $fk['id_fasilitas'] ?>">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Modal title</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form action="<?= base_url('admin/update_fas_kamar/' . $fk['id_fasilitas']) ?>" method="post">
                           <div class="form-group">
                               <label>Tipe Kamar</label>
                               <input type="text" readonly class="form-control" value="<?= $fk['tipe_kamar'] ?>" name="id_kamar">
                           </div>
                           <div class="form-group">
                               <label>Nama Fasilitas</label>
                               <input type="text" class="form-control" value="<?= $fk['nama_fasilitas'] ?>" name="nama_fasilitas" placeholder="Masukkan Tipe Kamar">
                           </div>
                   </div>
                   <div class="modal-footer bg-whitesmoke br">

                       <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                       <button type="submit" class="btn btn-primary">Simpan</button>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   <?php endforeach ?>