<?php include "header.php" ?> 
<?php include "breadcrumbs.php" ?> 
<section class="product">
    <div class="container">
        <div class="section-title">
            <h2>Summary Of Paracetamol</h2>
        </div>
        <div class="row">
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
                            <h5>Technical Information</h5>
                        </div>
                        <div class="member">
                            <div class="row">
                               <!--  <div class="col-md-12">
                                    <ul class="nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="pill" href="#tabular"><i class="fa fa-table" aria-hidden="true"></i> Table View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="pill" href="#graph"><i class="fas fa-chart-bar"></i> Graph View</a>
                                        </li>
                                    </ul>
                                </div> -->
                                 <div class="col-md-5">
                                     <ul class="getleft">
                                                                            <li><a href="product-detail.php"><img src="assets/images/laptop.png" class="product-icon"> Industry Application</a> <span class="badge rounded-pill bg-primary">123</span></li>
                                                                            <hr>
                                                                            <li><a href="#"><img src="assets/images/microchip.png" class="product-icon"> End Application</a> <span class="badge rounded-pill bg-primary">123</span></li>
                                                                            <hr>
                                                                            <li><a href="#"><img src="assets/images/cogs.png" class="product-icon"> Route Of Synthesis </a> <span class="badge rounded-pill bg-primary">123</span></li>
                                                                            <hr>
                                                                            <li><a href="#"><img src="assets/images/magic-wand.png" class="product-icon"> Technology</a> <span class="badge rounded-pill bg-primary">123</span></li>
                                                                            <hr>
                                                                            <li><a href="#"><img src="assets/images/action.png" class="product-icon"> Mechanism Of Action </a> <span class="badge rounded-pill bg-primary">123</span></li>
                                                                        </ul>
                               
                                 </div>

                                 <div class="col-md-7">
                                      <div id="technical"></div>
                                 </div>
                                 </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <script>
    var options = {
        series: [{
            name: 'Inflation',
            data: [123,140,150,120,100]
        }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function(val) {
                return val;
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#304758"]
            }
        },
        xaxis: {
            categories: ["Industry Application", "End Application", "Route Of Synthesis", "Technology", " Mechanism Of Action"],
            position: 'top',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                fill: {
                    type: 'gradient',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    }
                }
            },
            tooltip: {
                enabled: true,
            }
        },
        yaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function(val) {
                    return val;
                }
            }
        },
        title: {
            text: 'Technical Information',
            floating: true,
            offsetY: 330,
            align: 'center',
            style: {
                color: '#444'
            }
        }
    };
    var chart = new ApexCharts(document.querySelector("#technical"), options);
    chart.render();
    </script>
   

<?php  include "footer.php" ?>