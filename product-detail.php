<?php include "header.php" ?> 

<?php include "breadcrumbs.php" ?> 
<section class="product">
    <div class="container">
        <div class="section-title">
            <h2>Summary Of Paracetamol</h2>
        </div>
        <div class="row">
            <div class="col-lg-2">
                    <div class="accordion" id="myAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Advance Filter</button>
                    </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
             <div class="downloadbtn">
                    <a href="dataSummary.php" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Data Summary</span></a>
                    <a href="#appointment" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Download Excel File</span></a>
                    <a href="#appointment" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Download PDF File</span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mt-3">
            <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
        <div class="login-sec">
       <!--  <h2 class="text-center">Advance Filter</h2> -->
        <div class="form-inline advance-search">
            <form class="login-form advance-search-form ">
          <div class="row">
              <div class="col-lg-3">
                  <div class="form-group">
            <!-- <label for="exampleInputEmail1" class="text-uppercase"><i class="fas fa-envelope"></i>Company Name</label> -->
            <input type="text" class="form-control" placeholder="Search By Company" id="emialId">
          </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group">
            <input type="text" class="form-control" placeholder="Search By Country" id="password">
          </div>
              </div>
              <div class="col-lg-3">
                  <div class="form-group">
            <input type="text" class="form-control" placeholder="Search By Buyer Name" id="password">
          </div>
              </div>
               <div class="col-lg-3">
                  <div class="form-group">
            <input type="text" class="form-control" placeholder="Search By Supplier Name" id="password">
          </div>
              </div>
              <div class="col-lg-12 text-center">
                   <div class="mt-3">
                    <a href="login.php" class="appointment-btn scrollto"><span class="d-md-inline"> Search <i class="fas fa-search"></i> </span></a>
          </div>
              </div>
          </div>
        </form>
        </div>
      </div>
                    </div>
        </div>
            <div class="col-lg-12 mt-1 tabularForm">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-heading">
                            <h5>View Detailed Analysis</h5>
                        </div>
                        <div class="member">
                            <div class="row">
                                <div class="table-responsive">
                                                             <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Company Logo</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="assets/images/clients_logo/1.png" width="50" height="50"></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/5.png" width="50" height="50"></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/31.png" width="50" height="50"></td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/24.png" width="50" height="50"></td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/12.png" width="50" height="50"></td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/31.png" width="50" height="50"></td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/22.png" width="50" height="50"></td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td><img src="assets/images/clients_logo/3.png" width="50" height="50"></td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>Company Logo</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
                                </div>
        
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php  include "footer.php" ?>