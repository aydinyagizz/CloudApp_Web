<?php echo $this->extend('Backend/Layouts/Main'); ?>
<?php echo $this->section('content'); ?>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="anasayfa"><img
                    src="<?php echo base_url('assets/Frontend/img/logo1.png') ?>" class="img-fluid"
                    width="150" height="150"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                    class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">

            </div>
        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                   aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Ayarlar</a></li>

                    <li><a class="dropdown-item" href="<?= base_url('/panel/logout') ?>"> Çıkış</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<div id="layoutSidenav">

<?= $this->include('Backend/Layouts/partials/menu'); ?>

    <main id="layoutSidenav_content">
    <main>
        <div class="card">
            <div class="card-body">
                <div class="container-fluid px-4">
                    <div class="card-header">
                        <i class="fa fa-list fa-fw"></i> Duyurular
                    </div>
                    <br>
                    <div class="row">
                        <?= $this->include('Backend/Layouts/partials/errors'); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Duyurular
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th width="50">#</th>
                                        <th width="100">Fotograf</th>
                                        <th>Başlık</th>
                                        <th>Tarih</th>
                                        <th>İşlemler</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    <?php
                                    $say =1;
                                    foreach ($record as $key => $duyuru):
                                        ?>

                                        <tr>
                                            <td><?= $say; ?></td>
                                            <td><img width="200" height="100" src="<?= base_url('assets/Backend/images/duyurular').'/'. $duyuru->yazi_foto; ?>" alt="fotoğraf"></td>
                                            <td><?= $duyuru->yazi_title; ?></td>


                                            <td class="center"><?= $duyuru->yazi_tarih; ?></td>
                                            <td class="center">
                                                <a href="duyuru-duzenle.php?yazi_id=<?= $duyuru->yazi_id; ?>">
                                                    <button class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>Düzenle
                                                    </button>
                                                </a>
                                                <a href="islem.php?yazisil_id=1">
                                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Sil
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php
                                        $say++;
                                    endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </main>


<?php echo $this->endSection(); ?>