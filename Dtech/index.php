<?php 
session_start();
require '../db.php';

// Logos
$logos = "SELECT * FROM logos WHERE status=1";
$logo_res = mysqli_query($db_connect, $logos);
$single_logo = mysqli_fetch_assoc($logo_res);

// Menu
$menus = "SELECT * FROM menus";
$men_res = mysqli_query($db_connect, $menus);

// Banner
$ban_info = "SELECT * FROM banners";
$ban_res = mysqli_query($db_connect, $ban_info);
$after_assoc_ban = mysqli_fetch_assoc($ban_res);

// About Top
$top = "SELECT * FROM about_tops";
$top_res = mysqli_query($db_connect, $top);
$tops = mysqli_fetch_assoc($top_res);

// About left
$left = "SELECT * FROM about_lefts";
$left_res = mysqli_query($db_connect, $left);
$lefts = mysqli_fetch_assoc($left_res);

// About Right
$right = "SELECT * FROM about_rights";
$right_res = mysqli_query($db_connect, $right);
$rights = mysqli_fetch_assoc($right_res);

// About bottom
$bottom = "SELECT * FROM about_bottoms";
$bottom_res = mysqli_query($db_connect, $bottom);
$bottoms = mysqli_fetch_assoc($bottom_res);

// Services 
$services = "SELECT * FROM services";
$service_res = mysqli_query($db_connect, $services);

// Team
$select_teeam = "SELECT * FROM team_info";
$team_res = mysqli_query($db_connect, $select_teeam);

// Team Icon
$icon_res = "SELECT * FROM team_icons WHERE status=1";
$icons = mysqli_query($db_connect, $icon_res);

// Portfolio
$select_port = "SELECT * FROM portfolios";
$portfolios = mysqli_query($db_connect, $select_port);

// Counter
$select_count = "SELECT * FROM counters";
$counter = mysqli_query($db_connect, $select_count);
          
