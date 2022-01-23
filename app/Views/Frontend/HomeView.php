<?= $this->extend('Frontend/Layouts/Main'); ?>

<?= $this->section('content'); ?>

  <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section class="banner-area banner-style-two banner-bg" data-background="<?= base_url('assets/Frontend/img/banner/banner_bg02.jpg'); ?>">
                <div class="container custom-container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-5 col-lg-6 order-0 order-lg-2">
                            <div class="banner-img wow fadeInRight" data-wow-delay="1s">
                                <img src="<?= base_url('assets/Frontend/img/banner/banner_img02.png'); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-10">
                            <div class="banner-content">
                                <span class="wow fadeInUp" data-wow-delay=".3s">ABC CLOUD</span>
                                <h2 class="wow fadeInUp" data-wow-delay=".6s">Sizinde Artık Verileriniz Güvende!</h2>
                                <p class="wow fadeInUp" data-wow-delay=".9s">Kendi Hash'ini kendin üreterek resim ve videolarınız artık ücretsiz bir şekilde daha güvende.. </p>
                                <a href="#" class="btn green-btn wow fadeInUp" data-wow-delay="1s"><span>+</span>Daha Fazla Oku</a>
                                <a href="register" class="btn btn wow fadeInUp" data-wow-delay="1s">Ücretsiz Kayıt Ol</a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- banner-area-end -->

            <!-- domain-search-area -->
            <div class="domain-search-area domain-search-two">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- <div class="domain-search-inner">

                                <div class="domain-search-form-wrap">
                                    <form action="#" class="domain-search-form" style="border: none;">
                                        <div class="col-3" >
                                            <div class="form-grp" style="width: 100%!important;">
                                                <input type="text" placeholder="E-mail" style="border: 1px solid #eceae9;border-radius: 21px;"> 
                                            </div>
                                        </div>
                                        <div class="col-3" >
                                            <div class="form-grp" style="width: 100%!important;">
                                                <input type="text" placeholder="Şifre" style="border: 1px solid #eceae9;border-radius: 21px;">
                                            </div>
                                        </div>
                                        <div class="col-3" >
                                            <div class="form-grp" style="width: 100%!important;">
                                                <input type="text" placeholder="Key" style="border: 1px solid #eceae9;border-radius: 21px;">
                                            </div>
                                        </div>
                                        <div class="col-3">
                                      <a href="login" class="btn green-btn" style="width: 100%;">Giriş Yap</a>
                                        </div>
                                    </form>

                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- domain-search-area-end -->

            <!-- hosting-price-area -->
            <section class="hosting-price-area pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title title-style-two text-center mb-60">
                                <span class="sub-title">En İyi Barındırma Hizmetleri</span>
                                <h2 class="title">Sizin için Bulut Paketlerimiz</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="hosting-pricing-item active text-center mb-40" data-background="img/images/hosting_pricing_box_bg.jpg">
                                <div class="hosting-pricing-icon mb-25">
                                    <img src="<?= base_url('assets/Frontend/img/icon/hosting_pricing_icon02.png'); ?>" alt="">
                                </div>
                                <div class="hosting-pricing-title mb-15">
                                    <h3>Premium Bulut Paketi</h3>
                                </div>
                                <div class="hosting-price-wrap pricing-amount">
                                    <span>Start From</span>
                                    <h2 class="annual_price"><span class="dollar">₺</span>19.99<span class="duration">p/mo</span></h2>
                                    <h2 class="monthly_price"><span class="dollar">₺</span>29.99<span class="duration">p/mo</span></h2>

                                </div>
                                <div class="hosting-pricing-content">
                                    <p>Premium bulut paketi ile <u>Sınırsız</u> depolama alanı ile tüm verilerinizi sunucumuzda saklayın.</p>
                                </div>
                                <div class="hosting-pricing-btn">
                                    <a href="#" class="btn green-btn">Hemen Kayıt Ol</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-8">
                            <div class="hosting-pricing-item text-center mb-40">
                                <div class="hosting-pricing-icon mb-25">
                                    <img src="<?= base_url('assets/Frontend/img/icon/hosting_pricing_icon03.png'); ?>" alt="">
                                </div>
                                <div class="hosting-pricing-title mb-15">
                                    <h3>Basic Bulut Paketi</h3>
                                </div>
                                <div class="hosting-price-wrap pricing-amount">
                                    <span>Start From</span>
                                    <h2 class="annual_price"><span class="dollar">₺</span>0.00<span class="duration">p/mo</span></h2>
                                    <h2 class="monthly_price"><span class="dollar">₺</span>0.00<span class="duration">p/mo</span></h2>
                                </div>
                                <div class="hosting-pricing-content">
                                    <p>Tamamen Ücretsiz Bir Şekilde 10GB Depolama Alanı ile tüm verilerinizi sunucumuzda saklayın.</p>
                                </div>
                                <div class="hosting-pricing-btn">
                                    <a href="#" class="btn green-btn">Hemen Kayıt Ol</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="pricing-tab">
                        <span class="tab-btn monthly_tab_title">Aylık plan</span>
                        <span class="pricing-tab-switcher"></span>
                        <span class="tab-btn annual_tab_title">Yıllık plan</span>
                    </nav>
                </div>
            </section>
            <!-- hosting-price-area-end -->

            <!-- server-and-platform -->
            <section class="server-and-platform pb-95">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="server-platform-img text-center">
                                <img src="<?= base_url('assets/Frontend/img/images/server_platform_img.jpg'); ?>" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="server-platform-content">
                                <div class="icon"><img src="<?= base_url('assets/Frontend/img/icon/server_platform_icon.png'); ?>" alt=""></div>
                                <h3>Güçlü Sunucu ve Platform İle Daha Akıllı Satış</h3>
                                <ul>
                                    <li>
                                        <div class="icon"><img src="<?= base_url('assets/Frontend/img/icon/sp_list_icon01.png'); ?>" alt=""></div>
                                        <div class="content">
                                            <h5>Satış toplantıları ve sunumları yapmak</h5>
                                            <p>Tam Yönetimli SSD Paylaşımlı Barındırma, şifreli tipte hızlı HASH anahtarı ile galeriniz için en uygun çözüm.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="<?= base_url('assets/Frontend/img/icon/sp_list_icon02.png'); ?>" alt=""></div>
                                        <div class="content">
                                            <h5>Kesinti süresi web sitesi transferleri</h5>
                                            <p>Fully-Managed SSD Shared Hosting optimal solution for fast wnkwner
                                            printer galley of type scrambled.</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><img src="<?= base_url('assets/Frontend/img/icon/sp_list_icon03.png'); ?>" alt=""></div>
                                        <div class="content">
                                            <h5>Ekibinizle işbirliği yapın</h5>
                                            <p>Fully-Managed SSD Shared Hosting optimal solution for fast wnkwner
                                            printer galley of type scrambled.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- server-and-platform-end -->

       

            <!-- hosting-services -->
            <section class="hosting-services gray-lite-bg pt-100 pb-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6">
                            <div class="section-title title-style-two text-center mb-60">
                                <span class="sub-title">En İyi Cloud Hizmeti</span>
                                <h2 class="title">Pragron CLOUD Özellikleri</h2>
                            </div>
                        </div>
                    </div>
                    <div class="hosting-services-wrap">
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-settings"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>7/24 Uzman Desteği</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-menu"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>İsteğe Bağlı Erişim</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-sync"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>Özel Barındırma</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-server"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>VPS Barındırma Uzmanı</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-cloud"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>Bayi Barındırma</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-9">
                                <div class="hosting-services-item text-center mb-75">
                                    <div class="hosting-services-icon">
                                        <i class="flaticon-clean"></i>
                                    </div>
                                    <div class="hosting-services-content">
                                        <h4>Paylaşılan Evsahipliği</h4>
                                        <p>Fully-Managed SSD Shared Hosting optimal solution for fast reliaunkwn printer galley rotal type scrambled.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hosting-services-end -->

 

            <!-- fact-area -->
            <section class="fact-area fact-bg" data-background="img/bg/fact_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="fact-box mb-50">
                                <div class="icon mb-20">
                                    <img src="<?= base_url('assets/Frontend/img/icon/fact_icon01.png'); ?>" alt="">
                                </div>
                                <h2><span class="odometer" data-count="10">00</span></h2>
                                <span>Veri merkezi</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="fact-box mb-50">
                                <div class="icon mb-20">
                                    <img src="<?= base_url('assets/Frontend/img/icon/fact_icon02.pn'); ?>g" alt="">
                                </div>
                                <h2><span class="odometer" data-count="1084">00</span></h2>
                                <span>Veri Altyapısı</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="fact-box mb-50">
                                <div class="icon mb-20">
                                    <img src="<?= base_url('assets/Frontend/img/icon/fact_icon03.pn'); ?>g" alt="">
                                </div>
                                <h2><span class="odometer" data-count="456">00</span><span>K</span></h2>
                                <span>Mutlu Müşteri</span>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="fact-box mb-50">
                                <div class="icon mb-20">
                                    <img src="<?= base_url('assets/Frontend/img/icon/fact_icon04.png'); ?>" alt="">
                                </div>
                                <h2><span class="odometer" data-count="7">00</span><span>Yr</span></h2>
                                <span>Year Experience</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- fact-area-end -->

      

        </main>
        <!-- main-area-end -->


<?= $this->endSection(); ?>
