<?php
$title= array(
    'cím' => 'D&D',
);

$MAPPA = './images/uploads/';
$TIPUSOK = array ('.jpg', '.png');
$MEDIATIPUSOK = array('image/jpeg', 'image/png');
$DATUMFORMA = "Y.m.d. H:i";
$MAXMERET = 1376*768;

$címlap = array(
    'image' => 'DnD_logo.png',
    'imgalt' => 'title',
	'title' => 'Another Title'
);

$footer = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'name' => 'Ferencfi Richárd'
);
$oldalak = array(
    'mainpage' => array('elérés' => 'mainpage', 'kiírni' => 'Home', 'látom' => array(1,1)),
	'rules' => array('elérés' => 'rules', 'kiírni' => 'Introduction', 'látom' => array(1,1)),
	'gallery' => array('elérés' => 'gallery', 'kiírni' => 'Gallery' ,'látom' => array(1,1)),
	'qna' => array('elérés' => 'qna', 'kiírni' => 'FAQ', 'látom' => array(1,1)),
    'üzenetmegjelen' => array('elérés' => 'üzenetmegjelen', 'kiírni' => '', 'látom' => array(0,0)),
    'login' => array('elérés' => 'login', 'kiírni' => 'Login', 'látom' => array(1,0)),
    'logout' => array('elérés' => 'logout', 'kiírni' => 'Logout', 'látom' => array(0,1)),
    'belep' => array('elérés' => 'belep', 'kiírni' => '', 'látom' => array(0,0)),
    'belepett' => array('elérés' => 'belepett', 'kiírni' => '', 'látom' => array(0,0)),
    'regisztral' => array('elérés' => 'regisztral', 'kiírni' => '', 'látom' => array(0,0))
    
);

$hibaoldal = array ('elérés' => 'hibaoldal', 'kiírni' => 'Error');
?>