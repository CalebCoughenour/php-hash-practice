<?php
  require "header.php";
?>

  <main>
    <div class="container" id="logged-container">
      <div class="row" id="logged-row">
        <div class="card"  id="logged-in-card">
          <p>You are logged out!</p>
          <p>You are logged in!</p>
        </div>
      </div>
    </div>
  </main>

<?php
  require "footer.php";
?>










  <!-- PASSWORD HASH PRACTICE -->
  <!-- <?php
    // password_hash takes in the password and a method to hash the password
    // echo "test123";
    // echo "<br>";
    // echo password_hash("test123", PASSWORD_DEFAULT);

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);
    
    // password_verify takes in the password in the db and the password entered by user, returns 1 or 0 (true or false)
    echo password_verify($input, $hashedPwdInDb);
  ?> -->

