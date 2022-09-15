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
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <!--  Google Fonts  -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Ubuntu:wght@300;700&display=swap"
      rel="stylesheet"
    />

    <!--  CSS Stylesheets  -->

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />

    <!--  Bootstrap Scripts  -->

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
      integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
      integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc"
      crossorigin="anonymous"
    ></script>

    <!-- Font Awsome  -->

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>

    <title>NeonSecret</title>
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
    <style>
      body {
        background-color: #171717;
        font-family: "B612", sans-serif;
      }
      .bground {
        height: 60vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }
      .bground::before {
        border-radius: 50px;
        content: "";
        background: url("/assets/imagesHomePage-Background.jpg") no-repeat center
          center/cover;
        position: absolute;
        height: 60%;
        width: 100%;
        z-index: -1;
      }
      .heading {
        font-size: 2.5rem;
        font-weight: bold;
      }
      .texts {
        color: #30336b;
        font-family: "Signika", sans-serif;
        font-size: 1.22rem;
      }

      .center-heading {
        text-align: center;
        font-size: 2.5rem;
        font-weight: bold;
        color: #fcba03;
        margin-top: 23px;
      }

      #testimonials,
      #middle {
        text-align: center;
        background-color: #171717;
        color: #fff;
      }

      .testimonial-img {
        width: auto;
        height: 60vh;
        border-radius: 40px;
        /* margin: 10px; */
      }

      .carousel-item {
        padding: 5% 5%;
      }

      .review-sec {
        height: 47vh;
        margin-top: 23px;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .review-slides {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
      }

      a {
        text-decoration: none;
        color: white;
      }

      a:hover {
        color: white;
      }

      .reviews {
        /* border: 1px solid #fcba03; */
        background-color: #3d3d3d;
        height: 39vh;
        width: 200px;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 20px;
        color: white;
        box-shadow: 2px 3px #fcba03;
      }

      .review-profile {
        display: flex;
        align-items: center;
        height: 12vh;
        border-radius: 20px;
      }

      .profile {
        margin-left: 12px;
        height: 45px;
        margin-top: 6px;
        border-radius: 20px;
      }
      .profile-def h5 {
        margin-left: 13px;
        margin-top: 17px;
        font-weight: bold;
        font-size: 1rem;
        text-align: center;
      }

      .review-star {
        display: flex;
        align-items: center;
        height: 32px;
      }

      .star {
        width: 24px;
        margin-left: 51px;
      }

      .review-star p {
        margin-top: 18px;
        margin-left: 8px;
      }

      .review-text p {
        height: 128px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        text-align: center;
        margin: 5px 10px;
      }

      .hr-line {
        border-top: 1px solid #fcba03;
        margin-top: 60px;
      }
    </style>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>

    <div class="bground">
      <div class="heading">
        <h1 class="heading">Happiness is shopping for stationary</h1>
      </div>
      <div class="texts">
        <p>
          We at NeonSecret offering you a wide range of stationary products to
          go through.
        </p>
      </div>
    </div>

    <div><h2 class="center-heading">Our Products</h2></div>

    <section id="testimonials">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-bs-ride="false"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="/NeonSecret/Product-Pencil.php"
              ><img
                class="testimonial-img"
                src="/assets/images/Pencil-1.jpg"
                alt="lady-profile"
            /></a>
          </div>

          <div class="carousel-item">
            <a href="/NeonSecret/Product-Crayons.php">
              <img class="testimonial-img" src="/assets/images/Crayons-1.jpg" alt=""
            /></a>
          </div>

          <div class="carousel-item">
            <a href="/NeonSecret/Product-Notebook.php"
              ><img class="testimonial-img" src="/assets/images/Notebook-1.jpg" alt=""
            /></a>
          </div>
          <div class="carousel-item">
            <a href="/NeonSecret/Product-StickyNotes.php"
              ><img class="testimonial-img" src="/assets/images/Sticky-Notes.jpg" alt=""
            /></a>
          </div>
          <div class="carousel-item">
            <a href="/NeonSecret/Product-Files.php"
              ><img class="testimonial-img" src="/assets/images/Files-4.jpg" alt=""
            /></a>
          </div>
          <div class="carousel-item">
            <a href="/NeonSecret/Product-Markers.php"
              ><img class="testimonial-img" src="/assets/images/Marker-1.jpg" alt=""
            /></a>
          </div>
          <div class="carousel-item">
            <a href="/NeonSecret/Product-Pen.php"
              ><img class="testimonial-img" src="/assets/images/Pen-1.jpg" alt=""
            /></a>
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

    <div><h2 class="center-heading">Our Trusted Customers</h2></div>

    <div class="review-sec">
      <div class="review-slides">
        <div class="reviews">
          <div class="review-profile">
            <img
              class="profile"
              src="https://media-exp3.licdn.com/dms/image/C4E03AQHuVxQ3mBZ86w/profile-displayphoto-shrink_100_100/0/1596519612565?e=1632355200&v=beta&t=dhQhCjjy-ipOTn3zPui1CR-9RMEMqKBD785ZHEKZJqU"
              alt=""
            />
            <div class="profile-def">
              <a href="https://www.linkedin.com/in/ankit-singh-b23789191/"
                ><h5>Ankit Singh</h5></a
              >
            </div>
          </div>
          <div class="review-star">
            <img class="star" src="/assets/images/Star.png" alt="" />
            <p>4.5/5.0</p>
          </div>
          <div class="review-text">
            <p>
              "This is the best website i have ever come across related to
              stationary products"
            </p>
          </div>
        </div>

        <div class="reviews">
          <div class="review-profile">
            <img
              class="profile"
              src="https://media-exp3.licdn.com/dms/image/C5603AQHFvSct0-B4pw/profile-displayphoto-shrink_200_200/0/1589197997944?e=1632355200&v=beta&t=_zh25NdhQa7Br5Dc8I9_KMnI5gQN60L64RPSj4bxqcI"
              alt=""
            />
            <div class="profile-def">
              <a href="https://www.linkedin.com/in/gupta-esha/"
                ><h5>Esha Gupta</h5></a
              >
            </div>
          </div>
          <div class="review-star">
            <img class="star" src="/assets/images/Star.png" alt="" />
            <p>4.1/5.0</p>
          </div>
          <div class="review-text">
            <p>
              "This is the best website i have ever come across related to
              stationary products"
            </p>
          </div>
        </div>
        <div class="reviews">
          <div class="review-profile">
            <img
              class="profile"
              src="https://media-exp3.licdn.com/dms/image/C5103AQH-qh8syJUquw/profile-displayphoto-shrink_200_200/0/1567068398306?e=1632355200&v=beta&t=wCNpzF5AD8C9m5MofYPoLvB1MVXU4l8Ds9_HYrGEoiw"
              alt=""
            />
            <div class="profile-def">
              <a href="https://www.linkedin.com/in/satyam-kotak-490789191/"
                ><h5>Satyam Kotak</h5></a
              >
            </div>
          </div>
          <div class="review-star">
            <img class="star" src="/assets/images/Star.png" alt="" />
            <p>4.6/5.0</p>
          </div>
          <div class="review-text">
            <p>
              "This is the best website i have ever come across related to
              stationary products"
            </p>
          </div>
        </div>
        <div class="reviews">
          <div class="review-profile">
            <img
              class="profile"
              src="https://media-exp1.licdn.com/dms/image/C4D0BAQHwTXk7UwlMTg/company-logo_200_200/0/1622595370493?e=1636588800&v=beta&t=GqNH0zqPFZBTTr49CNhoDJ_EO3gfvZkzjiJQWc9pZW0"
              alt=""
            />
            <div class="profile-def">
              <a href="https://en.wikipedia.org/wiki/Jeff_Bezos"
                ><h5>Jeff Bezos</h5></a
              >
            </div>
          </div>
          <div class="review-star">
            <img class="star" src="/assets/images/Star.png" alt="" />
            <p>4.8/5.0</p>
          </div>
          <div class="review-text">
            <p>
              "This is the best website i have ever come across related to
              stationary products"
            </p>
          </div>
        </div>
        <div class="reviews">
          <div class="review-profile">
            <img
              class="profile"
              src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a8/Bill_Gates_2017_%28cropped%29.jpg/800px-Bill_Gates_2017_%28cropped%29.jpg"
              alt=""
            />
            <div class="profile-def">
              <a href="https://en.wikipedia.org/wiki/Bill_Gates"
                ><h5>Bill Gates</h5></a
              >
            </div>
          </div>
          <div class="review-star">
            <img class="star" src="/assets/images/Star.png" alt="" />
            <p>4.9/5.0</p>
          </div>
          <div class="review-text">
            <p>
              "This is the best website i have ever come across related to
              stationary products"
            </p>
          </div>
        </div>
      </div>
    </div>

    <div class="hr-line"></div>

    <!-- Font Awsome  -->

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"
    ></script>

    <?php require 'partials/_footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
