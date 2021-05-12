<?php if(isset($row)) { ?>
    <?php if($row) { ?>
        <h1>Logged In As:</h1>
        Personal id: <strong><?= $row['id'] ?></strong><br><br>
        Name: <strong><?= $row['vezeteknev']." ".$row['utonev'] ?></strong>
    <?php } else { ?>
        <h1>The login was not successful!</h1>
        <a href="?oldal=belepes" >Please try again!</a>
    <?php } ?>
<?php } ?>
<?php if(isset($errormessage)) { ?>
    <h2><?= $errormessage ?></h2>
<?php } ?>