<?php 
$site                       = $this->konfigurasi_model->listing(); 
$site_nav                   = $this->konfigurasi_model->listing();
$site_info                  = $this->konfigurasi_model->listing();
$nav_profil                 = $this->nav_model->nav_profil();
$nav_download               = $this->nav_model->nav_download();
$nav_berita                 = $this->nav_model->nav_berita();
$nav_agenda                 = $this->nav_model->nav_agenda();
$nav_layanan                = $this->nav_model->nav_layanan();
?>
 <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand" href="<?php echo base_url() ?>">FCG<span>Corp.</span></a>
            <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="oi oi-menu"></span> Menu
            </button>
  
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#speakers-section" class="nav-link"><span>Services</span></a></li>
                <li class="nav-item"><a href="#schedule-section" class="nav-link"><span>Schedule</span></a></li>
                <!-- <li class="nav-item"><a href="#pricing-section" class="nav-link"><span>Pricing</span></a></li> -->
                <li class="nav-item"><a href="#blog-section" class="nav-link"><span>Blog</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
                <!-- <li class="nav-item cta"><a href="#" class="nav-link">Buy Ticket</a></li> -->
              </ul>
            </div>
          </div>
        </nav>
        <section id="home-section" class="hero js-fullheight">
            <h3 class="vr"><span>Welcome</span> to FCG Corp</h3>
            <!-- <div id="timer" class="text-center">
                <div class="time" id="days"></div>
                <div class="time" id="hours"></div>
                <div class="time" id="minutes"></div>
                <div class="time" id="seconds"></div>
            </div> -->
            <?php $i=1; foreach($slider as $slider): ?>
            <div class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight">
                <div class="overlay"></div>
              <div class="container-fluid px-0">
                <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last js-fullheight img" style="background-image:url(<?php echo base_url('assets/upload/image/'.$slider->gambar); ?>);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text mt-4 mt-md-0">
                          <h1 class="mb-4"><?php echo $slider->judul_galeri ?></h1>
                          <h2 class="mb-4"><?php echo strip_tags($slider->isi) ?></h2>
                          <p><a href="<?php echo $slider->website ?>" class="btn btn-primary py-3 px-4">Baca selengkapnya...</a> </p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <?php $i++; endforeach; ?>
            <!-- <div class="slider-item js-fullheight">
                <div class="overlay"></div>
              <div class="container-fluid px-0">
                <div class="row d-flex no-gutters slider-text js-fullheight align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last js-fullheight img" style="background-image:url(<?php echo base_url() ?>assets/meetup/images/bg_2.jpg);">
                        <div class="overlay"></div>
                    </div>
                    <div class="one-forth js-fullheight d-flex align-items-start align-items-md-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text mt-4 mt-md-0">
                          <h1 class="mb-4">Business <span>Conference</span> 2019</h1>
                          <h2 class="mb-4">November 26-30, 2019 - 08:00am-12:00pm</h2>
                          <p><a href="#" class="btn btn-primary py-3 px-4">Get Ticket</a> <a href="#" class="btn btn-white py-3 px-4">Watch Video</a></p>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div> -->
      </section>
  
      <section class="ftco-about ftco-counter ftco-no-pb img ftco-section" id="about-section">
          <div class="container">
              <div class="row d-flex">
                  <div class="col-md-6 col-lg-5 d-flex">
                      <div class="img-about img d-flex align-items-stretch">
                          <div class="overlay"></div>
                          <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(<?php echo $this->website->logo() ?>); max-height: 56px; width: auto;">
                          <!-- <img src="<?php echo $this->website->logo() ?>" alt="logo" class="img-responsive" style="max-height: 56px; width: auto;" /> -->
                          </div>
                      </div>
                  </div>
                  <div class="col-md-6 col-lg-7 pl-lg-5 pt-5">
                      <div class="row justify-content-start pb-3">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading">Welcome</span>
                      <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Us</h2>
                      <!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                      <p>The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p> -->
                      <p><?php echo strip_tags($site_info->tentang).', '.$title ?></p>
                    </div>
                  </div>
                <div class="counter-wrap ftco-animate d-flex mt-md-3">
                <div class="text p-4 pr-5 bg-primary">
                    <p class="mb-0">
                      <span class="number" data-number="50">0</span>
                      <span>Years Experienced</span>
                  </p>
                </div>
                </div>
              </div>
          </div>
          </div>
      </section>
  
      <!-- <section class="ftco-section ftco-no-pb ftco-no-pt">
          <div class="container-fluid px-0">
              <div class="row no-gutters">
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="gallery img" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/gallery-1.jpg);">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="gallery img" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/gallery-2.jpg);">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="gallery img" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/gallery-3.jpg);">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="gallery img" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/gallery-4.jpg);">
                        </div>
                    </div>
              </div>
          </div>
      </section> -->
          
          <!-- <section class="ftco-section ftco-subscribe img" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/bg_1.jpg);">
              <div class="overlay"></div>
              <div class="container">
                  <div class="row justify-content-center pb-5">
            <div class="col-md-7 heading-section heading-section-white text-center ftco-animate">
              <h2 class="mb-4">Join Our Event</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <div class="row d-flex justify-content-center mt-4">
                <div class="col-md-10">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
              </div>
          </section> -->
  
          <section class="ftco-section ftco-speakers" id="speakers-section">
            <div class="container">
               <div class="row justify-content-center pb-5">
                 <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                    <span class="subheading">Services in</span>
                    <h2 class="mb-4"><?php echo $site->namaweb ?></h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
          <div class="row">
                <?php foreach($layanan as $layanan) { ?>
                    <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <!-- <div class="img-wrap d-flex align-items-stretch justify-content-end">
                                <div class="img align-self-stretch" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/staff-1.jpg);"></div>
                            </div> -->
                                <div class="text d-flex align-items-center pt-3"><div>
                                <!-- <h3 class="mb-2">John <br>Wilson</h3> -->
                                <div class="col-md-12 heading-section heading-section-white text-center ftco-animate">
                                    <!-- <p><a href="<?php echo base_url('berita/layanan/'.$layanan->slug_berita) ?>"><?php echo $layanan->judul_berita ?></a></p> -->
                                    <span class="subheading"><?php echo $layanan->judul_berita ?></span>
                                    <p><?php echo $layanan->keywords; ?></p>
                                    
                                    <span class="position mb-4"><a href="<?php echo base_url('berita/layanan/'.$layanan->slug_berita) ?>">read more<i class="fa fa-angle-double-right" aria-hidden="true"></i></a></span>
                                    </div>
                                <ul class="ftco-social">
                                    <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                                </ul>
                            </div>
                           </div>
                        </div>
                    </div>
                      <?php } ?>
                      <!-- <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch justify-content-end">
                                  <div class="img align-self-stretch" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/staff-2.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3">
                                  <div>
                                      <h3 class="mb-2">Robert <br>Wills</h3>
                                      <span class="position mb-4">Businessman</span>
                                      <ul class="ftco-social">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                              </div>
                          </div>
                      </div>

                      <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch justify-content-end">
                                  <div class="img align-self-stretch" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/staff-3.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3">
                                  <div>
                                      <h3 class="mb-2">Mike <br>Smith</h3>
                                      <span class="position mb-4">Entrepreneur</span>
                                      <ul class="ftco-social">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-sm-6 col-md-6 col-lg-3 ftco-animate">
                          <div class="staff">
                              <div class="img-wrap d-flex align-items-stretch justify-content-end">
                                  <div class="img align-self-stretch" style="background-image: url(<?php echo base_url() ?>assets/meetup/images/staff-4.jpg);"></div>
                              </div>
                              <div class="text d-flex align-items-center pt-3">
                                  <div>
                                      <h3 class="mb-2">Adrian <br>Henderson</h3>
                                      <span class="position mb-4">Web Developer</span>
                                      <ul class="ftco-social">
                          <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                          <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                      </div>
                              </div>
                          </div>
                      </div> -->
  
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </section>
   
  
      <section class="ftco-section bg-light" id="blog-section">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Blog</span>
              <h2 class="mb-4">Our Blog</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
          <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/meetup/images/image_1.jpg');">
                </a>
                <div class="text mt-3 float-right d-block">
                    <div class="d-flex align-items-center mb-3 meta">
                      <p class="mb-0">
                          <span class="mr-2">March 23, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <a href="single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/meetup/images/image_2.jpg');">
                </a>
                <div class="text mt-3 float-right d-block">
                    <div class="d-flex align-items-center mb-3 meta">
                      <p class="mb-0">
                          <span class="mr-2">March 23, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                <a href="single.html" class="block-20" style="background-image: url('<?php echo base_url() ?>assets/meetup/images/image_3.jpg');">
                </a>
                <div class="text mt-3 float-right d-block">
                    <div class="d-flex align-items-center mb-3 meta">
                      <p class="mb-0">
                          <span class="mr-2">March 23, 2019</span>
                          <a href="#" class="mr-2">Admin</a>
                          <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                      </p>
                  </div>
                  <h3 class="heading"><a href="single.html">Why Lead Generation is Key for Business Growth</a></h3>
                  <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
              <span class="subheading">Contact</span>
              <h2 class="mb-4">Contact Me</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
          </div>
  
          <div class="row block-9">
            <div class="col-md-7 order-md-last d-flex">
              <form action="#" class="bg-light p-4 p-md-5 contact-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Your Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
  
            <div class="col-md-5 d-flex">
                <div class="row d-flex contact-info mb-5">
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-map-signs"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Address</h3>
                              <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-phone2"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Contact Number</h3>
                              <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-paper-plane"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Email Address</h3>
                              <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                          </div>
                        </div>
                    </div>
                    <div class="col-md-12 ftco-animate">
                        <div class="box p-2 px-3 bg-light d-flex">
                            <div class="icon mr-3">
                                <span class="icon-globe"></span>
                            </div>
                            <div>
                                <h3 class="mb-3">Website</h3>
                              <p><a href="#">yoursite.com</a></p>
                          </div>
                        </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </section>
          
          <section class="ftco-section ftco-no-pt ftco-no-pb">
              <div id="map" class="bg-white"></div>
          </section>

