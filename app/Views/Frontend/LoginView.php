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




                            <div class="col-lg-7">
                                <div class="contact-form-wrap">
                                    <div class="section-title text-left mb-40">
                                        <span class="sub-title">GÜVENLİ BULUT SİSTEMİNE SİSTEMİNE HOŞGELDİNİZ.</span> 
                                        <h2 class="title">Giriş İşlemleri</h2>
                                    </div>
                                    <form role="form" action="<?= base_url(route_to('login_as')) ?>" method="post">
                                        <div class="row">
                                            
                                            <div class="col-md-12">
                                                <input name="user_email" type="email"  placeholder="E-Mailiniz *">
                                            </div>
                                            <div class="col-md-12">
                                                <input  name="user_pass" type="password"  placeholder="Şifreniz *">
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <input type="password" name="user_key" placeholder="Güvenlik Anahtarınız *">
                                            </div>
                                            
                                            <div class="section-title1 col-md-12">
                                                <span class="sub-title">Hala Üye Değil MİSİNİZ? Üye Olmak İÇİN <a href="register">Tıklayınız.</a></span>
                                            </div>
                                            
                                        </div>
                                        
                                        <button type="submit"  name="giris" class="btn mt-2">Giriş Yap</button>
                                    </form>
                                </div>
                            </div>





                            <div class="col-lg-5">
                                <div class="contact-info-wrap" data-background="<?= base_url('assets/Frontend/img/bg/contact_info_bg.jpg'); ?>">
                                    <h4 class="title">VERİLERİNİZ BİZİMLE GÜVENDE.</h4>
                                    <div class="contact-info-list">
                                        <ul>
                                           
                                        </ul>
                                    </div>
                                   





                                    <img style="width: 370px; margin-left: -20px !important;" src="<?= base_url('assets/Frontend/img/images/login-img3.png'); ?>">




<!-- resim gelebilir -->











                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

           
        </main>
        <!-- main-area-end -->

<?= $this->endSection(); ?>
