<?php
$site = $this->konfigurasi_model->listing();
?>
<!-- <style type="text/css" media="screen">
  .kontakwa {
    z-index: 9999;
    position: fixed;
    background-color: #cc9000;
    padding: 10px;
    bottom: 0;
    right: 120px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px green;
    border-left: solid 2px green;
    border-right: solid 2px green; */
    min-width: 80px;
    border-radius: 0 10px 0 0;
  }
  .telepon {
    z-index: 9999;
    position: fixed;
    background-color: #cc8800;
    padding: 10px;
    bottom: 0;
    right: 200px;
    min-width: 80px;
    font-weight: 700;
    font-size: 40px;
    color: white;
    text-align: center;
    /* border-top: solid 2px #e93478;
    border-left: solid 2px #e93478;
    border-right: solid 2px #e93478; */
    border-radius: 10px 0 0 0;
  }
  .kontakwa a, .telepon a {
    color: white;
    font-size: 40px;
    font-weight: 700;
    text-align: center;
  }
  .kontakwa:hover, .telepon:hover {
    background-color: pink;

  }
</style>
<div class="telepon">
  <a href="tel:<?php echo $site->telepon ?>"><i class="fa fa-phone"></i></a>
</div>
<div class="kontakwa">
  <a href="https://wa.me/<?php echo str_replace('+','',$site->hp) ?>?text=Saya%20tertarik%20untuk%20Menggunakan%20Layanan%20di%20Perusahan%20Anda.%20Apakah%20bisa%20dibantu?" class="topbar-social-item"><i class="fa fa-whatsapp"></i>
        </a>
</div>
END WA -->
<?php 
$site           = $this->konfigurasi_model->listing();
$nav_profil     = $this->nav_model->nav_profil();
?>
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p></p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><?php echo $site->namaweb ?></h3>
            <p><?php echo nl2br($site->alamat) ?>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Mapping</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Instalasi Elektrikal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Instalasi Mekanikal</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Qgis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Arcgis</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p></p>
            <div class="social-links mt-3">
              <a href="<?php echo $site->twitter ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="<?php echo $site->facebook ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="<?php echo $site->instagram ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="<?php echo $site->google_plus ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
              <!-- <a href="<?php echo $site->linkedin ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a> -->
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo date('Y') ?></span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
        Develop by <a href="http://www.fcg-corp.co.id" title="FCG-CORP">Divtek FCG</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/arsha/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/arsha/assets/js/main.js"></script>

<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- DataTables JS -->
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
<script>
  $(function () {
     //Initialize Select2 Elements
    $('.select2').select2()
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    ClassicEditor
      .create(document.querySelector('.editorku'))
      .then(function (editor) {
        // The editor instance
      })
      .catch(function (error) {
        console.error(error)
      })

    // bootstrap WYSIHTML5 - text editor

    $('#keterangan').wysihtml5({
      toolbar: { fa: true }
    })
  })
</script>
</body>
</html>
