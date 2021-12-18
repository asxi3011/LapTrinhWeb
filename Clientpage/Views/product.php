<?php include './layouts/headerpage.php'?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/amsterdam-street-art.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Phân loại</span>
                                    <select>
                                        <option value="0">Mặc định</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>5</span> Tìm thấy 5 sản phẩm</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                        $arrTen = array("Air Force 1 '07", "Air Huarache LE", "Air Jordan 3 Retro", "Air Max 2021", "Air Zoom-Type Crater");
                        $arrGia = array("$90", "$155.15", "$246.00", "$217.17", "$115.97");
                        $arrAnh = array("product-af1.jpg", "product-ah.jpg", "product-aj.jpg", "product-am.jpg", "product-az.jpg");
                        for ($i = 0; $i < count($arrTen); $i++) {
                            echo '<div class="col-lg-4 col-md-6 col-sm-6">';
                            echo '       <div class="product__item">';
                            echo '        <div class="product__item__pic set-bg" style="height: 350px;" data-setbg="img/product/' . $arrAnh[$i] . '">';
                            echo '            <ul class="product__item__pic__hover">';
                            echo '                <li><a href="#"><i class="fa fa-heart"></i></a></li>';
                            echo '                <li><a href="#"><i class="fa fa-retweet"></i></a></li>';
                            echo '                <li><a href="' . $arrTen[$i] . '.php"><i class="fa fa-shopping_cart"></i></a></li>';
                            echo '            </ul>';
                            echo '        </div>';
                            echo '        <div class="product__item__text">';
                            echo '            <h6><a href="#">' . $arrTen[$i] . '</a></h6>';
                            echo '            <h5>' . $arrGia[$i] . '</h5>';
                            echo '        </div>';
                            echo '    </div>';
                            echo ' </div>';
                        }
                        ?>

                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <?php include 'layouts/footerpage.php'?>
