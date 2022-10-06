<?php
  require "header.php";
?>


  <main>
    <section>
      <div class="container">
        <h1>Sign-Up</h1>
        <?php
          // Display error message if sign up failed
          if (isset($_GET['error'])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p>Please Fill In All Fields</p>';
            } else if  ($_GET["error"] == "invalidusernameuid") {
              echo "<p>Please Enter A Valid Username</p>";
            } else if  ($_GET["error"] == "invalidemail") {
              echo "<p>Please Enter A Valid Email Address</p>";
            } else if  ($_GET["error"] == "invalidusername") {
              echo "<p>Please Enter A Valid Username And Email</p>";
            } else if  ($_GET["error"] == "passwordcheck") {
              echo "<p>Passwords Did Not Match</p>";
            } else if  ($_GET["error"] == "usertaken") {
              echo "<p>Username Is Already Taken</p>";
            } else if  ($_GET["error"] == "emailtaken") {
              echo "<p>Email Is Already Taken</p>";
            }
          } else if ($_GET["signup"] == "success") {
              echo "<p>Signup Successful</p>"
          }
        ?>

        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwdRepeat" placeholder="Repeat Password">
          <button type="submit" name="signup-submit">Sign Up</button>
        </form>
      </div>
    </section>  
  </main>

<?php
  require "footer.php";
?>