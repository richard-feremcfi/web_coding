<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo'])
   && $_POST['felhasznalo'] < 40 && $_POST['jelszo'] < 40 ) {
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=dnd', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
        $sqlSelect = "select id, utonev, vezeteknev from felhasznalok where felhasznalonev = :belep and jelszo = sha1(:pass)";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':belep' => $_POST['felhasznalo'], ':pass' => $_POST['jelszo']));
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if($row) {
            $_SESSION['csn'] = $row['utonev']; $_SESSION['un'] = $row['vezeteknev'];
            $_SESSION['login'] = $_POST['felhasznalo']; ?>
        <?php } else{
            header("Location: ./?oldal=login");
        }
    }
    catch (PDOException $e) {
        $errormessage = "Error: ".$e->getMessage();
    }
}
else {
    header("Location: .");
}
?>
