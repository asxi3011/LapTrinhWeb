<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?PHP
    include 'layouts/headerpage.php'
    ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?PHP
    include 'layouts/herosection.php';
    ?>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/amsterdam-street-art.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Chào mừng bạn đến với shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?PHP
                    $arrTen = array("Air Force 1 '07", "Air Huarache LE", "Air Jordan 3 Retro", "Air Max 2021", "Air Zoom-Type Crater");
                    $arrAnh = array("product-af1.jpg", "product-ah.jpg", "product-aj.jpg", "product-am.jpg", "product-az.jpg");
                    $arrLink = array("Air Force 1 '07.php", "Air Huarache LE.php", "Air Jordan 3 Retro.php", "Air Max 2021.php", "Air Zoom-Type Crater.php");
                    for ($i = 0; $i < count($arrTen); $i++) {
                        echo '<div class="categories__item set-bg" data-setbg="img/product/' . $arrAnh[$i] . '">';
                        echo '    <h5><a href="' . $arrLink[$i] . '">' . $arrTen[$i] . '</a></h5>';
                        echo ' </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Categories Section End -->


    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <?php
                    include 'data.php'
                    ?>
                    <div class="section-title from-blog__title">
                        <h2>Bài viết</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">

                            <img src="<?php echo $dataCategory[0]["imageblog"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2021</li>
                                <li><i class="fa fa-comment-o"></i> 0</li>
                            </ul>
                            <h5><a href="<?php echo $dataCategory[0]["link"]?>"><?php echo $dataCategory[0]["category"]; ?></a> </h5>
                            <p><?php echo $dataCategory[0]["categorymini"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">

                            <img src="<?php echo $dataCategory[1]["imageblog"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2021</li>
                                <li><i class="fa fa-comment-o"></i> 0</li>
                            </ul>
                            <h5><a href="<?php echo $dataCategory[1]["link"]?>"><?php echo $dataCategory[1]["category"]?></a></h5>
                            <p><?php echo $dataCategory[1]["categorymini"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">

                            <img src="<?php echo $dataCategory[2]["imageblog"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2021</li>
                                <li><i class="fa fa-comment-o"></i> 0</li>
                            </ul>
                            <h5><a href="<?php echo $dataCategory[2]["link"]?>"><?php echo $dataCategory[2]["category"]; ?></a> </h5>
                            <p><?php echo $dataCategory[2]["categorymini"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">

                            <img src="<?php echo $dataCategory[3]["imageblog"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2021</li>
                                <li><i class="fa fa-comment-o"></i> 0</li>
                            </ul>
                            <h5><a href="<?php echo $dataCategory[3]["link"]?>"><?php echo $dataCategory[3]["category"]; ?></a> </h5>
                            <p><?php echo $dataCategory[3]["categorymini"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <!-- Footer Section Begin -->
    <?php
    include 'layouts/footerpage.php'
    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>