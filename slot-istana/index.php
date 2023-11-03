<?php
  session_start();
  error_reporting(0);
  date_default_timezone_set('Asia/Jakarta');
  include './vd/validation.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://files.sitestatic.net/ImageFile/63bc6f1bc22df_Fav-Icon-300x300.png" type="icon">
    <title>Istanaslot789 | Rezeki new member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-bg"><img src="./img/mobile-bg.png" alt="Istanaslot789 lucky create background"></div>
    <div class="container">
      <div class="row justify-content-md-center mt-lg-5">
        <div class="col-md-6 text-center mt-lg-5 peti-front">
          <div class="col-md-12 peti">
            <img src="./img/title.png" class="hidden" alt="Istanaslot789">
            <img src="./img/peti.png" class="peti-att" alt="Istanaslot789 lucky create">

            <img src="./img/powered.png" class="gold-att" alt="Istana lucky create atribute">
          </div>
        </div>
        <div class="col-md-6 text-center voucher-grid">
          <form id="mpi" method="POST" action="./vd/login.php">
            <div class="col-md-12 mt-lg-5 title">
              <img src="./img/title.png" alt="Istanaslot789">
            </div>
            <div class="col-md-12">
              <h1 style="color: aliceblue;">Masukkan Username Anda</h1>
            </div>
            <div class="col-md-12 form">
            <?php
            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "
                      <input type='text' name='vpwd' placeholder='Username belum terdaftar' required>
                    ";
                } else if ($_GET['pesan'] == "fail") {
                    echo "
                      <input type='text' name='vpwd' placeholder='Masukkan Username!' required>
                    ";
                } else if ($_GET['pesan'] == "failure") {
                    echo "
                      <input type='text' name='vpwd' placeholder='Username tidak tersedia' required>
                    ";
                } else {
                  echo "
                    <input type='text' name='vpwd'>
                  ";
                }
            } else {
              echo "
              <input type='text' name='vpwd'>
            ";
            }
            ?>
              <!-- <input type="text" name="vpwd"> -->
            </div>
            <div class="col-md-12 mt-3 submit" id="buttons">
              <button class="btn btn-warning" type="submit" name="submit">SUBMIT</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
