<!-- Main Content -->
<div class="main-content">
    <section class="section">


        <div class="section-body">
            <div class="card card-primary">
                <div class="text-center mt-5">
                    <h1>List Tipe Kamar GreatHotel </h1>
                </div>
                <br>
                <div class="card-body">
                    <?php $no = 1;
                    foreach ($kamar as $kmr) : ?>
                        <div class="col-12 ">
                            <div class="hero text-white hero-bg-image hero-bg align-items-center" style="height: 320px;" data-background="<?= base_url('assets/uploads/') . $kmr['image'] ?>">
                                <div class="hero-inner text-center">
                                </div>
                            </div>
                            <div class="text-center mt-4 " style="color: black;">
                                <a href="<?= base_url('tamu/view/') . $kmr['id_kamar'] ?>" style="text-decoration: none;">
                                    <h1> <?= $kmr['tipe_kamar'] ?></h1>
                                </a>
                            </div>
                            <hr>
                            <br>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
</div>
