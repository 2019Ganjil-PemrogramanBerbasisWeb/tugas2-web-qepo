<?php
include "rahasia.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,600,400italic|Open+Sans:400,600,700" rel="stylesheet">

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>


<body>
  <div id="wrapper">
    <header>
      <!-- Navbar
    ================================================== -->
      <div class="navbar navbar-static-top">
        <div class="navbar-inner">
          <div class="container">
            <!-- logo -->
            <div class="logo">
              <a href="homepage.php"><img src="img/deFashion v2.png" style="width:120px" alt="" /></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="active">
                    <a href="homepage.php"><i class="icon-home"></i> Home </a>
                  </li>

                  <li>
                    <a href="comingsoon_02/coming.html"><i class="icon-shopping-cart"></i> Keranjang </a>
                  </li>
                
                  <li class="dropdown">
                    <a href="#"><i class="icon-search"></i> Cari Desain <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="comingsoon_02/coming.html">Barang-barang Fashion</a></li>
                      <li><a href="comingsoon_02/coming.html">Terpopuler Bulan Ini</a></li>
                      <li><a href="comingsoon_02/coming.html">Daftar Desainer</a></li>
                      <li><a href="comingsoon_02/coming.html">Butik</a></li>
                      <li><a href="comingsoon_02/coming.html">Referensi Desain</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#"><i class="icon-comments"></i> Pesan <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="comingsoon_02/coming.html">Obrolan</a></li>
                      <li><a href="comingsoon_02/coming.html">Notifikasi</a></li>
                      <li><a href="comingsoon_02/coming.html">Forum Diskusi</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#"><i class="icon-user"></i> Profil <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="comingsoon_02/coming.html">Profilku</a></li>
                      <li><a href="logout.php">Log out</a></li>
                    </ul>
                  </li>

                </ul>
              </nav>
            </div>
            <!-- end menu -->

          </div>
        </div>
      </div>
    </header>
    <section id="intro">

      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->
            <div id="mainslider" class="flexslider">
              <ul class="slides">
                <li data-thumb="assets/img/slides/flexslider/img1.jpg">
                  <img src="assets/img/slides/flexslider/CUSTOM.png" alt="" />
                  <div class="flex-caption primary">
                    <h2>Custom Desain</h2>
                    <p>Cari barang barang Unik hanya untuk anda</p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img2.jpg">
                  <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Chat Desainer mu sekarang</h2>
                    <p>chat dengan Desainer anda agar </p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img3.jpg">
                  <img src="assets/img/slides/flexslider/img3.jpg" alt="" />
                  <div class="flex-caption success">
                    <h2>Cari Desain</h2>
                    <p>Cari desainer yang anda inginkan disini</p>
                  </div>
                </li>
                <li data-thumb="assets/img/slides/flexslider/img2.jpg">
                  <img src="assets/img/slides/flexslider/img2.jpg" alt="" />
                  <div class="flex-caption warning">
                    <h2>Rekomendasi Desain Bulan Ini</h2>
                    <p>Temukan Desain yang sendang populer belan ini</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="maincontent">
      <div class="container">



        <div class="row">
          <div class="span12">
            <h4 class="rheading">Lanjut Desain<span></span></h4>
            <div class="row">
              <div class="span3">

                <p class="hidden-phone">
                  Lanjutkan progress desain anda.
                </p>

                <a href="aplot/index.php" class="btn btn-theme">Lanjutken</a>
              </div>

              <div class="span9">
                <div id="latest-work" class="carousel btleft">
                  <div class="carousel-wrapper">
                    <ul class="da-thumbs">

                      <li>
                        <img src="assets/img/dummies/work1.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Desain 1</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work2.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Dark apps</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work3.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Mobile apps</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work4.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Mobile template</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work5.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Business theme</p>
                          </div>
                        </article>
                      </li>

                      <li>
                        <img src="assets/img/dummies/work6.jpg" alt="" />
                        <article class="da-animate da-slideFromRight">
                          <a class="zoom" data-pretty="prettyPhoto" href="assets/img/dummies/big1.jpg">
														<i class="icon-zoom-in icon-rounded icon-48 active"></i>
													</a>
                          <a href="portfolio-detail.html">
														<i class="icon-link icon-rounded icon-48 active"></i>
													</a>
                          <div class="hidden-tablet">
                            <p>Portfolio graphic</p>
                          </div>
                        </article>
                      </li>

                    </ul>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img1.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="comingsoon_02/coming.html"><i class="icon-circled icon-48 icon-magic active icon"></i></a>
                <h4>Custom <br />Desain</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img2.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="comingsoon_02/coming.html"><i class="icon-circled icon-48 icon-briefcase icon"></i></a>
                <h4>Cari<br />Desainer Anda</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img3.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="comingsoon_02/coming.html"><i class="icon-circled icon-48 icon-cogs icon"></i></a>
                <h4>Chat Langsung<br />dengan Desainer Anda</h4>
              </div>
            </div>
          </div>

          <div class="span3 features e_pulse">
            <img src="assets/img/dummies/img4.jpg" alt="" />
            <div class="box">
              <div class="divcenter">
                <a href="comingsoon_02/coming.html"><i class="icon-circled icon-48 icon-bullhorn icon"></i></a>
                <h4>Rekomendasi Desain<br />Bulan Ini</h4>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Footer
 ================================================== -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5>MADE WITH AI </h5>
              <ul class="regular">
                <li>Rinnabel</li>
                <li>Kecoak</li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5>deFashion Gallery</h5>
              <div class="flickr-badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=9&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>

              </div>
              <div class="clear"></div>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5>How to find us</h5>
              <address>
								<i class="icon-home"></i> <strong>Qepo company, Inc.</strong><br>
								Jalan in saja dulu, no.1000<br>
								Jawa Selatan 12345 Indonesia
								</address>
              <p>
                <i class="icon-phone"></i> 081234567890<br>
                <i class="icon-envelope-alt"></i> Qepo@email.com
              </p>
            </div>
            <div class="widget">
              <ul class="social">
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square icon-32"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square icon-32"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square icon-32"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square icon-32"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square icon-32"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="verybottom">
        <div class="container">
          <div class="row">
            <div class="span6">
              <p>
                &copy; Qepo - All right reserved
              </p>
            </div>
            <div class="span6">
              <div class="pull-right">
                <div class="credits">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/raphael-min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/jquery.elastislide.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/jquery-hover-effect.js"></script>
  <script src="assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
