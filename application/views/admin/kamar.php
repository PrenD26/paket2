   <!-- Main Content -->
   <div class="main-content">

       <section class="section">


           <div class="section-body">
               <?php if ($this->session->flashdata('dashboard')) : ?>
                   <div class="flash-data10" data-flashdata="<?= $this->session->flashdata('dashboard'); ?>"></div>
               <?php endif ?>
               <?php if ($this->session->flashdata('flash')) : ?>
                   <div class="flash-data8" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
               <?php endif ?>
               <?php if ($this->session->flashdata('create')) : ?>
                   <div class="flash-data" data-flashdata="<?= $this->session->flashdata('create'); ?>"></div>
               <?php endif ?>
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
                                       <th>Jumlah Kamar</th>
                                       <th>Aksi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $no = 1;
                                    foreach ($kamar as $kmr) : {
                                        } ?>
                                       <tr class="text-center">
                                           <td><?= $no++ ?></td>
                                           <td><?= $kmr['tipe_kamar'] ?></td>
                                           <td><?= $kmr['jumlah_kamar'] ?></td>
                                           <td>
                                               <button class="btn btn-success tombol-fire mr-1" data-toggle="modal" data-target="#update<?= $kmr['id_kamar'] ?>">Ubah </button>
                                               <a href="<?= base_url('admin/delete_k/' . $kmr['id_kamar']) ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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
                   <h5 class="modal-title">Create Kamar</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <?php echo form_open_multipart('admin/create_k'); ?>
                   <img alt="image" src="<?= base_url('assets/preview.jpg') ?>" style="width:450px;height:200px;" class=" img-preview mb-4">
                   <div class="form-group">
                       <label>Tipe Kamar</label>
                       <input type="text" class="form-control" name="tipe_kamar" placeholder="Masukkan Tipe Kamar">
                   </div>
                   <div class="form-group">
                       <label>Jumlah Kamar</label>
                       <input type="number" placeholder="Masukkan Jumlah Kamar" class="form-control" name="jumlah_kamar">
                   </div>
                   <div class="form-group">
                       <label>Foto</label>
                       <div class="custom-file">
                           <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImg()">
                           <label class="custom-file-label" for="image">Choose file</label>

                       </div>
                       <small>Max size is 4MB | Max dimension is 1200 x 800</small>
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

   <?php foreach ($kamar as $kmr) : ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="update<?= $kmr['id_kamar'] ?>">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Update Kamar</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <?php echo form_open_multipart('admin/update_k/' . $kmr['id_kamar']); ?>
                       <img alt="image" src="<?= base_url('assets/uploads/' . $kmr['image']) ?>" style="width:450px;height:200px;" class=" img-preview mb-4">
                       <div class="form-group">
                           <label>Tipe Kamar</label>
                           <input type="text" class="form-control" value="<?= $kmr['tipe_kamar'] ?>" name="tipe_kamar" placeholder="Masukkan Tipe Kamar">
                       </div>
                       <div class="form-group">
                           <label>Jumlah Kamar</label>
                           <input type="number" placeholder="Masukkan Jumlah Kamar" class="form-control" value="<?= $kmr['jumlah_kamar'] ?>" name="jumlah_kamar">
                       </div>
                       <div class="form-group">
                           <label>Foto</label>
                           <div class="custom-file">
                               <input type="file" class="custom-file-input" id="image" name="image">
                               <label class="custom-file-label" for="image">Choose file</label>
                           </div>
                           <small>Max size is 2MB | Max dimension is 1000x1000PX</small>
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