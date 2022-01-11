    <?php require "Views/layouts/header.php" ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
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
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Department</h4>
                            <ul>
                                <?php foreach ($data["allPC"] as $pc) : ?>
                                    <li><a href="index.php?controller=productcategory&action=productShow&pc_id=<?= $pc["pc_id"] ?>"><?= $pc["pc_name"] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>

                        <div class="sidebar__item">
                            <div class="latest-product__text">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>All Product</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4 col-md-6 col-sm-6">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span><?php echo count($data["productByPC"]); ?></span> Products found</h6>
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
                        <?php if (count($data["productByPC"]) == 0) echo "Không có sản phẩm loại này!"; ?>
                        <?php foreach ($data["productByPC"] as $id => $pc) : ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="../Admin-page/uploads/<?= $pc["product_img"] ?>" style="background-image: url('../Admin-page/uploads/<?= $pc["product_img"] ?>')">
                                        <ul class="product__item__pic__hover">
                                            <input type="text" hidden class="product-id" value="<?= $pc["product_id"] ?>">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                            <li><a href=""><i class="fa fa-shopping-cart add-to-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="index.php?controller=product&action=productDetail&product_id=<?= $pc["product_id"] ?>"><?= $pc["product_name"] ?></a></h6>
                                        <h5><?= number_format($pc["product_price"]) ?> ₫</h5>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="product__pagination">
                        <?php

                        require "Helper/Pagination.php";

                        $config = [
                            'total' => count($data["productByPC"]),
                            'limit' => 9,
                            'full' => false,
                            'querystring' => 'trang'
                        ];

                        $page = new Pagination($config);
                        echo $page->getPagination();
                        ?>
                        <!-- <a href="#"><i class="fa fa-long-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <?php require "Views/layouts/footer.php" ?>
    <script>
        $('.add-to-cart').on('click', function(e) {
            e.preventDefault();

            var $btn = $(this);
            var id = $btn.parent().find('.product-id').val();
            var qty = 1;

            var $form = $('<form action="index.php?controller=cart&action=cart" method="post" />').html('<input type="hidden" name="add" value="add"><input type="hidden" name="idAdd" value="' + id + '"><input type="hidden" name="qty" value="' + qty + '">');

            $('body').append($form);
            $form.submit();
        });
    </script>