<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Sanitas Store</title>
  <link rel="icon" href="images/logoWebsite.ico">
  <meta name="description" content="Sanitas Store : Store of Beauty And Health Products">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/admin_page.css">

</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="home_page.php"><em>SANITAS</em> SKINCARE</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="home_page.php" class="external">HOME</a></li>

        <li><a href="delivery_list.php" class="external">LIST DELIVERY PRODUCT</a></li>

        <li class="has-submenu"><a href="#">VIEW</a>
          <ul class="sub-menu">
            <li><a href="prod_view.php" class="external">PRODUCT DATA</a></li>
            <li><a href="prod_img.php" class="external">PRODUCT IMAGE</a></li>
            <li><a href="order_view.php" class="external">ORDER DETAIL</a></li>
          </ul>
        </li>

        <li>
          <a href="prod_edit.php" class="external"> EDIT PRODUCT</a>
        </li>

        <li>
          <a href="addProduct_form.php" class="external">ADD PRODUCT</a>
        </li>

        <li><a href="logout.php" class="external">LOG OUT</a></li>
      </ul>
    </nav>
  </header>

  <section class="section main-banner" id="top" data-section="section1">
    <img id="bg-video" src="images/skincare_bg.jpg" alt="background">

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>Welcome <?php
                    session_start();
                    echo $_SESSION['staff_id'];
                    ?>
        </h6>
        <h2><em>Webpage</em> Sanitas</h2>
      </div>
    </div>

    <?php
    if (is_null($_SESSION['staff_id'])) {
      echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='../index.php' 
      </SCRIPT>");
    } ?>
  </section>
</body>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>
<script>
  //according to loftblog tut
  $('.nav li:first').addClass('active');

  var showSection = function showSection(section, isAnimate) {
    var
      direction = section.replace(/#/, ''),
      reqSection = $('.section').filter('[data-section="' + direction + '"]'),
      reqSectionPos = reqSection.offset().top - 0;

    if (isAnimate) {
      $('body, html').animate({
          scrollTop: reqSectionPos
        },
        800);
    } else {
      $('body, html').scrollTop(reqSectionPos);
    }

  };

  var checkSection = function checkSection() {
    $('.section').each(function() {
      var
        $this = $(this),
        topEdge = $this.offset().top - 80,
        bottomEdge = topEdge + $this.height(),
        wScroll = $(window).scrollTop();
      if (topEdge < wScroll && bottomEdge > wScroll) {
        var
          currentId = $this.data('section'),
          reqLink = $('a').filter('[href*=\\#' + currentId + ']');
        reqLink.closest('li').addClass('active').
        siblings().removeClass('active');
      }
    });
  };

  $('.main-menu, .scroll-to-section').on('click', 'a', function(e) {
    if ($(e.target).hasClass('external')) {
      return;
    }
    e.preventDefault();
    $('#menu').removeClass('active');
    showSection($(this).attr('href'), true);
  });

  $(window).scroll(function() {
    checkSection();
  });
</script>

</html>