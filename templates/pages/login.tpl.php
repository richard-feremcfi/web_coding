    <form action = "?oldal=belep" method = "post">
      <fieldset>
        <legend align=center>Login</legend>
        <br>
        <input type="text" name="felhasznalo" placeholder="loginname" required max=40><br><br>
        <input type="password" name="jelszo" placeholder="Password" required max=40><br><br>
        <input id="button" type="submit" name="belepes" value="login">
        <br>&nbsp;
      </fieldset>
    </form>
    <h3 align=center>Register if not already a user!</h3>
    <form action = "?oldal=regisztral" method = "post">
      <fieldset>
        <legend align=center>Register</legend>
        <br>
        <input type="text" name="vezeteknev" placeholder="Surname" required max=40><br><br>
        <input type="text" name="utonev" placeholder="Lastname" required max=40><br><br>
        <input type="text" name="felhasznalo" placeholder="Username" required max=40><br><br>
        <input type="password" name="jelszo" placeholder="Password" required max=40><br><br>
        <input id="button" type="submit" name="regisztral" value="Register">
        <br>&nbsp;
      </fieldset>
    </form>