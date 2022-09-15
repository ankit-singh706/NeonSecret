<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<div class="footer" id="footer">
<div class="row mx-5 my-5" >
  <div class="col-lg-4 col-md-12">
    <ul class="no-bullets email">
      <li class="icon">Back to Top</li>
      <li class="icon">About Us</li>
      <li class="icon">Contact Us</li>
      <li class="icon">Reviews</li>
    </ul>
  </div>
  <div class="col-lg-4 col-md-12 email">
    <p style="text-align:center;"><b>Connect with Us</b></p>
      <i class="social-icon fab fa-facebook-f icon"></i>
      <i class="social-icon fab fa-twitter icon"></i>
      <i class="social-icon fab fa-instagram icon"></i>
  </div>
  <div class="col-lg-4 col-md-12 email">
    <p><b>Write to us</b></p>
      <i class="social-icon fas fa-envelope"></i>
  </div>
</div>

    <div class="container-fluid" style="text-align:center;  padding-top:2px;">
      <p>© Copyright 2021 NeonSecret</p>
    </div>
</div>
';
?>