<?php
if(isset($_POST['email']) &&
    isset($_POST['question-one']) &&
    isset($_POST['message'])
    && $_POST['email'] < 40
    && ($_POST['question-one'] == 'Hun' ||  $_POST['question-one'] == 'Eng')
    && $_POST['message'] < 200)
    {


    $dbh = new PDO('mysql:host=localhost;dbname=dnd', 'root', '',
        array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
    $dbh->query('SET NAMES utf8 COLLATE utf8_general_ci');

    $sqlInsert = "insert into uzenet(id, email, lang, message)
                          values(0, :Email, :Country, :Message)";
    $stmt = $dbh->prepare($sqlInsert);
    $stmt->execute(array(
        ':Email' => $_POST['email'],
        ':Country' => $_POST['question-one'],
        ':Message' => $_POST['message']));
    if($count = $stmt->rowCount()) {?>
        <h3>Thank you!</h3>
        <p>E-mal: <?php echo $_POST['email'];?> </p>
        <p>Country: <?php echo $_POST['question-one']; ?></p>
        <p><?php echo $_POST['message'];?> </p>
        <?php $again = false;
    }
    else {
        $again = true;
    }
}
?>