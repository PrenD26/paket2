<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?= base_url('home') ?>" class="navbar-brand sidebar-gone-hide">GreatHotel</a>
                <div class="navbar-nav">
                    <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
                </div>
                <form class="form-inline ml-auto">

                </form>
                <ul class="navbar-nav navbar-right">
                    <?php if ($this->session->userdata('id_level') == null) : ?>
                        <div class="text-white mt-1" style="font-weight: 600;">Not Login Yet
                        </div>
                        <a href="<?= base_url('log') ?>" class="btn btn-light ml-3"> Login</a>
                    <?php endif ?>
                    <?php if ($this->session->userdata('id_level') == 3) : ?>
                        <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">

                                <div class="d-sm-none d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="<?= base_url('auth/logouttamu') ?>" class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt"></i> Logout
                                </a>
                            </div>
                        </li>
                    <?php endif ?>
                </ul>
            </nav>


            <nav class="navbar navbar-secondary navbar-expand-lg">
                <div class="container">

                    <ul class="navbar-nav">

                        <li class="nav-item <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'home') {
                                                echo ('active');
                                            } ?>">
                            <a href="<?= base_url('home') ?>" class="nav-link"><i class="fas fa-hotel"></i><span>Home</span></a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == 'kamar' || $this->uri->segment(2) == 'view') {
                                                echo ('active');
                                            } ?> ">
                            <a href="<?= base_url('kamar') ?>" class="nav-link"><i class="fas fa-bed"></i><span>Kamar</span></a>
                        </li>
                        <li class="nav-item <?php if ($this->uri->segment(1) == 'fasilitas-hotel') {
                                                echo ('active');
                                            } ?>">
                            <a href="<?= base_url('fasilitas-hotel') ?>" class="nav-link"><i class="fas fa-martini-glass-citrus"></i><span>Fasilitas Hotel</span></a>
                        </li>

                        <?php if ($this->session->userdata('id_level') == 3) : ?>
                            <li class="nav-item <?php if ($this->uri->segment(1) == 'pesan' || $this->uri->segment(1) == 'reservasi') {
                                                    echo ('active');
                                                } ?>">
                                <a href="<?= base_url('pesan') ?>" class="nav-link"><i class="fa-solid fa-book-atlas"></i><span>Pesan</span></a>
                            </li>

                            <li class="nav-item <?php if ($this->uri->segment(2) == 'history') {
                                                    echo ('active');
                                                } ?>">
                                <a href="<?= base_url('tamu/history/' . $this->session->userdata['id_user']) ?>" class="nav-link"><i class="fa-solid fa-clock-rotate-left"></i><span>History</span></a>
                            </li>
                        <?php endif ?>




                        <?php if ($this->session->userdata('id_level') == null) : ?>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="modal" data-target="#alert"><i class="fa-solid fa-book-atlas"></i><span>Pesan</span></a>
                            </li>
                        <?php endif ?>
                    </ul>

                </div>
            </nav>