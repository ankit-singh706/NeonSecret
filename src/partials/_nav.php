<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:10vh; font-family:"B612", sans-serif; font-size:1.1rem; font-weight:100px;">
  <a class="navbar-brand" style="color:#f7d794; font-weight: bold; font-size:1.3rem; padding-left: 15px;" href="/NeonSecret">NeonSecret</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" >
      <li class="nav-item active" >
        <a style="color:#f7d794;" class="nav-link" href="/NeonSecret/welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:#f7d794;" class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a style="color:#f7d794;" class="nav-link" href="#z">Contact Us</a>
      </li>';

      if(!$loggedin){
      echo '<li class="nav-item">
        <a style="color:#f7d794;" class="nav-link" href="/NeonSecret/signup.php">Signup</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a style="color:#f7d794;" class="nav-link" href="/NeonSecret/logout.php">Logout</a>
      </li>';
    }
       
      
    echo '</ul> </div>
</nav>';

?>