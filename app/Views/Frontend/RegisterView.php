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
            <h2>Üye Kayıt İşlemlerİ</h2>
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
          <div class="col-lg-5">
            <div class="contact-info-wrap" data-background="<?= base_url('assets/Frontend/img/bg/contact_info_bg.jpg'); ?>">
              <h4 class="title">SİZİN GÜVENLİĞİNİZ BİZİM İÇİN ÖNEMLİ.</h4>
              <div class="contact-info-list">
                <ul>

                </ul>
              </div>


              <img style="width: 400px; margin-left: -20px !important;" src="<?= base_url('assets/Frontend/img/images/register-img1.png'); ?>">




              <!-- resim gelebilir -->





            </div>

          </div>

          <div class="col-lg-7">

            <div class="contact-form-wrap">
              <div class="section-title text-left mb-40">
                <span class="sub-title">GÜVENLİ BULUT SİSTEMİNE SAHİP OLMAK İSTİYORSANIZ KAYIT OLUNUZ.</span> 
                <h2 class="title">Kayıt İşlemleri</h2>
              </div>

              <form role="form" action="<?= base_url(route_to('kayit_ol_as')) ?>" method="post">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="user_name" placeholder="Adınız *">
                  </div>
                  <div class="col-md-6">
                    <input type="text" name="user_surname" placeholder="Soyadınız *">
                  </div>
                  <div class="col-md-12">
                    <input type="email" name="user_email" placeholder="E-Mailiniz *">
                  </div>
                  <div class="col-md-12">
                    <input type="password" name="user_pass" placeholder="Şifreniz *">
                  </div>
                  <div class="col-md-12">
                    <input type="password" name="user_pass2" placeholder="Şifreniz Tekrar *">
                  </div>
                  <div class="col-md-12">
                    <input type="password" name="user_key" placeholder="Güvenlik Anahtarınız *">
                  </div>
                  <div class="col-md-12">


                    <input class="checkbox1" type="checkbox" name="politika">

                    <label class="label1" > Gizlilik Politikasını Okudum ve Kabul Ediyorum.</label>
                  </div>





                </div>

                <button name="kullanicikayit" type="submit" class="btn">Kayıt Ol</button>
              </form>
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
