<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài viết</title>

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
    <?php
    include 'layouts/headerpage.php'
    ?>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <?php
    include 'layouts/herosection.php'
    ?>
    <!-- Hero Section End -->

    <section class="breadcrumb-section set-bg" data-setbg="img/backgroundthongtin.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thông tin dành cho bạn</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Blog Details Section Begin -->
    <section class="blog-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 order-md-1 order-2">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">

                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Danh mục</h4>
                            <ul>
                                <li><a href="./danhmucbaiviet.php">Tất cả bài viết</a></li>
                                <li><a href="danhmucbaivietthethao.php">Thông tin về giày thể thao (2)</a></li>
                                <li><a href="danhmucbaivietvanphong.php">Thông tin về giày công sở(2)</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <?php
                        include './data.php';
                        ?>
                        <img src="<?php echo $dataCategory[1]["image"]; ?>" alt="">
                        <p>
                        <h1 class="u-text u-text-1"><?php echo $dataCategory[1]["category"]; ?></h1>
                        </p>
                        <h3>
                            <p class="u-text u-text-2"><?php echo $dataCategory[1]["categorymini"]; ?></p>
                        </h3>
                        <p class="u-text u-text-2"><?php echo $dataCategory[1]["categorybig"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    <!-- Related Blog Section Begin -->
    <section class="related-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title related-blog-title">
                        <h2>Bài viết bạn có thể thích</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo $dataCategory[0]["image"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a class="u-text u-text-2" href="chitiettintuc_thethao1.php"><?php echo $dataCategory[0]["category"]; ?></a></h5>
                            <p class="u-text u-text-2"><?php echo $dataCategory[0]["categorymini"]; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/jeremyscottcandyfourm.jpg" alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a href="#">THE TRIPLE BLACK COLLECTION</a></h5>
                            <p>Giày thể thao để mặc với tất cả mọi thứ.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="img/adidaslego.jpg" alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a href="#">ADIDAS X LEGO WEEK</a></h5>
                            <p>Niềm đam mê chung đối với sự sáng tạo-các hình dạng đặc trưng của LEGO.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    <!-- Footer Section Begin -->
    <?php

    include 'layouts\footerpage.php';
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