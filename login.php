<?php include "header.php" ?> 
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<section class="login-block">
  <div class="container">
    <div class="row">
      <div class="col-md-8 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid login-image" src="assets/images/hero-bg.jpg" alt="First slide">
              <div class="carousel-caption d-md-block">
                <div class="banner-text">
                  <h2>Welcome To Chemxpert</h2>
                  <p>Chemxpert Database is world's first Buyer & Supplier information platform for entire lifesciences industries, We have developed the world's most innovative online tool using our very own data intelligence algorithms and qualified data sources.</p>
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
          <div class="form-group mt-3">
            <label for="exampleInputPassword1" class="text-uppercase"><i class="fas fa-lock"></i> Password </label>
            <input type="password" class="form-control" placeholder="Enter Password" id="password">
          </div>
           
          <div class="mt-3">
            <label class="form-check-label">
              <a href="forgot_password.php"><small><i class="fas fa-lock"></i> Forget Password..?</small></a>
            </label>
            <button type="submit" class="btn btn-login">Login <i class="fas fa-sign-in-alt"></i></button>
          </div>
         
        </form>
      </div>
    </div>
</section>
<?php include "footer.php" ?>
<script src="assets/js/superplaceholder.js"></script>
<script>
superplaceholder({
  el: emialId,
  sentences: ['Enter Email Id'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
<script>
superplaceholder({
  el: password,
  sentences: ['Enter Password'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>