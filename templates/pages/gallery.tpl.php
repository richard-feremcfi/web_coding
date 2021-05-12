<?php
    if (!empty($uzenet))
    {
        echo '<ul>';
        foreach($uzenet as $u)
            echo "<li>$u</li>";
        echo '</ul>';
    }
?>
<?php
    include('./includes/config.inc.php'); 
    $kepek = array();
    $olvaso = opendir($MAPPA);
    while (($fajl = readdir($olvaso)) !== false) {
        if (is_file($MAPPA.$fajl)) {
            $vege = strtolower(substr($fajl, strlen($fajl)-4));
            if (in_array($vege, $TIPUSOK)) {
                $kepek[$fajl] = filemtime($MAPPA.$fajl);
            }
        }
    }
    closedir($olvaso);
?>
<div id="galeria">
    <h1 align=center>Gallery</h1>
    <?php
    include('./includes/config.inc.php');
    $uzenet = array();   
    if (isset($_POST['kuld'])) {
        $fajlok = $_FILES["fajlok"];
        for($i = 0; $i < count($fajlok["name"]); $i++) {
            if ($fajlok['error'][$i] == 4){
                echo '<script type="text/javascript">';
                    echo ' alert("no file selected")';
                    echo '</script>';}
            elseif ($fajlok['error'][$i] == 1
                        or $fajlok['error'][$i] == 2
                        or $fajlok['size'][$i] > $MAXMERET){
                echo '<script type="text/javascript">';
                    echo ' alert("size too big")';
                    echo '</script>';}
            elseif (!in_array($fajlok['type'][$i], $MEDIATIPUSOK)){
                echo '<script type="text/javascript">';
                    echo ' alert("Not accaptable file format")';
                    echo '</script>';}
            else {
                $vegsohely = $MAPPA.strtolower($fajlok['name'][$i]);
                if (file_exists($vegsohely)){
                    echo '<script type="text/javascript">';
                    echo ' alert("File already exists")';
                    echo '</script>';}
                else {
                    move_uploaded_file($fajlok['tmp_name'][$i], $vegsohely);
                }
            }
        }        
    }
?>
        <?php
            $i = 1;
            echo '<table>';
            foreach($kepek as $fajl => $datum) {
            if($i == 1)
            echo '<td>';
            echo '<tr>';
            arsort($kepek); ?>
            <a href="<?php echo $MAPPA.$fajl ?>">
                <img class="images" src="<?php echo $MAPPA.$fajl ?>">
            </a>
            <?php
            echo '</tr>';
            if($i == 3) {
            echo "</td>";
            $i=0;
        }
    $i++;
}
echo '</table>';
?>

</div>
   <form action="?oldal=gallery" method="post" enctype="multipart/form-data">
      <fieldset>
        <legend align=center>Select pictures</legend>
        <br>
        <input type="file" name="fajlok[]" accept="image/png, image/jpeg" multiple required>
        <input type="submit" name="kuld" value="Send">
        <input type="hidden" name="max_file_size" value="110000">
        <br>&nbsp;
      </fieldset>
    </form>