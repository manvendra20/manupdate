<?php include "header.php" ?> 
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="assets/images/hero-bg.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Welcome To Chemxpert</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 login-sec">
        <h2 class="text-center">Login</h2>
        <form class="login-form">
          <div class="form-group">
            <label for="exampleInputEmail1" class="text-uppercase"><i class="fas fa-envelope"></i> Email Id</label>
            <input type="text" class="form-control" placeholder="Enter Email Id" id="emialId">
          </div>
        <!--   <div class="form-group mt-3">
            <label for="exampleInputPassword1" class="text-uppercase"><i class="fas fa-lock"></i> Password </label>
            <input type="password" class="form-control" placeholder="Enter Password" id="password">
          </div> -->
          <div class="mt-3">
            <label class="form-check-label">
              <a href="demo_request.php"><small><i class="fas fa-lock"></i> Forget Password</small></a>
            </label>
            <button type="submit" class="btn btn-login">Reset Password <i class="fas fa-sign-in-alt"></i></button>
          </div>
        </form>
      </div>
    </div>
</section>
<script src="assets/js/superplaceholder.js"></script>
<script>
superplaceholder({
  el: emialId,
  sentences: ['Enter Registered Emial Id'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
