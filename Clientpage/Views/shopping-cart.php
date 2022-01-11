<?php require "Views/layouts/header.php" ?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Shopping Cart</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <?php
                    $total = 0;
                    $totalQty = 0;
                    if (count($data["allItems"]) > 0) : ?>
                        <?php
                        foreach ($allItems as $id => $items) {
                            foreach ($items as $item) {
                                $total += $item["attributes"]["price"] *  $item["quantity"];
                                $totalQty += $item["quantity"];
                            }
                        }
                        ?>
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Products</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allItems as $id => $items) : ?>
                                    <?php foreach ($items as $item) : ?>
                                        <tr>
                                            <td class="shoping__cart__item">
                                                <img src="../Admin-page/uploads/<?= $item["attributes"]["image"] ?>" alt="">
                                                <h5>
                                                    <?= $item["attributes"]["name"] ?>
                                                </h5>
                                            </td>
                                            <td class="shoping__cart__price">
                                                <?= number_format($item["attributes"]["price"]) ?>
                                            </td>
                                            <td class="shoping__cart__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="<?= $item["quantity"] ?>" class="quantityInput">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="shoping__cart__total">
                                                <?= number_format($item["attributes"]["price"] *  $item["quantity"]) ?>
                                            </td>
                                            <td>
                                                <button data-id="<?= $item["id"] ?>" href="" class="primary-btn btn cart-btn-right btn-update">
                                                    Update
                                                </button>
                                            </td>
                                            <td class="shoping__cart__item__close">
                                                <button href="" class="btn-remove primary-btn btn cart-btn-right" data-id="<?= $item["id"] ?>"><i class="icon_close"></i></button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>

                            <?php else : ?>
                                <h1 class="text-center">Giỏ hàng trống!</h1>
                            <?php endif; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="index.php" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                    <button class="primary-btn cart-btn cart-btn-right btn-empty-cart"><span class="icon_loading"></span>
                        Empty Cart
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Discount Codes</h5>
                        <form action="#">
                            <input type="text" placeholder="Enter your coupon code">
                            <button type="submit" class="site-btn">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Cart Total</h5>
                    <ul>
                        <li>Subtotal <span><?= number_format($total) ?></span></li>
                        <li>Total <span><?= number_format($total) ?></span></li>
                    </ul>
                    <button class="primary-btn btn-checkout" data-total="<?= $total ?>">PROCEED TO CHECKOUT</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->

<?php require "Views/layouts/footer.php" ?>
<script>
    $(document).ready(function() {

        $('.btn-update').on('click', function() {

            var $btn = $(this);
            var id = $btn.attr('data-id');
            var qty = $btn.parent().parent().find('.quantityInput').val();

            var $form = $('<form action="index.php?controller=cart&action=cart" method="post" />').html('<input type="hidden" name="update" value=""><input type="hidden" name="idUpdate" value="' + id + '"><input type="hidden" name="qty" value="' + qty + '">');

            $('body').append($form);
            $form.submit();
        });

        $('.btn-remove').on('click', function() {

            var $btn = $(this);
            var id = $btn.attr('data-id');
            var $form = $('<form action="index.php?controller=cart&action=cart" method="post" />').html('<input type="hidden" name="remove" value=""><input type="hidden" name="idRemove" value="' + id + '">');
            $('body').append($form);
            $form.submit();
        });

        $('.btn-empty-cart').on('click', function() {

            var $form = $('<form action="index.php?controller=cart&action=cart" method="post" />').html('<input type="hidden" name="empty" value="">');

            $('body').append($form);
            $form.submit();
        });

        $('.btn-checkout').on('click', function() {

            var total = $(this).attr('data-total');

            var $form = $('<form action="index.php?controller=cart&action=checkout" method="post" />').html('<input type="hidden" name="checkout" value=""><input type="hidden" name="total" value="' + total + '">');
            $('body').append($form);
            $form.submit();
        });
    });
</script>