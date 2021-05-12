<?php include('includes/config.inc.php'); ?>
<?php $keres = current($oldalak);
if (isset($_GET['oldal'])) {
	if (isset($oldalak[$_GET['oldal']]) && file_exists("./templates/pages/{$oldalak[$_GET['oldal']]['elérés']}.tpl.php")) {
		$keres = $oldalak[$_GET['oldal']];
	}
	else { 
		$keres = $hibaoldal;
		header("HTTP/1.0 404 Not Found");
	}
}?>
<?php include('templates/index.tpl.php'); ?>
