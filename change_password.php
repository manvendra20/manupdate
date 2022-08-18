<?php include "header.php" ?>
<?php include "breadcrumbs.php" ?>
<div class="container">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 mt-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/userImage.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>Monika Sharma</h4>
                      <p class="text-secondary mb-1">monika_sharma@lifescienceintellipedia.com</p>
                      <p class="text-muted font-size-sm">LifeScience Intellipedia PVT. LTD</p>
                      <!--<button class="btn btn-primary">Follow</button>-->
                      <!--<button class="btn btn-outline-primary">Message</button>-->
                       <table class="table user-profile">
   <tbody>
      <tr>
         <td>Buyer Download Limit(For each tabs)</td>
         <td>1000</td>
      </tr>
       <tr>
         <td>Supplier Download Limit(For each tabs)</td>
         <td>1000</td>
      </tr>
       <tr>
         <td>Subscription Start to End Date</td>
         <td>01/01/2022 to 31/12/2023</td>
      </tr>
    </tbody>
  </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3 mt-3">
                <div class="card-body">
                    <h5>Change Password</h5>
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
            <button type="submit" class="btn btn-login">Update</button>
          </div>
         
        </form>
                    
                </div>
              </div>
            </div>
          </div>
        </div>
</div>
    <?php include "footer.php" ?>