// Testimonial
$select_test = "SELECT * FROM tests";
$tests = mysqli_query($db_connect, $select_test);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dominy Tech</title>
  <!-- css link -->
  <link rel="icon" href="images/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/venobox.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

  <!----------- Navbar Part Start ----------->

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
      <img src="../upload/logo/<?=$single_logo['logo']?>" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"><i class="fa-solid fa-bars show"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <?php foreach($men_res as $menu) {?>
          <li class="nav-item ">
            <a class="nav-link scroll-link" href="#<?=$menu['menu_link']?>"><?=$menu['menu_name']?></a>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>
  <!----------- Navbar Part  End ----------->


  <!-----------Banner Part Start ------------->
  <section id="banner">
    <div class="banner-slider">
      <div class="banner">
        <div class="overlay">
          <div class="container">
          <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".4s"><?=$after_assoc_ban['head_one']?></span> <span
          class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".6s"><?=$after_assoc_ban['head_two']?> <span
            class="ban_span wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".8s"><?=$after_assoc_ban['head_three']?></span></span>
        <span class="wow fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?=$after_assoc_ban['head_four']?></span></h1>
      <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay="1.2s"><?=$after_assoc_ban['pera_one']?> <span><?=$after_assoc_ban['pera_two']?></span></p>
      <a href="#contact" class="wow fadeInDown scroll-link" data-wow-duration=".6s" data-wow-delay="1.6s">Hire Us</a>
          </div>
        </div>
      </div>
      <div class="banner banner2">
        <div class="overlay">
          <div class="container">
          <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".4s"><?=$after_assoc_ban['head_one']?></span> <span
          class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".6s"><?=$after_assoc_ban['head_two']?> <span
            class="ban_span wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".8s"><?=$after_assoc_ban['head_three']?></span></span>
        <span class="wow fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?=$after_assoc_ban['head_four']?></span></h1>
      <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay="1.2s"><?=$after_assoc_ban['pera_one']?> <span><?=$after_assoc_ban['pera_two']?></span></p>
      <a href="#contact" class="wow fadeInDown scroll-link" data-wow-duration=".6s" data-wow-delay="1.6s">Hire Us</a>
          </div>
        </div>
      </div>
      <div class="banner banner3">
        <div class="overlay">
          <div class="container">
          <h1><span class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".4s"><?=$after_assoc_ban['head_one']?></span> <span
          class="wow fadeInDown " data-wow-duration=".6s" data-wow-delay=".6s"><?=$after_assoc_ban['head_two']?> <span
            class="ban_span wow fadeInDown" data-wow-duration=".6s" data-wow-delay=".8s"><?=$after_assoc_ban['head_three']?></span></span>
        <span class="wow fadeInDown " data-wow-duration="1s" data-wow-delay="1s"><?=$after_assoc_ban['head_four']?></span></h1>
      <p class="wow fadeInDown" data-wow-duration=".6s" data-wow-delay="1.2s"><?=$after_assoc_ban['pera_one']?> <span><?=$after_assoc_ban['pera_two']?></span></p>
      <a href="#contact" class="wow fadeInDown scroll-link" data-wow-duration=".6s" data-wow-delay="1.6s">Hire Us</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-----------Banner Part End -------------->

  <!-- =============== about area start ============ -->
  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header text-center  wow bounceInDown" data-wow-duration="1s" data-wow-delay=".2s">
            <h3>About <span>Us</span> <span class="cmn_span">About Us</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the
              industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="row wow bounceInDown" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="col-lg-4 m-auto">
          <div class="ab_top position-relative">
            <div class="top_about text-center">
              <h4><?=$tops['title']?></h4>
              <p><?=$tops['desp']?></p>
              <div class="shape"></div>
            </div>
            <div class="dot position-absolute"></div>
          </div>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-4 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".6s">
          <div class="ab_left position-relative">
            <div class="left_about text-lg-end">
              <h4><?=$lefts['title']?></h4>
              <p><?=$lefts['desp']?></p>
              <div class="shape"></div>
            </div>
            <div class="dot position-absolute"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="about_img m-auto d-flex align-items-center justify-content-center">
            <div class="inner_img">
              <img src="images/about.jpg" alt="about">
            </div>
          </div>
        </div>
        <div class="col-lg-4 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".6s">
          <div class="ab_right position-relative">
            <div class="right_about text-lg-start text">
              <h4><?=$rights['title']?></h4>
              <p><?=$rights['desp']?></p>
              <div class="shape"></div>
            </div>
            <div class="dot position-absolute"></div>
          </div>
        </div>
      </div>
      <div class="row wow bounceInUp" data-wow-duration="1s" data-wow-delay=".6s">
        <div class="col-lg-4 m-auto">
          <div class="ab_bottom position-relative">
            <div class="bottom_about text-center">
              <h4><?=$bottoms['title']?></h4>
              <p><?=$bottoms['desp']?></p>
              <div class="shape"></div>
            </div>
            <div class="dot position-absolute"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============== about area end ============ -->

  <!-- =============== Our Services start ============ -->

  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header header_service text-center wow bounceInDown" data-wow-duration="1s"
            data-wow-delay=".2s">
            <h3>Our <span>Services</span> <span class="cmn_span">Our Services</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the
              industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="ser_main" style="background: url('images/service.jpg') no-repeat center/cover fixed;">
      <div class="ser_overly">
        <div class="container">
          <div class="row py-5">
            <?php foreach($service_res as $service) {?>
            <!-- service1 -->
            <div class="col-lg-4 col-md-6 my-3">
              <!-- single_service -->
              <div class="service_main">
                <div class="row">
                  <div class="col-lg-2">
                    <a href="#" class="service_icon"><i class="fa-brands fa-<?=$service['icon']?>"></i></a>
                  </div>
                  <div class="col-lg-10">
                    <div class="service_content">
                      <h4><?=$service['title']?></h4>
                      <p><?=$service['desp']?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- =============== Our Services end ============ -->

  <!-- ================our team part start========== -->

  <section id="our_team">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header header_team text-center wow bounceInDown" data-wow-duration="1s"
            data-wow-delay=".2s">
            <h3>Our <span>Team</span> <span class="cmn_span">Our Team</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the
              industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="row team_row">
        <?php foreach($team_res as $team) {?>
        <div class="col-lg-4 team_col">
          <div class="team_member position-relative">
            <div class="team_member_hover">
              <div class="expert_member">
                <h5>expert for</h5>
                <div class="skill">
                  <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>Wordpress</li>
                    <li>bootstrap</li>
                  </ul>
                  <ul>
                    <li>CSS</li>
                    <li>JS</li>
                    <li>Laravel</li>
                    <li>UI/UX</li>
                  </ul>

                </div>
              </div>
              <div class="member_hover"></div>
            </div>
            <div class="member_profile" style="background: url(../upload/team/<?=$team['img']?>)no-repeat center/cover;"></div>
            <div class="member_text">
              <h2><?=$team['name']?></h2>
              <h3><?=$team['position']?></h3>
              <p><?=$team['desp']?></p>
            </div>
            <div class="member_social_icon">
              <ul class="d-flex justify-content-around">
                <?php foreach($icons as $icon) {?>
                <li><a href="#"><i class="fa-brands <?=$icon['icon']?>"></i></a></li>
                <?php }?>
              </ul>
            </div>

          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>
  <!-- ================our team part end========== -->

  <!-- ================ Portfolio part start ========== -->
  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header header_port text-center wow bounceInDown" data-wow-duration="1s"
            data-wow-delay=".2s">
            <h3>Our <span>Portfolio</span> <span class="cmn_span">Our Portfolio</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the
              industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>

      <div class="port_row">
        <div class="port_list text-center">
          <button type="button" class="control" data-filter="all">All</button>
          <button type="button" class="control" data-filter=".uidesign">UI/UX Design</button>
          <button type="button" class="control" data-filter=".wordpress">Wordpress</button>
          <button type="button" class="control" data-filter=".webdesign">Web Design</button>
          <button type="button" class="control" data-filter=".webdevelopment">Web Development</button>
        </div>
        <div class="row port_mix justify-content-between">
          <?php foreach($portfolios as $port) {?>
          <div class="col-lg-4 col-md-6 mix <?=$port['class_name']?>">
            <div class="port_col">
              <img src="../upload/portfolio/thum/<?=$port['thum']?>" class="w-100 img-fluid" alt="p">
              <div class="port_overly">
                <a class="my-image-links" data-gall="gallery01" href="../upload/portfolio/feature/<?=$port['feature']?>"><i
                    class="fa-solid fa-link"></i></a>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ Portfolio part end ========== -->

  <!-- ================ Counter part start========== -->
  <section id="counter">
    <div class="container">
      <div class="row">
        <?php foreach($counter as $count) {?>
        <div class="col-lg-3 col-sm-6 col-md-3">
          <div class="count text-center">
            <h2><span class="counter"><?=$count['number']?></span>+</h2>
            <h4><?=$count['title']?></h4>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  </section>
  <!-- ================ Counter part end========== -->

  <!-- ================testimonial part start======== -->

  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header header_test text-center wow bounceInDown" data-wow-duration="1s"
            data-wow-delay=".2s">
            <h3>Test<span>imonial </span> <span class="cmn_span">Testimonial</span></h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Loremsum has been the
              industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>
      </div>
      <div class="row test_row">
        <?php foreach($tests as $test) {?>
        <div class="col-lg-10 m-auto">
          <div class="main_testimonial">
            <div class="testimonial_all_item">
              <div class="testimonial_profile" style="background: url(../upload/test/<?=$test['img']?>)no-repeat center/cover;"></div>
              <div class="testimonial_profile_text">
                <h2><?=$test['title']?></h2>
                <p><?=$test['desp']?></p>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>

    </div>
  </section>

  <!-- ================testimonial part end======== -->


  <!-- ================contact us part start======== -->

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="common_header header_service head_contct text-center wow bounceInDown" data-wow-duration="1s"
            data-wow-delay=".2s">
            <h3>CONTACT <span>US</span> <span class="cmn_span">Contact Us</span></h3>
          </div>
        </div>
      </div>
    </div>
    <div class="message" style="background: url('images/contanct.jpg') no-repeat center/cover fixed;">
      <div class="con_overly">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">
              <div class="section-title mb-20">
                <span>Information</span>
                <h2>Contact Information</h2>
              </div>
              <div class="contact-content">
                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown
                  printer took a galley.</p>
                <h5>OFFICE IN <span>NEW YORK</span></h5>
                <div class="contact-list">
                  <ul>+
                    <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New York</li>
                    <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span>info@exemple.com</li>
                  </ul>
                </div>
              </div>
              <div class="contact_icon">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
              </div>
            </div>

            <div class="col-lg-6 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".4s">
              <strong class="text-success">
                <div class="contact-form">
                    <?php if(isset($_SESSION['success'])) {?>
                      <div class="alert alert-success"><?=$_SESSION['success']?></div>
                    <?php } unset($_SESSION['success'])?>
                  <form action="../contact/contact_post.php" method="POST">
                    <?php if(isset($_SESSION['name'])) {?>
                      <strong class="text-danger"><?=$_SESSION['name']?></strong>
                    <?php } unset($_SESSION['name'])?>
                    <input type="text" name="name" placeholder="your name *">
                    
                    <?php if(isset($_SESSION['email'])) {?>
                      <strong class="text-danger"><?=$_SESSION['email']?></strong>
                    <?php } unset($_SESSION['email'])?>
                    <input type="email" name="email" placeholder="your email *">

                    <?php if(isset($_SESSION['message'])) {?>
                      <strong class="text-danger"><?=$_SESSION['message']?></strong>
                    <?php } unset($_SESSION['message'])?>
                    <textarea type="text" name="message" id="message" placeholder="your message *"></textarea>
                    <button type="submit" class="button"><span>SEND</span></button>
                  </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- ================contact us part end ======== -->

  <!-- =========== footer area start ================ -->
  <footer id="footer">
    <div class="footer_top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot1">
              <img width="130" src="images/logo.png" alt="logo">
              <p>Lorem ipsum dolor sit amet, conser adipisicing elit, sed do eiumod apor incididunt ut labore et dolore
                magna aliqua.
                <span>Lorem ipsum dolor sit amet, conser adipisicing elit.</span></p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow bounceInLeft" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot2">
              <h3>Contact us</h3>
              <div class="foot21 text-left">
                <a href="callto: +334 1234 5987"><i class="fas fa-phone-alt"></i> +334 1234 5987 <br> +334 9876 2354</a>
                <a href="mailto: beatlsinfo@gmail.com"><i class="fas fa-envelope"></i> beatlsinfo@gmail.com
                  informationbeatls@mail.com</a>
                <a href="www.beatlsinformation.com" target="_blank"><i class="fas fa-globe-asia"></i>
                  www.beatlsinformation.com
                  www.informationbeatls.com</a>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot3">
              <h3>Important Links</h3>
              <div class="foot_menu">
                <ul>
                  <?php foreach($men_res as $menu) {?>
                  <li><a class="scroll-link" href="#<?=$menu['menu_link']?>"><?=$menu['menu_name']?></a></li>
                  <?php }?>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 wow bounceInRight" data-wow-duration="1s" data-wow-delay=".4s">
            <div class="foot4">
              <h3>Flicker Photos</h3>
              <div class="foot4_row">
                <div class="row">
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f1.jpg" alt="f1">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f2.jpg" alt="f2">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f3.jpg" alt="f3">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f4.jpg" alt="f4">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f5.jpg" alt="f5">
                  </div>
                  <div class="col-lg-4 col-sm-4 col-4 fcol">
                    <img class="w-100 img-fluid" src="images/f6.jpg" alt="f6">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="foot_bottom text-center">
            <p>Copyright &copy; 2023. All rights reserved by <span>Dominy Tech</span></p>
          </div>
        </div>
      </div>
    </div>


  </footer>
  <!-- =========== footer area end ================ -->
  <div class="row">
    <div class="col-lg-1 d-none d-lg-block">
      <div class="bt_top">
        <i class="fa-solid fa-angle-up"></i>
      </div>
    </div>
  </div>



  <!-- js link -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery-1.12.4.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/mixitup.min.js"></script>
  <script src="js/venobox.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>