<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->


  <link rel="stylesheet" href="<?= URLROOT . '/css/style.css'; ?>">


  <title>PhaG</title>
</head>

<body style="background-color: gray;">

  <a class='fas fa-angle-double-left' style='font-size:28px;color:Black ' href="<?= URLROOT . '/pages/index'; ?>"></a>

  <div class="wrapper">
    <div class="left">
      <h3>Wellcome</h3>

      <img src="../img/jjjo.jpg" alt="Rocket_image">
    </div>
    <div class="right">
      <div class="tabs">
        <ul>
          <li class="login_li">Register</li>
        </ul>
      </div>
      <form name="RegForm" onsubmit="return W3docs()" class="register" action="<?php echo URLROOT; ?>/Users/register" method="POST">
        <div class="input_field">
          <input style="width: 190px;" type="text" value="" name="name" placeholder="email" class="input" id="name">

        </div>
        <div class="input_field">
          <input style="width: 190px;" type="password" value="" name="pass" placeholder="Pass" class="input" id="motdepass">

        </div>

        <button type="submit" class="btn btn-outline-dark rounded"><span style="color: white;">Register</span></button>
      </form>
    </div>
  </div>
</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT . '/js/connection.js' ?>"></script>
</html>