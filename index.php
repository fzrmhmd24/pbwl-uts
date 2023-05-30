<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Service Elektronik</title>

      <link rel="shortcut icon" href="layouts/assets/img/logo.ico" type="image/x-icon">
      <link rel="stylesheet" href="layouts/assets/css/style.css">
</head>

<body>

      <aside>

            <header>
                  <img src="layouts/assets/img/logo.jpeg" class="brand">
                  <div class="user">Service Fajira</div>
            </header>

            <nav>
                  <ul>
                        <li>
                              <a href="index.php">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Home
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=kamera_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Kamera
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=laptop_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Laptop
                              </a>
                        </li>
                        <li>
                              <a href="index.php?hal=smartphone_tampil">
                                    <img class="icon" src="layouts/assets/img/menu.png" alt=""> Smartphone
                              </a>
                        </li>
                  </ul>
            </nav>

      </aside>

      <main>
            <article>
                  <?php

                  require_once "vendor/autoload.php";
                  require_once "inc/Koneksi.php";

                  if (isset($_GET['hal'])) {
                        require $_GET['hal'] . ".php";
                  } else {
                        require "main.php";
                  }
                  ?>
            </article>

            <footer>
                  Copyright &copy; 2023. Designed by Fajira mahmudah
            </footer>
      </main>

</body>

</html>