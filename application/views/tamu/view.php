<!-- Main Content -->
<div class="main-content">
    <section class="section">


        <div class="section-body">
            <div class="card card-primary">
                <div class="text-center mt-5">
                    <h1>Fasilitas Kamar </h1>
                </div>

                <div class="card-body">
                    <div class="col-12">
                        <div class="hero text-white hero-bg-image hero-bg align-items-center" style="height: 320px;" data-background="<?= base_url('assets/uploads/') . $fas['image'] ?>">
                            <div class="hero-inner text-center">
                            </div>
                        </div>
                        <h1 class="text-center mt-4"><?= $fas['tipe_kamar'] ?></h1>
                        <hr>
                        <h3>List Fasilitas Kamar :</h3>
                        <?php foreach ($fask as $key) : ?>
                            <h5> <?= '-' . $key['nama_fasilitas'] ?></h5>
                        <?php endforeach ?>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>