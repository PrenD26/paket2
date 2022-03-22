   <!-- Main Content -->
   <div class="main-content">
       <?php if ($this->session->flashdata('create')) : ?>
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('create'); ?>"></div>
       <?php endif ?>
       <section class="section">
           <div class="section-header">
               <h1><?= $title ?></h1>
           </div>

           <div class="section-body">
               <div class="card card-primary">
                   <div class="card-header">
                       <h4>Filter</h4>
                       <div class="card-header-action">
                           <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
                       </div>
                   </div>
                   <div class="collapse" id="mycard-collapse">
                       <div class="card-body">
                           <form action="<?= base_url('filter') ?>" method="post">
                               <div class="form-group">
                                   <div class="row " style="color:#34395e !important; font-size:12px !important; font-weight:600 !important;">
                                       <div class="col">
                                           <label for="checkin">Tanggal Awal</label>
                                           <input type="date" id="tanggalawal" class="form-control" name="tanggalawal">

                                       </div>
                                       <div class="col">
                                           <label for="checkout">Tanggal Akhir</label>
                                           <input type="date" id="tanggalakhir" class="form-control" name="tanggalakhir">
                                       </div>
                                   </div>
                                   <div class="text-right mt-3">
                                       <input type="submit" class="btn btn-primary" value="Filter">
                                   </div>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
               <div class="card card-primary">
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
                                    foreach ($reserv as $key) : {
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
                                               <button class="btn btn-primary mr-1" data-toggle="modal" data-target="#view<?= $key['id_reservasi'] ?>"> View</button>
                                               <button class="btn btn-success mr-1" data-toggle="modal" data-target="#update<?= $key['id_reservasi'] ?>"> Update</button>
                                               <a href="<?= base_url('resepsionis/delete/' . $key['id_reservasi']) ?>" class="btn btn-danger tombol-hapus">Hapus</a>
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

   <?php foreach ($reserv as $key) : ?>
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
   <?php endforeach ?>