 <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><img src="{{asset('front/assets/images/logo.png')}}" width="200px"></h3>
            <p>
               C-89, Sector-65 Noida-U.P. 201301 (India)<br>
              <strong>Phone:</strong>  +91-120-6631301-335 <br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="about.php">About</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pricing.php">Subscription</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="sources.php">Sources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="blogs.php">Blog</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">Legal</a></li>-->
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Products</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="chempharma_insights.php">Chempharma Insights</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Company Profiling</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="chemtrademart.php">Chemtrade MART</a></li>
              <!--<li><i class="bx bx-chevron-right"></i> <a href="#">ChemTrade Live (CTL)</a></li>-->
              <li><i class="bx bx-chevron-right"></i> <a href="advertisment.php">Advertisement</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>SUBSCRIBE TO OUR NEWSLETTER</h4>
            <p>Join our newsletter for all the information of Pharma Companies !</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
           <div class="col-lg-12 col-md-12">
               <ul class="legal-tab">
                   <li><a href="policy.php">Privacy Policy |</a></li>
                   <li><a href="disclaimer.php">Disclaimer |</a></li>
                   <li><a href="terms&conditions.php">Terms And Conditions |</a></li>
                   <li><a href="refund.php">Refund Policy |</a></li>
               </ul>
           </div>
        </div>
      </div>
    </div>
    <div class="container d-md-flex py-2">
      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Lifescience Intellipedia Pvt. Ltd.</span></strong>. All Rights Reserved
        </div>      
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/LIntellipedia" class="twitter" target="_blank"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/lifescience.intellipedia/?ref=pages_you_manage" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/lifescienceintellipedia/" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.youtube.com/channel/UC9aFfuj8m3uO1lCKCjP6xtA" class="google-plus" target="_blank"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.linkedin.com/company/3711222/admin/" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="{{asset('front/assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('front/assets/vendor/php-email-form/validate.js')}}"></script>
  <!-- Template Main JS File -->
  <script src="{{asset('front/assets/js/main.js')}}"></script>
  <script src="{{asset('front/assets/js/superplaceholder.js')}}"></script>
  <script src="{{asset('front/assets/js/owl.carousel.js')}}"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
  <script src="{{asset('front/assets/js/myjs.js')}}"></script>
  <script>
 superplaceholder({
  el: pro_name,
  sentences: ['Search by Product Name| CAS No.| Company Name','Ex:- Paracetamol|103-90-2|Cipla Usa Inc'],
  options: {
    letterDelay: 80,
    loop: true,
    startOnFocus: false
  }
})
</script>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1, 
  // items change number for slider display on desktop
  
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true
});

</script>
</body>
</html>