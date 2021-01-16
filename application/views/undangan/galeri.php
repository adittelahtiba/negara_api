<div class="galeri">


    <div class="thumbnail">
        <img src="<?= base_url('assets/undangan/galeri/landscape')  . '1.jpg'; ?>" width="600px" class="jumbo">
        <?php
        for ($i = 2; $i <= 18; $i++) { ?>
            <img src="<?= base_url('assets/undangan/galeri/landscape')  . $i . '.jpg'; ?>" class="thumb">
            <img src="<?= base_url('assets/undangan/galeri/studio') . $i . '.jpg'; ?>" class="thumb">
        <?php } ?>
    </div>
</div>