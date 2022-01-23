<!DOCTYPE html>
<html lang="tr">
<head>
    <meta name="googlebot" content="noindex">
    <meta name="robots" content="noindex">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Yönetim Paneli - Kriptarium</title>

    <!--    burayı ben ekledim görüntü bolulursa silinecek-->
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/bootstrap/css/bootstrap.min.css'); ?>">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?php echo base_url('assets/Backend/css/styles.css') ?>" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    <script src="<?php echo base_url('assets/Backend/ckeditor/ckeditor.js') ?>"></script>
    <link rel="stylesheet" href="<?= base_url('assets/Frontend/plugins/themify/css/themify-icons.css'); ?>">



<style type="text/css">
    body{
    margin:0;
    padding:0;
}
/* .container{
    width:90%
    margin:10px auto;
} */
.portfolio-menu{
    text-align:center;
}
.portfolio-menu ul li{
    display:inline-block;
    margin:0;
    list-style:none;
    padding:10px 15px;
    cursor:pointer;
    -webkit-transition:all 05s ease;
    -moz-transition:all 05s ease;
    -ms-transition:all 05s ease;
    -o-transition:all 05s ease;
    transition:all .5s ease;
}

.portfolio-item{
    /*width:100%;*/
}
.portfolio-item .item{
    /*width:303px;*/
    float:left;
    margin-bottom:10px;
}
</style>
</head>


<script type="text/javascript">
            // $('.portfolio-item').isotope({
        //      itemSelector: '.item',
        //      layoutMode: 'fitRows'
        //  });
         $('.portfolio-menu ul li').click(function(){
            $('.portfolio-menu ul li').removeClass('active');
            $(this).addClass('active');
            
            var selector = $(this).attr('data-filter');
            $('.portfolio-item').isotope({
                filter:selector
            });
            return  false;
         });
         $(document).ready(function() {
         var popup_btn = $('.popup-btn');
         popup_btn.magnificPopup({
         type : 'image',
         gallery : {
            enabled : true
         }
         });
         });
</script>
<?php echo $this->renderSection('content') ?>









<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; 2021 Kriptarium | Coded with love by Pragron <span style="color:red; size: 20px;">&hearts;</span></div>

        </div>
    </div>
</footer>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/js/scripts.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/assets/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('assets/Backend/assets/demo/chart-bar-demo.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="<?php echo base_url('assets/Backend/js/datatables-simple-demo.js') ?>"></script>



</body>
</html>
