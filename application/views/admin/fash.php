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
                                       <th>Nama Fasilitas</th>
                                       <th>Keterangan</th>
                                       <th>Aksi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $no = 1;
                                    foreach ($fash as $fh) : {
                                        } ?>
                                       <tr>
                                           <td class="text-center"><?= $no++ ?></td>
                                           <td class="text-center"><?= $fh['nama_fasilitas'] ?></td>
                                           <td><?= $fh['keterangan'] ?></td>
                                           <td class="text-center">
                                               <button class="btn btn-success mb-1 mr-1 tombol-fire" data-toggle="modal" data-target="#update<?= $fh['id_fasilitas'] ?>">Ubah </button>
                                               <a href="<?= base_url('admin/deletefash/' . $fh['id_fasilitas']) ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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
                   <h5 class="modal-title">Create Fasilitas Hotel</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <?php echo form_open_multipart('admin/createfash'); ?>
                   <img alt="image" src="<?= base_url('assets/preview.jpg') ?>" style="width:450px;height:200px;" class=" img-preview mb-4">
                   <div class="form-group">
                       <label>Nama Fasilitas</label>
                       <input type="text" class="form-control" name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas Hotel">
                   </div>
                   <div class="form-group">
                       <label>Foto</label>
                       <div class="custom-file">
                           <input type="file" class="custom-file-input" id="image" name="image" onchange="previewImg()">
                           <label class="custom-file-label" for="image">Choose file</label>
                       </div>
                       <small>Max size is 2MB | Max dimension is 1000x1000PX</small>
                   </div>
                   <div class="form-group">
                       <label>Keterangan</label>
                       <textarea class="form-control" name="keterangan" style="height:120px;" placeholder="Masukkan Keterangan"></textarea>
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

   <?php foreach ($fash as $fh) : {
        } ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="update<?= $fh['id_fasilitas'] ?>">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Update Fasilitas Hotel</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <?php echo form_open_multipart('admin/updatefash/' . $fh['id_fasilitas']); ?>
                       <img alt="image" src="<?= base_url('assets/uploads/' . $fh['image']) ?>" style="width:450px;height:200px;" class=" img-preview mb-4">
                       <div class="form-group">
                           <label>Nama Fasilitas</label>
                           <input type="text" class="form-control" value="<?= $fh['nama_fasilitas'] ?>" name="nama_fasilitas" placeholder="Masukkan Nama Fasilitas">
                       </div>
                       <div class="form-group">
                           <label>Foto</label>
                           <div class="custom-file">
                               <input type="file" class="custom-file-input" id="image" name="image">
                               <label class="custom-file-label" for="image">Choose file</label>
                           </div>
                           <small>Max size is 2MB | Max dimension is 1000x1000PX</small>
                       </div>
                       <div class="form-group">
                           <label>Keterangan</label>
                           <textarea name="keterangan" class="form-control" style="height: 120px;" placeholder="Masukkan Keterangan"><?= $fh['keterangan'] ?></textarea>
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