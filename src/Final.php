<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=B612&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="index.css" />
    <title>NeonSecret-Pen</title>
    <link rel="stylesheet" href="Products.css" />
  </head>

  <body style="color:#fcab03; text-align:center;line-height:2;">
  <?php require 'partials/_nav.php' ?>
  <div style="margin:180px;">
  <h1 style="font-weight:bolder; font-size:50px; padding: 15px;"><b>Order Confirmed!</b></h1>
     <h2 style="font-weight:bold; font-size:40px;">Thank You for shopping on NeonSecret.</h2>
     <p style="padding:10px; font-size:20px;"> We are prepping your order. In these tough times, our team is working hard while insuring highest safety standards.
          Delivery may take longer then usual.</p>

     <p style="padding:10px; font-size:20px;">Stay Home, Stay Safe.</p>
      <p style="padding:10px; font-size:20px;">Team NeonSecret.</p>     
</div>
      <?php require 'partials/_footer.php' ?>
    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
