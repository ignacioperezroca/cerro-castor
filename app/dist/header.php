 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Thet Studio">
    <?php 
      $title = 'Krundi - Mascota oficial de Cerro Castor';
      $metaDescription = '<meta name="description" content="¡Seguí sus aventuras en el centro de esquí más austral del mundo!">';
    ?>
    <title><?php echo "$title"; ?></title>
    <?php echo $metaDescription; ?>
    <meta property="fb:app_id" content="1404951642894424"/>
    <meta property="fb:admins" content="704333312"/>

    <meta property="og:title" content="Krundi - Mascota oficial de Cerro Castor"/>
    <meta property="og:description" content="¡Seguí sus aventuras en el centro de esquí más austral del mundo!" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://krundi.com.ar">
    <meta property="og:image" content="http://krundi.com.ar/images/facebook-og.png" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Krundi - Mascota oficial de Cerro Castor" />
    <meta name="twitter:description" content="¡Seguí sus aventuras en el centro de esquí más austral del mundo!" />
    <meta name="twitter:image" content="http://krundi.com.ar/images/twitter-card.png" />
    <meta name="twitter:site" content="@KrundiCastor" />
    <meta name="twitter:creator" content="@KrundiCastor" />

    <link rel="icon" href="images/favicon.ico">
    <!-- CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="css/nprstrap.css">
    <!-- Javascript -->
    <script src="scripts/jquery-3.2.1.min.js"></script>
	  <script src="scripts/fullpage.min.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-29593043-2', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <!-- .wrapper -->
    <div id="wrapper" class="">
      <!-- loader css3 -->
      <div class="loader">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
        <div class="trackbar">
          <div class="loadbar"></div>
        </div>
        <div class="percentage" id="precent"></div>
        <!-- <div class="glow"></div> -->
      </div>
      <script>
        // Loader
        var winHeight = $(window).height();
        $('.sk-folding-cube').css('top' , ((winHeight / 2) - 40));
      </script>
      <!-- .sidebar-wrapper -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li><a href="./">Inicio</a></li>
        </ul>
        <div class="social-block">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://www.youtube.com/channel/" target="_blank"><i class="fa fa-youtube"></i></a>
          <a href="https://www.linkedin.com/company/" target="_blank"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <!-- /.sidebar-wrapper -->
      <a href="#sidebar-closebox" class="sidebar-closebox" id="sidebar-closebox"></a>
      <!-- .page-content-wrapper -->
      <div id="page-content-wrapper">
        <nav id='navbar' class="navbar navbar-fixed-top">
          <div class="container-fluid">
            <div class="col-12 col-sm-12">
              <div class="navbar-header">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- <div class="navbar-toggle collapsed" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </div> -->
                <a href="./" class="navbar-brand brand-img">
                  <img src="images/brand-logo.png" alt="Brand" class="cerro-logo">
                  <img src="images/krundi-logo.png" alt="Brand" class="krundi-logo">
                  <!-- <div>Title</div> -->
                </a>
                <div class="navbar-right hidden-md-down">
                  <div class="social-block">
                    <a href="https://www.facebook.com/KrundiCastor/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/krundicastor" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/krundicastor" target="_blank"><i class="fa fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <img src="images/border-black.png" alt="" class="border-texture first">
          </div>
          <!-- /.navbar-collapse -->
      </nav>

