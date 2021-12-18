<?php include './layouts/headerpage.php'?>

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
                                <li><a href="./category_news.php">Tất cả bài viết</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <?php
                        include './data.php';
                        ?>
                        <img src="<?php echo $dataCategory[0]["image"]; ?>" alt="">
                        <p>
                        <h1 class="u-text u-text-1"><?php echo $dataCategory[0]["category"]; ?></h1>
                        </p>
                        <h3>
                            <p class="u-text u-text-2"><?php echo $dataCategory[0]["categorymini"]; ?></p>
                        </h3>
                        <p class="u-text u-text-2"><?php echo $dataCategory[0]["categorybig"]; ?></p>
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
                        <h2>Post You May Like</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="<?php echo $dataCategory[1]["image"]; ?>" alt="">
                        </div>
                        <div class="blog__item__text">

                            <h5><a class="u-text u-text-2" href="./news_detail.php"><?php echo $dataCategory[1]["category"]; ?></a></h5>
                            <p class="u-text u-text-2"><?php echo $dataCategory[1]["categorymini"]; ?></p>

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
                            <p>sneaker to wear with everything. </p>
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
                            <p>A shared passion for creativity-signature shapes of LEGO.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related Blog Section End -->

    <?php include 'layouts/footerpage.php'?>
