<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?= base_url('auth') ?>" class="navbar-brand sidebar-gone-hide">GreatHotel</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <div class="nav-collapse">
                    <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                </div>
                <form class="form-inline ml-auto">
                    <ul class="navbar-nav">
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <div class="text-white " style="font-weight: 600; margin-top:1px ; padding-top:2px; margin-right:4px;">Level : <?php if ($this->session->userdata('id_level') == 1) {
                                                                                                                                        echo ('Administrator');
                                                                                                                                    } elseif ($this->session->userdata('id_level') == 2) {
                                                                                                                                        echo ('Resepsionis');
                                                                                                                                    } ?></div>
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                            <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="<?= base_url('auth/logout') ?>" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>

            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">

                    <ul class="navbar-nav">
                        <?php if ($this->session->userdata('id_level') == "1") : ?>
                            <li class="nav-item <?php if ($this->uri->segment(2) == 'kamar' || $this->uri->segment(2) == 'update_kamar' || $this->uri->segment(2) == 'create_kamar') {
                                                    echo ('active');
                                                } ?>">
                                <a href="<?= base_url('admin/kamar') ?>" class="nav-link"><i class="fas fa-bed"></i><span>Kamar</span></a>
                            </li>
                            <li class="nav-item <?php if ($this->uri->segment(2) == 'fasilitas-kamar') {
                                                    echo ('active');
                                                } ?> ">
                                <a href="<?= base_url('admin/fasilitas-kamar') ?>" class="nav-link"><i class="fa-solid fa-hot-tub-person"></i><span>Fasilitas Kamar</span></a>
                            </li>
                            <li class="nav-item <?php if ($this->uri->segment(2) == 'fasilitas-hotel') {
                                                    echo ('active');
                                                } ?>">
                                <a href="<?= base_url('admin/fasilitas-hotel') ?>" class="nav-link"><i class="fa-solid fa-martini-glass-citrus"></i><span>Fasilitas Hotel</span></a>
                            </li>
                        <?php endif ?>


                        <?php if ($this->session->userdata('id_level') == "2") : ?>
                            <li class="nav-item <?php if ($this->uri->segment(1) == 'resepsionis' || $this->uri->segment(1) == 'filter') {
                                                    echo ('active');
                                                } ?>">
                                <a href="<?= base_url('resepsionis') ?>" class="nav-link"><i class="fa-solid fa-key"></i><span>Data Reservasi</span></a>
                            </li>
                        <?php endif ?>
                    </ul>

                </div>
            </nav>
            <div class='ignielToTop'> </div>