<?php session_start(); ?>
<?php if(file_exists("./logicals/{$keres['elérés']}.php")) { include("./logicals/{$keres['elérés']}.php"); } ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/stilus.css">
    <title><?=$title['cím'] ?></title>
</head>
<body>
    <div class="parent">
    <img id="title" src="./images/<?php echo $címlap['image']; ?>"/>
    <nav>
            <?php include('includes/menusor.php'); ?>
    </nav>
    </div>
<div>
    <?php if(isset($_SESSION['login'])){ ?>
    <p>Logged in: <?php echo $_SESSION["csn"].' '.$_SESSION["un"].' ('.$_SESSION["login"].')' ?></p>
    <?php } ?>
    <div class="content">
            <?php include("./templates/pages/{$keres['elérés']}.tpl.php"); ?>
    </div>
</div>
<footer>
        <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
        &nbsp;
        <?php if(isset($footer['name'])) { ?><?= $footer['name']; ?><?php } ?>
</footer>
</body>
</html>
