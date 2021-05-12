<?php if(isset($_SESSION['login'])){ ?>
<form action=".?oldal=üzenetmegjelen" method=post>
    <fieldset>
        <legend align=center>Send us your questions:</legend>
        <br>
        <input type="email" name="email" placeholder="email adress" required><br><br/>
        <label style=margin-left:40%>Hun:<input style=margin-left:0 class="language" type="radio" name="question-one" value="Hun" required><br><br/><label/>
        <label style=margin-left:40%>Eng:<input style=margin-left:0 class="language" type="radio" name="question-one" value="Eng" required><br><br/><label/>
        <textarea class="message" name="message" placeholder="type your questions here" required></textarea><br><br/>
        <input id="button" type="submit" name="send" value="Send">
        <br/>&nbsp;
    </fieldset>
</form>
<?php }
else{ ?>
<h1>Please log in to send messages.</h1>
<?php } ?>