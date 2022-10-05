<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mock Title</title>
</head>
<body>

  <?php
    // password_hash takes in the password and a method to hash the password
    // echo "test123";
    // echo "<br>";
    // echo password_hash("test123", PASSWORD_DEFAULT);

    $input = "test123";
    $hashedPwdInDb = password_hash("test123", PASSWORD_DEFAULT);
    
    // password_verify takes in the password in the db and the password entered by user, returns 1 or 0 (true or false)
    echo password_verify($input, $hashedPwdInDb);
  ?>

</body>
</html>