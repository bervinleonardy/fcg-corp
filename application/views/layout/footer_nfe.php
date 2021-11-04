<?php
$site = $this->konfigurasi_model->listing();
?>
<style type="text/css" media="screen">
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
<!-- END WA -->
<?php 
$site           = $this->konfigurasi_model->listing();
$nav_profil     = $this->nav_model->nav_profil();
?>
<!-- Start Footer Section -->
<footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About <?php echo $site->namaweb ?></h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="<?php echo $site->twitter ?>"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $site->facebook ?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?php echo $site->instagram ?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Schedule</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Speakers</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Career</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>About Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Contact Us</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Buy Ticket</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"><?php echo nl2br($site->alamat) ?></span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"><?php echo $site->telepon ?></span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><?php echo $site->email ?></span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with  Develop By <a href="http://www.fcg-corp.co.id" title="FCG-CORP">Divtek FCG</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/google-map.js"></script>
  <script src="<?php echo base_url() ?>assets/meetup/js/main.js"></script>

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