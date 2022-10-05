<?php
  require "header.php";
?>


  <main>
    <section>
      <div class="container">
        <h1>Sign-Up</h1>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd-repeat" placeholder="Repeat Password">
          <button type="submit" name="signup-submit">Sign Up</button>
        </form>
      </div>
    </section>  
  </main>

<?php
  require "footer.php";
?>