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

    <title>NeonSecret-StickyNotes</title>
    <link rel="stylesheet" href="Products.css" />
    <link rel="stylesheet" href="index.css" />
  </head>

  <body>
  <?php require 'partials/_nav.php' ?>

    <div><h2 class="center-heading">StickyNotes</h2></div>
    <div style="border-top: 1px solid #fcba03;
    margin-top: 35px; width:70%; margin:35px auto;"></div>

    <section id="testimonials">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="false"
      >
      
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="testimonial-img"
              src="./assets/images/StickyNotes-1.jpg"
              alt="Sticky-Notes"
            />
          </div>

          <div class="carousel-item">
            <img class="testimonial-img" src="./assets/images/StickyNotes-2.jpg" alt="" />
          </div>

          <div class="carousel-item">
            <img
              class="testimonial-img"
              src="./assets/images/StickyNotes-3.jpg"
              alt=""
            />
          </div>
          <div class="carousel-item">
            <img
              class="testimonial-img"
              src="./assets/images/StickyNotes-4.jpg"
              alt=""
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <div class="desc-sec">
      <div><h2 class="despec-heading">Description:</h2></div>
      <p class="para">
        ➤High notes, high class.<br/>
            ➤A slip of notepaper having an adhesive strip on the back that allows attachment to and removal from a surface.<br/>
      </p>
    </div>

    <div class="specs-sec">
        <div><h2 class="despec-heading">Specifications:</h2></div>
        <p class="para">
            ➤Post-it super sticky notes have 2X the sticking power<br/>
            ➤Post-it super sticky notes stick and re-stick so your thoughts get noticed<br/>
            ➤Reliably sticks so your message or reminder stays front and center<br/>
            ➤Post-it super sticky notes are recyclable<br/>
            ➤4 bundles of 20 notes each of different neon colour in each pack.<br/>
            ➤Shape : Square<br/>
            ➤Size : 20mm*20mm<br/>
        </p>
      </div>

      <div class="but" style="margin-bottom:100px; margin-top:100px;">
        <button class="btn btt"><a style="color:#171717; text-decoration:none;" href="/NeonSecret/Final.php">  Buy Now </a>
        </button>
      </div>

      <div style="border-top: 1px solid #fcba03;
    margin-top: 60px;"></div>

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
