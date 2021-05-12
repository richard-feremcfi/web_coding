<?php
if(isset($_POST['felhasznalo']) && isset($_POST['jelszo']) && isset($_POST['vezeteknev']) && isset($_POST['utonev'])
    && $_POST['felhasznalo'] < 40 && $_POST['jelszo'] < 40 && $_POST['vezeteknev'] < 40 && $_POST['utonev'] < 40) {
    try {
        // Kapcsolódás
        $dbh = new PDO('mysql:host=localhost;dbname=dnd', 'root', '',
                        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
        $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');
        $sqlSelect = "select id from felhasznalok where felhasznalonev = :bejelentkezes";
        $sth = $dbh->prepare($sqlSelect);
        $sth->execute(array(':bejelentkezes' => $_POST['felhasznalo']));
        if($row = $sth->fetch(PDO::FETCH_ASSOC)) {
            $msg = "A felhasználói név már foglalt!";
            $again = "true";
        }
        else {
            $sqlInsert = "insert into felhasznalok(id, vezeteknev, utonev, felhasznalonev, jelszo)
                          values(0, :csaladinev, :utonev, :bejelentkezes, :jelszo)";
            $stmt = $dbh->prepare($sqlInsert); 
            $stmt->execute(array(':csaladinev' => $_POST['vezeteknev'], ':utonev' => $_POST['utonev'],
                                 ':bejelentkezes' => $_POST['felhasznalo'], ':jelszo' => sha1($_POST['jelszo']))); 
            if($count = $stmt->rowCount()) {
                $newid = $dbh->lastInsertId();
                $msg = "The registation was successful. Please log in to continue.<br>Personal ID: {$newid}";
                $again = false;
            }
            else {
                $msg = "The registation was not successful. Please try again.";
                $again = true;
            }
        }
    }
    catch (PDOException $e) {
        $msg = "Hiba: ".$e->getMessage();
        $again = true;
    }      
}
else {
    header("Location: ./?oldal=hibaoldal");
}
?>