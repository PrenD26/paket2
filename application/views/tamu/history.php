   <!-- Main Content -->
   <div class="main-content">
       <?php if ($this->session->flashdata('dashboard')) : ?>
           <div class="flash-data10" data-flashdata="<?= $this->session->flashdata('dashboard'); ?>"></div>
       <?php endif ?>
       <section class="section">
           <div class="section-header">
               <h1>History</h1>
               <div class="section-header-breadcrumb">
                   <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                   <div class="breadcrumb-item"><a href="#">Layout</a></div>
                   <div class="breadcrumb-item">Top Navigation</div>
               </div>
           </div>

           <div class="section-body">
               <div class="card">
                   <div class="card-header">
                       <h4>Reservasi</h4>
                       <div class="card-header-action">
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
                                       <th>Nama Pemesan</th>
                                       <th>Nama Tamu</th>
                                       <th>Tgl Check In</th>
                                       <th>Tgl Check Out</th>
                                       <th>Status</th>
                                       <th>Aksi</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   <?php $no = 1;
                                    foreach ($data as $key) : {
                                        } ?>
                                       <tr class="text-center">
                                           <td><?= $no++ ?></td>
                                           <td><?= $key['pemesan'] ?></td>
                                           <td><?= $key['tamu'] ?></td>
                                           <td><?= $key['checkin'] ?></td>
                                           <td><?= $key['checkout'] ?></td>
                                           <td>
                                               <?php switch ($key['status']) {
                                                    case '1':
                                                        echo '<span class="badge badge-primary" style="font-size:14px !important;">Diterima</span>';
                                                        break;
                                                    case '2':
                                                        echo '<span class="badge badge-success" style="font-size:14px !important;">Sudah Checkin</span>';
                                                        break;
                                                    case '3':
                                                        echo '<span class="badge badge-danger" style="font-size:14px !important;">Sudah Checkout</span>';
                                                        break;
                                                } ?></td>
                                           <td>
                                               <a href="<?= base_url('tamu/print/' . $key['id_user']) ?>" class="btn btn-danger btn-sm" target="_blank"><i class="fas fa-file-pdf"></i> Print</a>
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

   <?php foreach ($data as $key) : ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="view<?= $key['id_reservasi'] ?>">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">View Data</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <div class="container-fluid">
                           <div class="row">
                               <div class="col-12">
                                   <div class="row" style="background-color: #f5f6fa; font-size:medium;">
                                       <div class=" col-6 col-sm-6">
                                           <hr>
                                           Nama Pemesan :
                                           <hr>
                                           Nama Tamu :
                                           <hr>
                                           Tanggal Check In :
                                           <hr>
                                           Tanggal Check Out :
                                           <hr>
                                           Email :
                                           <hr>
                                           No Handphone :
                                           <hr>
                                           Tipe Kamar :
                                           <hr>
                                           Jumlah :
                                           <hr>
                                           Status :
                                           <hr>
                                       </div>
                                       <div class="col-6 col-sm-6">
                                           <hr>
                                           <?= $key['pemesan'] ?>
                                           <hr>
                                           <?= $key['tamu'] ?>
                                           <hr>
                                           <?= $key['checkin'] ?>
                                           <hr>
                                           <?= $key['checkout'] ?>
                                           <hr>
                                           <?= $key['email'] ?>
                                           <hr>
                                           <?= $key['no_telp'] ?>
                                           <hr>
                                           <?= $key['tipe_kamar'] ?>
                                           <hr>
                                           <?= $key['jumlah'] ?>
                                           <hr>
                                           <?= $key['status'] ?>
                                           <hr>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="modal-footer bg-whitesmoke br">
                       <button type="button" class="btn btn-warning" data-dismiss="modal"> Close</button>
                   </div>
               </div>
           </div>
       </div>
   <?php endforeach ?>

   <!-- 
   <?php foreach ($reserv as $key) : ?>
       <div class="modal fade" tabindex="-1" role="dialog" id="update<?= $key['id_reservasi'] ?>">
           <div class="modal-dialog modal-dialog-centered" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title">Update Status</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <div class="modal-body">
                       <form action="<?= base_url('resepsionis/update/' . $key['id_reservasi']) ?>" method="post">
                           <div class="form-group">
                               <label for="status">Status</label>
                               <select name="status" class="form-control select2">
                                   <option selected disabled value="">-- Update Status --</option>
                                   <option value="1">Diterima</option>
                                   <option value="2">Check In</option>
                                   <option value="3">Check Out</option>
                               </select>
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
   <?php endforeach ?> -->