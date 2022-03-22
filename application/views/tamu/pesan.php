   <!-- Main Content -->
   <div class="main-content">
       <section class="section">

           <div class="section-body">
               <div class="col-12 mt-4">
                   <div class="hero text-white hero-bg-image hero-bg" style="height: 320px;" data-background="<?= base_url('assets/hotel.jpg') ?>">
                   </div>
               </div>
               <br>
               <hr>
               <br>
               <div class="row">
                   <div class="col-10 mx-auto">
                       <div class="card card-primary">
                           <div class="card-header">
                               <h4>Form Pemesanan</h4>
                           </div>
                           <div class="card-body">
                               <form action="<?= base_url('reservasi') ?>" method="post">
                                   <div class="form-group">
                                       <div class="row " style="color:#34395e !important; font-size:12px !important; font-weight:600 !important;">
                                           <div class="col">
                                               <label for="checkin">Tanggal Check In</label>
                                               <input type="date" id="checkin" class="form-control <?php if (form_error('checkin')) {
                                                                                                        echo ('is-invalid');
                                                                                                    } ?>" name="checkin" value="<?= set_value('checkin') ?>">
                                               <div class="invalid-feedback">
                                                   <?= form_error('checkin') ?>
                                               </div>
                                           </div>
                                           <div class="col">
                                               <label for="checkout">Tanggal Check Out</label>
                                               <input type="date" id="checkout" class="form-control <?php if (form_error('checkout')) {
                                                                                                        echo ('is-invalid');
                                                                                                    } ?>" name="checkout" value="<?= set_value('checkout') ?>">
                                               <div class="invalid-feedback">
                                                   <?= form_error('checkout') ?>
                                               </div>
                                           </div>
                                           <div class="col">
                                               <label for="jumlah">Jumlah Kamar</label>
                                               <input type="number" placeholder="Jumlah Kamar Yang Dipesan" name="jumlah" id="jumlah" value="<?= set_value('jumlah') ?>" class=" form-control <?php if (form_error('jumlah')) {
                                                                                                                                                                                                    echo ('is-invalid');
                                                                                                                                                                                                } ?>" min="0" oninput="validity.valid||(value='');">
                                               <div class="invalid-feedback">
                                                   <?= form_error('jumlah') ?>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="email">Email</label>
                                       <input type="email" class="form-control <?php if (form_error('email')) {
                                                                                    echo ('is-invalid');
                                                                                } ?>" name="email" placeholder="Masukkan Email" value="<?= $this->session->userdata('email') ?>" readonly>
                                       <div class="invalid-feedback">
                                           <?= form_error('email') ?>
                                       </div>

                                   </div>
                                   <div class="form-group">
                                       <label for="pemesan">Nama Pemesan</label>
                                       <input type="text" id="pemesan" class="form-control <?php if (form_error('pemesan')) {
                                                                                                echo ('is-invalid');
                                                                                            } ?>" name="pemesan" placeholder="Masukkan Nama Pemesan" value="<?= $this->session->userdata('nama') ?>">
                                       <div class="invalid-feedback">
                                           <?= form_error('pemesan') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="no_telp">No Handphone</label>
                                       <input type="text" id="no_telp" class="form-control <?php if (form_error('no_telp')) {
                                                                                                echo ('is-invalid');
                                                                                            } ?>" name="no_telp" placeholder="Masukkan No Handphone" value="<?= $this->session->userdata('no_telp') ?>">
                                       <div class="invalid-feedback">
                                           <?= form_error('no_telp') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="tamu">Nama Tamu</label>
                                       <input type="tamu" id="tamu" class="form-control <?php if (form_error('tamu')) {
                                                                                            echo ('is-invalid');
                                                                                        } ?>" name="tamu" value="<?= set_value('tamu') ?>" placeholder="Masukkan Nama Tamu">
                                       <div class="invalid-feedback">
                                           <?= form_error('tamu') ?>
                                       </div>
                                   </div>
                                   <div class="form-group">
                                       <label for="kamar">Tipe Kamar</label>
                                       <select name="id_kamar" id="kamar" class="form-control select2 <?php if (form_error('id_kamar')) {
                                                                                                            echo ('is-invalid');
                                                                                                        } ?>">
                                           <option selected disabled value="">-- Pilih Kamar --</option>
                                           <?php foreach ($kamar as $key) : ?>
                                               <option value="<?= $key['id_kamar'] ?>"><?= $key['tipe_kamar'] ?></option>
                                           <?php endforeach ?>
                                       </select>
                                       <div class="invalid-feedback">
                                           <?= form_error('id_kamar') ?>
                                       </div>
                                   </div>
                                   <div class="text-right">
                                       <a href="<?= base_url('home') ?> " class="btn btn-icon btn-warning mr-2"> Kembali</a>
                                       <button type="submit" class="btn btn-primary "> Konfirmasi Pemesanan</button>
                                   </div>
                           </div>

                           <form>
                       </div>

                   </div>

               </div>
           </div>

       </section>
   </div>