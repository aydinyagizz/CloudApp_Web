<?php echo $this->extend('Backend/Layouts/Main'); ?>
<?php echo $this->section('content'); ?>

    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="anasayfa"><img src="<?php echo base_url('assets/Frontend/pragron_logo.png') ?>"
                                                          class="img-fluid"
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

                    <li><a class="dropdown-item" href="<?= base_url('/panel/logout') ?>">Çıkış</a></li>
                </ul>
            </li>
        </ul>
    </nav>
<div id="layoutSidenav">

<?= $this->include('Backend/Layouts/partials/menu'); ?>

    <div id="layoutSidenav_content">
    <main>

        <div class="container-fluid px-4"><br>

            <label for="label"><b>Toplam Kullanılabilir Alan 15GB</b></label><BR><BR>
<!--            <label for="label"><b>Kullanılan Alan (%25)</b></label><br><br>-->
            <label for="label"><b>Kalan Alan <?= (15360-$storage->image_size); ?> MB</b></label>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" style="width: <?= $storage->image_size ?>%;" aria-valuemin="0"
                     aria-valuemax="15360.916896"></div>
            </div>
            <br>
            <form action="<?= base_url(route_to('image_upload')) ?>" method="post" enctype="multipart/form-data">
                <div class="fallback">
                    <input type="file" name="file" id="file">
                </div>
                <div align="center">
                    <button type="submit" class="btn btn-primary btn-lg complete" style="border-radius: 50px;">Resim
                        Ekle
                    </button>
                </div>
            </form>


            <ol class="breadcrumb mb-4">

            </ol>
            <div class="row">
                <div class="portfolio-item row">
                    <?php foreach ($record as $key => $img) : ?>
                        <div class="item selfie col-lg-3 col-md-4 col-6 col-sm">
                            <a href="data:<?= $img->image_mime  ?>>;base64, <?= base64_encode($img->image_data) ?> "
                               class="fancylight popup-btn" data-fancybox-group="light">
                                <img src="data:<?= $img->image_mime  ?>>;base64, <?= base64_encode($img->image_data) ?> " width="300"  height="300" alt="Red dot"/>
                            </a>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
    </main>


<?php echo $this->endSection(); ?>