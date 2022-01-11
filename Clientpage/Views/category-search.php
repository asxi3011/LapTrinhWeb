<?php require "Views/layouts/header.php" ?>

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title">
                    <h2><?= $data["category"][0]["pc_name"] ?? $data["keyword"] ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php if (!isset($data["category"][0]["pc_name"])){echo '<h1>Không có sản phẩm thuộc loại này!</h1>';}?>
            <?php foreach ($data["category"] as $product) : ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" style="background-image: url('../Admin-page/uploads/<?= $product["product_img"] ?>')" data-setbg="../Admin-page/uploads/<?= $product["product_img"] ?>">
                            <ul class="product__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="index.php?controller=Product&action=productDetail&product_id=<?= $product["product_id"] ?>"><?= $product["product_name"] ?></a></h6>
                            <h5><?= number_format($product["product_price"]) ?> ₫</h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
    </div>
</section>
<!-- Related Product Section End -->

<?php require "Views/layouts/footer.php" ?>