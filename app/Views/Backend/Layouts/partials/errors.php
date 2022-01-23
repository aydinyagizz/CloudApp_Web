<?php if (session()->has('errors')) {
    if (is_array(session()->errors)) {
        foreach (session()->errors as $key => $value) { ?>
            <div class="alert alert-danger">
                <b>Hata!</b> <?= $value; ?>
            </div>
        <?php }
    } else { ?>
        <div class="alert alert-danger">
            <b>Hata!</b> <?= session()->errors; ?>
        </div>
    <?php }
} ?>


<?php
if (session()->getFlashdata('success') !== NULL) { ?>

        <div class="alert alert-success">
            <b>Tebrikler!</b> <?= session()->getFlashdata('success'); ?>
        </div>
    <?php
} ?>

