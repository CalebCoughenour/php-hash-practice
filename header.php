<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Example metadata description. This usually shows in search results">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mock Title</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>


<header>
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a href="index.php">
        <img src="img/favicon.png" alt="Navbar logo">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portfolio</a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>

        <?php
        if (isset($_SESSION['userId'])) {
          echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit" class="btn btn-sm btn-outline-secondary">Logout</button>
                </form>';
        } else {
          echo '<form action="includes/login.inc.php" method="post">
                  <input type="text" name="mailuid" placeholder="Username or E-mail">
                  <input type="password" name="pwd" placeholder="Password">
                  <button type="submit" name="login-submit" class="btn btn-sm btn-outline-secondary">Login</button>
                </form>
                <a href="signup.php">Signup</a>';
        }
        ?>
      </div>
    </div>
  </nav>
</header>