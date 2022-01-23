<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

<!-- main-area -->
<main>

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="<?= base_url('assets/Frontend/img/bg/breadcrumb_bg.jpg'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2>GİRİŞ SAYFASI</h2>
                        <nav aria-label="breadcrumb">

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact-area pt-100 pb-100" data-background="<?= base_url('assets/Frontend/img/bg/contact_bg.jpg'); ?>">
        <div class="container">
            <div class="contact-wrap">
                <?= $this->include('Backend/Layouts/partials/errors');?>
                <div class="row align-items-center">


                    <div class="col-lg-4">


                    </div>


                    <div class="col-lg-4">
                        <div class="contact-form-wrap">
                            <div class="section-title text-left mb-40">
                                <span class="sub-title">GÜVENLİ BULUT SİSTEMİNE SİSTEMİNE HOŞGELDİNİZ.</span>
                                <h2 class="title">E-mail Onay</h2>
                            </div>
                            <form role="form" action="<?= base_url(route_to('login_as')) ?>" method="post">
                                <div class="row">

                                    <div class="col-md-12">
                                        <input name="user_email" type="email"  placeholder="Onay Kodu">
                                    </div>
                                </div>

                                <button type="submit"  name="giris" class="btn mt-2">Giriş Yap</button>
                            </form>
                        </div>
                    </div>





                    <div class="col-lg-4">


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->


</main>
<!-- main-area-end -->

<?= $this->endSection(); ?>
