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

    <title>NeonSecret-Notebook</title>
    <link rel="stylesheet" href="Products.css" />
  </head>

  <body>
  <?php require 'partials/_nav.php' ?>

    <div><h2 class="center-heading">Notebook</h2></div>
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
              src="./assets/images/Notebook-1.jpg"
              alt="lady-profile"
            />
          </div>

          <div class="carousel-item">
            <img class="testimonial-img" src="./assets/images/Notebook-2.jpg" alt="" />
          </div>

          <div class="carousel-item">
            <img
              class="testimonial-img"
              src="./assets/images/Notebook-3.jpg"
              alt=""
            />
          </div>
          <div class="carousel-item">
            <img
              class="testimonial-img"
              src="./assets/images/Notebook-4.jpg"
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
        ➤A blank book that you can write in. Students often carry notebooks, where they can take notes <br/>
        ➤ You might keep one for writing to-do lists or thoughts (like a journal), or your notebooks might all be large binders full of class notes and math problems.
      </p>
    </div>

    <div class="specs-sec">
        <div><h2 class="despec-heading">Specifications:</h2></div>
        <p class="para">
            ➤Consists of 150 pages<br/>
            ➤Ruled/Plain Pages.<br/>
            ➤Height=25cm<br/>
            ➤Width=10cm<br/>
            ➤Multi-coloured CoverPage
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
