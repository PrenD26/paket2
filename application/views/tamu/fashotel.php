<!-- Main Content -->
<div class="main-content">
    <section class="section">


        <div class="section-body">
            <div class="card card-primary">
                <div class="text-center mt-5">
                    <h1>List Fasilitas GreatHotel </h1>
                </div>
                <div class="card-body">
                    <div class="col-12 ">
                        <div class="hero text-white hero-bg-image hero-bg align-items-center" style="height: 320px;" data-background="<?= base_url('assets/hotel.jpg') ?>">
                            <div class="hero-inner text-center">
                            </div>
                        </div>
                        <br>
                    </div>
                    <div class="row">

                        <?php $no = 1;
                        foreach ($fash as $kmr) : ?>
                            <div class="col-6">
                                <hr>
                                <div class="hero text-white hero-bg-image hero-bg align-items-center" style="height: 320px;" data-background="<?= base_url('assets/uploads/') . $kmr['image'] ?>">
                                    <div class="hero-inner text-center">
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <h1> <?= $kmr['nama_fasilitas'] ?></h1>
                                    <h5> <?= $kmr['keterangan'] ?></h5>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>