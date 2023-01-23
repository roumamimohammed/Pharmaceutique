<!doctype html5>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="<?= URLROOT . '/css/bootstrap.min.css'; ?>">
   <link rel="stylesheet" href="<?= URLROOT . '/css/boxicons.min.css'; ?>">
   <link rel="stylesheet" href="<?= URLROOT . '/css/style.css'; ?>">
   <!-- CSS only -->
   <link rel="icon" type="image/x-icon" href="<?= URLROOT . '/img/favicon.ico'; ?>" />
   <!-- Font Awesome icons (free version)-->
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <!-- Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
   <!-- Core theme CSS (includes Bootstrap)-->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="<?php echo URLROOT . '/css/style.css' ?>">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?php echo URLROOT . '/css/statics.css' ?>">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
   <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#example').DataTable();
      });
   </script>

   <title>PhaG</title>

</head>

<body>

<div class="container ">

    <form class="form-card" enctype="multipart/form-data" method="post" action="">
    <div id="addProductAdd"></div>
    <div class="row justify-content-between">
        <div class="form-group col-sm-6">
            <button type="button" id="addNew" class="btn-block btn-dark">New Product</button>
        </div>
        <div class="form-group col-sm-6">
            <input style="width: 200px;" type="submit" class="btn-block btn-primary" value="Add Products">
        </div>
    </div>
</form>
</div>

<script src="<?= URLROOT . '/js/admin.js'; ?>"></script>
