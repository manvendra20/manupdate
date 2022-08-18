@include('front.header');
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="search"> <i class="fa fa-search"></i> <input type="text" class="form-control" placeholder=" " id="pro_name"> <a href="product.php"><button class="btn btn-primary">Search</button></a>
          <!-- <p class="seacrch_example">Ex:- Paracetamol|103-90-2|Cipla Usa Inc</p> -->
        </div>
      </div>
    </div>
    <!--   <h1>Welcome to Chemxpert</h1>
      <h2>We are team of talented designers making websites with Bootstrap</h2>
      <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
  </div>
</section><!-- End Hero -->
<main id="main">
  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content" style="background: url(assets/images/demo.jpg);background-size: cover;background-repeat: no-repeat;">
           <!--  <h3>Advertisment</h3> -->
            <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js">
            </script>
            <script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js">
            </script>
            <!----------HTML code starts here------->
            <div class="owl-carousel owl-theme owl-loaded owl-drag" style="background: rgb(0 0 0 / 23%)">
              <div class="owl-stage-outer">
                <div class="owl-stage">
                  <div class="owl-item cloned">
                    <div class="item">
                      
                      <center>
                        <img src="https://www.chemoxchemopharma.com/template/images/logo-chemox.jpg" class="advertisement-logo">
                        <small>www.chemoxchemopharma.com</small></center>
                      <h5>Chemox Chemopharma Industries</h5>
                      <h6>Our Certification</h6>
                      <ul>
                        <li> Export House Certificate</li>
                        <li> ISO CERTIFICATE 9001:2015</li>
                        <li> ISO CERTIFICATE 14001 2015</li>
                      </ul>
                       <div class="text-center">
              <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
                    </div>
                  </div>
                   <div class="owl-item cloned">
                    <div class="item">
                     <center> <img src="https://www.chemoxchemopharma.com/template/images/logo-chemox.jpg" class="advertisement-logo">
                      <small>www.chemoxchemopharma.com</small></center>
                      <h5>Chemox Chemopharma Industries</h5>
                      <h6>Our Certification</h6>
                      <ul>
                        <li> Export House Certificate</li>
                        <li> ISO CERTIFICATE 9001:2015</li>
                        <li> ISO CERTIFICATE 14001 2015</li>
                      </ul>
                       <div class="text-center">
                       <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
            </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-nav disabled">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center" style="width: 100%;">
            <div class="row">
              <div class="col-xl-3 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                 <!--  <i class="fa fa-capsules"></i> -->
                 <img src="{{asset('front/assets/images/chemistry.png')}}" class="img-fluid">
                  <h4>1 Million</h4>
                  <p>API, Chemical & FDF</p>
                </div>
              </div>
              <div class="col-xl-3 d-flex align-items-stretch">
                <div class="icon-box mt-4 mt-xl-0">
                  <img src="{{asset('front/assets/images/man.png')}}" class="img-fluid">
                  <h4>2 Million</h4>
                  <p>Suppliers & Buyer</p>
                </div>
              </div>
              <div class="col-xl-3 d-flex align-items-strtech">
                <div class="icon-box mt-4 mt-xl-0">
                   <img src="{{asset('front/assets/images/contacts.png')}}" class="img-fluid">
                  <h4>2 Million</h4>
                  <p>Contacts</p>
                </div>
              </div>
              <div class="col-xl-3 d-flex align-items-strtech">
                <div class="icon-box mt-4 mt-xl-0">
                   <img src="{{asset('front/assets/images/man.png')}}" class="img-fluid">
                  <h4>2000 +</h4>
                  <p>Customer</p>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>
    </div>
  </section><!-- End Why Us Section -->
 
  <!-- ======= Industry Updates Section ======= -->
  <section id="about" class="about">
    <div class="container-fluid">
      <div class="row">
        <div class="col-xl-6 col-lg-6 my-auto">
         <div class="row">
             <div class="col-xl-6 col-lg-6 ">
                 <div class="video-box video-box1 d-flex position-relative">
                     <a href="{{asset('front/assets/images/Chemxpert 7.mp4')}}" class="glightbox play-btn mb-4"></a>
                 </div>
                  <h3 class="videoheading">How to Use Chemxpert Database</h3>
             </div>
             <div class="col-xl-6 col-lg-6 ">
                 <div class="video-box video-box2 d-flex position-relative">
                     <a href="{{asset('front/assets/images/Chemxpert 7.mp4')}}" class="glightbox play-btn mb-4"></a>
                 </div>
                 <h3 class="videoheading">Analysis</h3>
             </div>
              <div class="col-xl-6 col-lg-6 ">
                 <div class="video-box video-box3 d-flex position-relative">
                     <a href="{{asset('front/assets/images/Chemxpert 7.mp4')}}" class="glightbox play-btn mb-4"></a>
                 </div>
                  <h3 class="videoheading">FAQ</h3>
             </div>
              <div class="col-xl-6 col-lg-6 ">
                 <div class="video-box video-box4 d-flex position-relative">
                     <a href="{{asset('front/assets/images/Chemxpert 7.mp4')}}" class="glightbox play-btn mb-4"></a>
                 </div>
                  <h3 class="videoheading">Testimonial</h3>
             </div>
         </div>
        </div>
        <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center">
          <h3>Industry Updates</h3>
          <!-- <p>Esse voluptas cumque vel exercitationem. Reiciendis est hic accusamus. Non ipsam et sed minima temporibus laudantium. Soluta voluptate sed facere corporis dolores excepturi. Libero laboriosam sint et id nulla tenetur. Suscipit aut voluptate.</p> -->
          <div class="icon-box">
            <div class="icon"><i class="fa fa-rocket fa-spin"></i></div>
            <h4 class="title"><a href="">Approval/ Launch</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="fa fa-handshake fa-spin"></i></div>
            <h4 class="title"><a href="">Licensing/ Partnering/ Collaboration Deal</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="fab fa-acquisitions-incorporated fa-spin"></i></div>
            <h4 class="title"><a href="">Merger/Acquisition</a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="fa fa-flask icon-help fa-spin"></i> </div>
            <h4 class="title"><a href="">Clinical Trial Update</a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="bx bx-atom fa-spin"></i></div>
            <h4 class="title"><a href="">ODD/ BTA/ FTA Status</a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="fa fa-info-circle fa-spin"></i></div>
            <h4 class="title"><a href="">Info/ Recalls </a></h4>
            <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis <a href="news.php" style="    font-weight: 600;">Read More...</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Industry Updates Section -->
  
  
   <section id="testimonials" class="testimonials">
    <div class="container">
      <div class="section-title">
        <h2>Our Clients</h2>
      </div>
      <marquee bgcolor="#f1f7fd">
          <img src="{{asset('front/assets/images/clients_logo/cipla.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/gsk.png')}}" class="clients-logo" alt="" width="130">
          <img src="{{asset('front/assets/images/clients_logo/glenmark.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/mankind.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/nacto.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/sumitomo.jpg')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/supriyalifescience.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/tripharma.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/upl.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/ipca.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/refarmed-chemical.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/advanced-enzymes.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/chemo.jpg')}}" class="clients-logo" alt="" width="120">
          <img src="{{asset('front/assets/images/clients_logo/lonza.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/hemani.jpg')}}" class="clients-logo" alt="" width="120">
          <img src="{{asset('front/assets/images/clients_logo/deretil.jpg')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/jubilent.jpg')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/kiri.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/excelCrop.png')}}" class="clients-logo" alt="" width="150">
           <img src="{{asset('front/assets/images/clients_logo/asian.png')}}" class="clients-logo" alt="" width="150">
            <img src="{{asset('front/assets/images/clients_logo/atul.png')}}" class="clients-logo" alt="" width="150">
          <img src="{{asset('front/assets/images/clients_logo/polycab.png')}}" class="clients-logo" alt="" width="150">
          <!--<img src="assets/images/clients_logo/godrej.png" class="clients-logo" alt="" width="100">-->
           <img src="assets/images/clients_logo/kohinoor.png" class="clients-logo" alt="" width="100">
        <!--<img src="assets/images/clients_logo/bachem.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/bdrpharma.jpg" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/Biogen.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/biosynth.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/chartwell.jpg" class="clients-logo" alt="" width="100">-->
        
        <!--<img src="assets/images/clients_logo/csir.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/farmson.png" class="clients-logo" alt="" width="100">-->
        
        <!--<img src="assets/images/clients_logo/global_calcium.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/godrej.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/Granules.png" class="clients-logo" alt="" width="100">-->
       
        <!--<img src="assets/images/clients_logo/hikal.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/krka.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/abbott.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/Akums.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/apotex.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/asian.png" class="clients-logo" alt="" width="100">-->
        <!--<img src="assets/images/clients_logo/atul.png" class="clients-logo" alt="" width="100">-->
      </marquee>
    </div>
  </section>
  <!-- ======= Counts Section ======= -->
  <!-- <section id="counts" class="counts">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
           <i class="fa fa-capsules"></i>
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span><span>Million</span>
              <p>API, Chemical & FDF</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="fa fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="2" data-purecounter-duration="1" class="purecounter"></span><span>Million</span>
              <p>Suppliers & Buyer</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-phone"></i>
              <span data-purecounter-start="0" data-purecounter-end="1.9" data-purecounter-duration="1" class="purecounter"></span><span>Million</span>
              <p>Contacts</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="2000" data-purecounter-duration="1" class="purecounter"></span><span>+</span>
              <p>Customer</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
  <!-- End Counts Section -->
  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Why Chemxpert Database</h2>
        <p></p>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-search"></i></div>
            <h4><a href="">Unlimited Searches</a></h4>
            <p>Chemxpert Database with over 1 million products listings and offers unlimited searches option</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hand-pointer"></i></div>
            <h4><a href="">One Stop Solution</a></h4>
            <p>Covers variety of techno commercial & regulatory aspects with suppliers and Buyers information details</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-unlock-alt"></i></div>
            <h4><a href="">Easy Access</a></h4>
            <p>Two ways access to suppliers information – Online annual subscription or quick downloadable Quick-Report for specific product</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-info"></i></div>
            <h4><a href="">Real Time Information</a></h4>
            <p>Database updation & verification 24 hour turnaround</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-address-book"></i></div>
            <h4><a href="">Premium Full Contacts</a></h4>
            <p>Contact the key decision makers by every aspects by email,phone,address in 200 countries.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fa fa-check "></i></div>
            <h4><a href="">90% Accuracy Guarantee</a></h4>
            <p>Chemxpert ensure highest level of correctness & consistency of data points and details</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hand-holding-usd"></i></div>
            <h4><a href="">Affordable Pricing</a></h4>
            <p>Quality email lists enable businesses to make B2B connections for an amazingly low price</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-stretch mt-4 mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-cloud-download-alt"></i></div>
            <h4><a href="">Download Instant Report</a></h4>
            <p>Download Instant Report (PDF / Excel Format)</p>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Services Section -->
  <!-- ======= Frequently Asked Questions Section ======= -->
  <section id="faq" class="faq section-bg">
    <div class="container">
      <div class="section-title">
        <h2>Data Coverage</h2>
        </div>
      <div class="faq-list">
        <ul>
          <li data-aos="fade-up">
            <i class="fa fa-info-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Basic Information<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Chemical Name</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> CAS No.</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Synonyms</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Molecular Formula</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Molecular Weight</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Innovator</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Developer</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Indication</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Market Status</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Segment</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Approval Year</li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="100">
            <i class="fa fa-magic icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Technical Information<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Industry Application </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> End Application </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Route Of Synthesis</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Technology</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Mechanism of Action</li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="200">
            <i class="fa fa-globe icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Commercial Information <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Average Price (USD/KG.)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> US Drug Sales (M USD) </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Average Price (USD/KG.)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> US Drug Sales (M USD) </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="300">
            <i class="fa fa-user icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Supplier Information <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Supplier </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Supplying Volume (MT) </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Supplier Certification </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Country Covered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Suppliers Email </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="400">
            <i class="fa fa-user icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Buyer Information<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Buyer </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Buying Volume (MT) </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Buyer Certification </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Country Covered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> No. Of Buyers Email </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="500">
            <i class="fa fa-trophy icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">Certification<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> USFDA Certified Site </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> EU GMP Certified Site </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Japan PMDA Certified Site </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Canada Certified Site <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India CDSCO Certified Site </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="600">
            <i class="fa fa-gavel icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Patent<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Patent Expiry (US) </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Exclusivity (US) </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> SPC</li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Para IV (US)</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Off Patent - No Generics Approved <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="600">
            <i class="fa fa-flask icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">Clinical Trial<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> United States </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Europe </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Japan </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Canada </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Korea </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Australia &amp; New Zealand </li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="600">
            <i class="fa fa-exclamation-triangle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Warning<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> USFDA Recall/Withdrawal </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> USFDA Warning </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> USFDA Site Inspection </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India CDSCO Banned Drug </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India Banned Pesticide </li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Banned Pesticide (World) </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India NPPA </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India NLEM </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> EU-List Under Monitoring <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i>WHO Essentials Medicine <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
          <li data-aos="fade-up" data-aos-delay="600">
            <i class="fa fa-flag icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">Regulatory Info<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
            <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
              <div class="row">
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> USDMF</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> JDMF</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> KDMF</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> CEP/COS</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> EU API Registered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India EU Written </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India Import Licence </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> REACH Registration</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> FDA NDC <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> UK MHRA <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="data-coverage">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> US ANDA</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Europe Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Japan Registered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> South Korea Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Australia Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Canada Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> India Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Brazil Registered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> South Africa Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Sri Lanka Registered</li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Philippines Registered </li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> US Excipient Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Ghana Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Bangladesh Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> US Veterinary Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i> Pakistan Registered <img src="https://www.chemxpert.in/images/ew_blinkinggif23.gif" style=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section><!-- End Frequently Asked Questions Section -->
  <!-- ======= Departments Section ======= -->
  <section id="departments" class="departments">
    <div class="container">
      <div class="section-title">
        <h2>Our Products</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
      <div class="row gy-4">
        <div class="col-lg-3">
          <ul class="nav nav-tabs flex-column">
            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Chempharma Insights</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Company Profiling</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Chemtrade MART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Advertisement</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-9">
          <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Chempharma Insights</h3>
                  <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-2">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Company Profiling</h3>
                  <p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
                  <p>Ea ipsum voluptatem consequatur quis est. Illum error ullam omnis quia et reiciendis sunt sunt est. Non aliquid repellendus itaque accusamus eius et velit ipsa voluptates. Optio nesciunt eaque beatae accusamus lerode pakto madirna desera vafle de nideran pal</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-3">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Chemtrade MART</h3>
                  <p class="fst-italic">Eos voluptatibus quo. Odio similique illum id quidem non enim fuga. Qui natus non sunt dicta dolor et. In asperiores velit quaerat perferendis aut</p>
                  <p>Iure officiis odit rerum. Harum sequi eum illum corrupti culpa veritatis quisquam. Neque necessitatibus illo rerum eum ut. Commodi ipsam minima molestiae sed laboriosam a iste odio. Earum odit nesciunt fugiat sit ullam. Soluta et harum voluptatem optio quae</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-4">
              <div class="row gy-4">
                <div class="col-lg-8 details order-2 order-lg-1">
                  <h3>Advertisement</h3>
                  <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure voluptas iure porro quis delectus</p>
                  <p>Eaque consequuntur consequuntur libero expedita in voluptas. Nostrum ipsam necessitatibus aliquam fugiat debitis quis velit. Eum ex maxime error in consequatur corporis atque. Eligendi asperiores sed qui veritatis aperiam quia a laborum inventore</p>
                </div>
                <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Departments Section -->
  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container">
      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/images/dummy-user.png" class="testimonial-img" alt="">
                <h3>Nihar Patel</h3>
                <h4> - Director</h4>
                <h6>R K Synthesis Ltd, India</h6>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i> Quite satisfied with your work and our long association with you. Your ability to accommodate and scale a large database makes it extremely convenient for us to search variety of products. For me you are the go to guys for all our data related needs.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/images/dummy-user.png" class="testimonial-img" alt="">
                <h3>Suraj Bhandari</h3>
                <h4> - EA to Managing Director</h4>
                <h6>RA Chem Pharma Ltd., India</h6>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>I am impressed with the team’s ability to collect such hard to find information with no error at all. I have used other databases in past and usually it takes rounds of iteration to get the output right. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/images/dummy-user.png" class="testimonial-img" alt="">
                <h3>Subodh Mahajan</h3>
                <h4> - CEO</h4>
                <h6>Supra Chemicals, India</h6>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i> Extremely happy with the annual subscription of combined pack of their database. They’ve compiled key data points that we were seeking, and wrapped up in in a single file format as per our desire. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="assets/images/dummy-user.png" class="testimonial-img" alt="">
                <h3>Ashray Sistla</h3>
                <h4>- Marketing Manager</h4>
                <h6>Malladi Drugs and Pharmaceuticals Ltd, India</h6>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>Chemxpert provided us the details of key API datasets that helped us take some crucial strategic decisions.
                           <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section><!-- End Testimonials Section -->
</main><!-- End #main --> 
@include('front.footer');
