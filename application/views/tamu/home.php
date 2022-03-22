   <!-- Main Content -->
   <div class="main-content">
       <section class="section">
           <?php if ($this->session->flashdata('home')) : ?>
               <div class="flash-data" data-flashdata="<?= $this->session->flashdata('home'); ?>"></div>
           <?php endif ?>
           <?php if ($this->session->flashdata('pesan')) : ?>
               <div class="flash-data2" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
           <?php endif ?>
           <div class="section-body">
               <div class="card card-primary">
                   <div class="card-body">
                       <div class="col-12 mb-4 mt-4">
                           <div class="hero text-white hero-bg-image hero-bg" style="height: 320px;" data-background="<?= base_url('assets/hotel.jpg') ?>">
                               <div class="hero-inner">
                                   <h2 style="text-align: center;">Welcome To GreatHotel</h2>
                               </div>
                           </div>
                           <br>
                           <hr>
                           <br>
                           <div class="text-center" style="color: black;">
                               <h1>Tentang Kami</h1>
                           </div>
                           <div class="mt-3" style="color: black;">
                               <p>
                                   Lepaskan diri Anda ke GreatHotel, dikelilingi oleh keindahan pegunungan yang indah, danau, dan sawah menghijau. Nikmati sore yang hangat dengan berenang di kolah renang dengan pemandangan matahari terbena, yang memukau. Kid's Club yang luas - menawarkan beragam fasilitas dan kegiatan anak-anak yang akan melengkapi kenyamanan keluarga. Convention Center kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Bandung, mampu mengakomodasi hingga 3.000 delegasi. Manfaatkan ruang penyelenggaraan konvensi M.I.C.E ataupun mewujudkan acara pernikahan adat yang mewah.
                               </p>
                           </div>
                           <br>
                           <div class="text-right mt-3">
                               <?php if ($this->session->userdata('id_level') == null) : ?>
                                   <button class="btn btn-light mr-1" data-toggle="modal" data-target="#alert"> Pesan Kamar</button>
                               <?php endif ?>
                               <?php if ($this->session->userdata('id_level') == 3) : ?>
                                   <a href="<?= base_url('pesan') ?>" class="btn btn-primary "> Pesan Kamar</a>
                               <?php endif ?>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
   </div>