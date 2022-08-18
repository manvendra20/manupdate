<?php include "header.php" ?> 
<?php include "breadcrumbs.php" ?> 
<section class="product">
    <div class="container">
        <div class="section-title">
            <h2>Summary Of Paracetamol</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="downloadbtn">
                    <a href="dataSummary.php" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Data Summary</span></a>
                    <a href="#appointment" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Download Excel File</span></a>
                    <a href="#appointment" class="downloadPdf-btn scrollto"><span class="d-md-inline"> Download PDF File</span></a>
                </div>
            </div>
            <div class="col-lg-12 mt-1 tabularForm">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-heading">
                            <h5>Formulation</h5>
                        </div>
                        <div class="member">
                            <div class="row">
                                 <div class="col-md-4">
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
                                 <div class="col-md-4">
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
                                 <div class="col-md-4">
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

                                 <div class="col-md-12">
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
            data: [123,140,150,120,100,123,140,150,120,100]
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
            categories: ["Industry Application", "End Application", "Route Of Synthesis", "Technology", " Mechanism Of Action","Industry Application", "End Application", "Route Of Synthesis", "Technology", " Mechanism Of Action"],
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
            text: 'Formulation',
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