<?php if(isset($msg)) { ?>
    <h1><?= $msg ?></h1>
    <?php if($again) { ?>
        <a href="?oldal=belepes">Próbálja újra!</a>
    <?php } ?>
<?php } ?>