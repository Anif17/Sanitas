<?php
session_start();

if (is_null($_SESSION['staff_id'])) {
    echo ("<SCRIPT LANGUAGE='JavaScript'> 
      window.alert('Session End. Please re-login!') 
      window.location.href='../index.php' 
      </SCRIPT>");
} ?>

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
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <link rel="stylesheet" href="css/addStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <?php
    include('db_connection.php');

    $id = $_GET['id'];
    $sql = "SELECT * from tb_product where prod_id='$id'";
    $result = $mysqli->query($sql);

    while ($row = $result->fetch_assoc()) {
        $prod_id = $row['prod_id'];
        $prod_name = $row['prod_name'];
        $prod_quantity = $row['prod_quantity'];
        $prod_price = $row['prod_price'];
        $prod_img = $row['image'];
    }
    ?>


    <div class="container">
        <div align="center" style="font-size: 40px;"><span class="badge badge-info">EDIT PRODUCT</div>
        <div class="content">
            <form action="edit_prodFun.php" method="POST">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">PRODUCT ID:</span>
                        <input type="text" placeholder="Enter Product ID" name="id" value="<?php echo $prod_id; ?>" required readonly>
                    </div>
                    <div class="input-box">
                        <span class="details">PRODUCT NAME:</span>
                        <input type="text" placeholder="Enter Product Name" name="name" value="<?php echo $prod_name; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">QUANTITY:</span>
                        <input type="number" name="quantity" placeholder="Enter Product Quantity" value="<?php echo $prod_quantity; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">PRICE:</span>
                        <input type="text" name="price" placeholder="Enter Product Price" value="<?php echo $prod_price; ?>">
                    </div>
                    <div class="input-box">
                        <span class="details">IMAGE SOURCE:</span>
                        <input type="text" name="img" placeholder="Enter Product Image Source" value="<?php echo $prod_img; ?>">
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </div>

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