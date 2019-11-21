<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Desain Saya</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="resources/assets/css/bootstrap.css" rel="stylesheet">
  <link href="resources/assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="resources/assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="resources/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="resources/assets/css/flexslider.css" rel="stylesheet">
  <link href="resources/assets/css/style.css" rel="stylesheet">
  <link href="resources/assets/color/default.css" rel="stylesheet">
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
              <a href="resources/homepage.php"><img src="resources/img/deFashion v2.png" style="width:120px" alt="" /></a>
            </div>
            <!-- end logo -->

            <!-- top menu -->
            <div class="navigation">
              <nav>
                <ul class="nav topnav">
                  <li class="active">
                    <a href="resources/homepage.php"><i class="icon-home"></i> Home </a>
                  </li>

                  <li>
                    <a href="resources/comingsoon_02/coming.html"><i class="icon-shopping-cart"></i> Keranjang </a>
                  </li>
                
                  <li class="dropdown">
                    <a href="#"><i class="icon-search"></i> Cari Desain <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="resources/comingsoon_02/coming.html">Barang-barang Fashion</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Terpopuler Bulan Ini</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Daftar Desainer</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Butik</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Referensi Desain</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#"><i class="icon-comments"></i> Pesan <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="resources/comingsoon_02/coming.html">Obrolan</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Notifikasi</a></li>
                      <li><a href="resources/comingsoon_02/coming.html">Forum Diskusi</a></li>
                    </ul>
                  </li>

                  <li class="dropdown">
                    <a href="#"><i class="icon-user"></i> Profil <i class="icon-angle-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="resources/comingsoon_02/coming.html">Profilku</a></li>
                      <li><a href="resources/logout.php">Log out</a></li>
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

<button type="button" style="background-color:#afd9ee;margin-left:auto;margin-right:auto;display:block" 
onclick="window.location.href='resources/upload.html'">
  Upload Desain
</button> 


<?php

    // Include the DirectoryLister class
    require_once('resources/DirectoryLister.php');

    // Initialize the DirectoryLister object
    $lister = new DirectoryLister();

    // Restrict access to current directory
    ini_set('open_basedir', getcwd());

    // Return file hash
    if (isset($_GET['hash'])) {

        // Get file hash array and JSON encode it
        $hashes = $lister->getFileHash($_GET['hash']);
        $data   = json_encode($hashes);

        // Return the data
        die($data);

    }

    if (isset($_GET['zip'])) {

        $dirArray = $lister->zipDirectory($_GET['zip']);

    } else {

        // Initialize the directory array
        if (isset($_GET['dir'])) {
            $dirArray = $lister->listDirectory($_GET['dir']);
        } else {
            $dirArray = $lister->listDirectory('.');
        }

        // Define theme path
        if (!defined('THEMEPATH')) {
            define('THEMEPATH', $lister->getThemePath());
        }

        // Set path to theme index
        $themeIndex = $lister->getThemePath(true) . '/index.php';

        // Initialize the theme
        if (file_exists($themeIndex)) {
            include($themeIndex);
        } else {
            die('ERROR: Failed to initialize theme');
        }

    }
?>

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

  <script src="resources/assets/js/jquery.js"></script>
  <script src="resources/assets/js/raphael-min.js"></script>
  <script src="resources/assets/js/jquery.easing.1.3.js"></script>
  <script src="resources/assets/js/bootstrap.js"></script>
  <script src="resources/assets/js/google-code-prettify/prettify.js"></script>
  <script src="resources/assets/js/jquery.elastislide.js"></script>
  <script src="resources/assets/js/jquery.prettyPhoto.js"></script>
  <script src="resources/assets/js/jquery.flexslider.js"></script>
  <script src="resources/assets/js/jquery-hover-effect.js"></script>
  <script src="resources/assets/js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="assets/js/custom.js"></script>

</body>
</html>
