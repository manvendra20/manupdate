<?php include "header.php" ?> 
<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<style>
    .download .banner-text {
    bottom: 35px !important;
}
</style>
<section class="login-block download">
  <div class="container">
    <div class="row">
     
      <div class="col-md-5 banner-sec">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="assets/images/demo.jpg" alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <div class="banner-text">
                  <h2>Download Sample Report</h2>
                  <p>Get Sample Reports Related to API,PHARMA INTERMEDIATES,FINE & SPECIALITY CHEMICALS,EXCIPIENTS,DYES & PIGMENTS,AGROCHEMICALS,COSMETIC INGREDIENTS,FOOD, NUTRA & EXTRACTS,POLYMERS,FLAVOR AND FRAGRANCES,BIOTECH & BIOCHEMICALS,VETERINARY ACTIVE and COMPANY SEARCH REPORT.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="col-md-7 login-sec">
        <h2 class="text-center">Request For Sample Report</h2>
        <form class="login-form" action="downloadsample_reports.php">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="exampleInputEmail1" class="text-uppercase">Enter your Name</label>
                <input type="text" class="form-control" placeholder="Enter Email Id" id="forname">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mt-3">
                <label for="exampleInputEmail1" class="text-uppercase">Designation</label>
                <input type="text" class="form-control" placeholder="Enter Email Id" id="fordesignation">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mt-3">
                <label for="exampleInputEmail1" class="text-uppercase">Company Name</label>
                <input type="text" class="form-control" placeholder="Enter Email Id" id="forcompany">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group mt-3">
                <label for="exampleInputPassword1" class="text-uppercase">Email Address </label>
                <input type="password" class="form-control" placeholder="Enter Password" id="foremail">
              </div>
            </div>
            <div class="col-md-2 ">
              <div class="form-group mt-3">
                <label for="exampleInputPassword1" class="text-uppercase"></label>
                <select class="form-select ">
                  <option>+91</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group mt-3">
                <label for="exampleInputPassword1" class="text-uppercase"></label>
                <input type="number" class="form-control" placeholder="Enter Mobile No." id="formobile">
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="form-group mt-3">
                <label for="exampleInputPassword1" class="text-uppercase"></label>
                <select class="form-select ">
                  <option>Select User Type</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="form-group mt-3">
                <label for="exampleInputPassword1" class="text-uppercase"></label>
                <select class="form-select ">
                  <option>Select Country</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
            </div>
             <div class="col-md-12">
              <div class="mt-3">
             <label>
          <input type="checkbox" checked="checked" name="sameadr"> <small>I Agree to the <b>Terms and Conditions</b></small>
        </label>
          </div>
            </div>
            <div class="col-md-12">
              <div class="mt-3">
                <label class="form-check-label">
                 <small> Click here to <a href="login.php"><i class="fas fa-sign-in-alt"></i> login</a></small>
                </label>
                <button type="submit" class="btn btn-login">Download Sample</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
</section>
<?php include "footer.php" ?>
<script src="assets/js/superplaceholder.js"></script>
<script>
superplaceholder({
  el: foremail,
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
  el: forname,
  sentences: ['Enter Your Name'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
<script>
superplaceholder({
  el: fordesignation,
  sentences: ['Enter Designation'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
<script>
superplaceholder({
  el: forcompany,
  sentences: ['Enter Company Name'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
<script>
superplaceholder({
  el: formobile,
  sentences: ['Enter Mobile No.'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>