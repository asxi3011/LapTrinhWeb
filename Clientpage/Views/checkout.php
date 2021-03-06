<?php require "Views/layouts/header.php" ?>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="./index.html">Home</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h6><span class="icon_tag_alt"></span> Have a coupon? <a href="#">Click here</a> to enter your code
                </h6>
            </div>
        </div>
        <div class="checkout__form">
            <h4>Billing Details</h4>
            <form action="index.php?controller=cart&action=placeOrder" method="post" id="formOrder">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Fist Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Last Name<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div> -->
                        <div class="checkout__input">
                            <p>Full Name<span>*</span></p>
                            <input type="text" name="cus_name" require>
                        </div>
                        <div class="checkout__input">
                            <p>Address<span>*</span></p>
                            <input type="text" name="address" class="checkout__input__add" require>
                        </div>
                        <div class="checkout__input">
                            <p>Email<span>*</span></p>
                            <input type="email" name="email" require>
                        </div>
                        <div class="checkout__input">
                            <p>Phone<span>*</span></p>
                            <input type="text" name="phone" require>
                        </div>
                        <div class="checkout__input">
                            <p>Notes<span>*</span></p>
                            <input type="text" name="notes">
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Phone<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="acc">
                                Create an account?
                                <input type="checkbox" id="acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <p>Create an account by entering the information below. If you are a returning customer
                            please login at the top of the page</p>
                        <div class="checkout__input">
                            <p>Account Password<span>*</span></p>
                            <input type="text">
                        </div>
                        <div class="checkout__input__checkbox">
                            <label for="diff-acc">
                                Ship to a different address?
                                <input type="checkbox" id="diff-acc">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="checkout__input">
                            <p>Order notes<span>*</span></p>
                            <input type="text" placeholder="Notes about your order, e.g. special notes for delivery.">
                        </div> -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4>Your Order</h4>
                            <div class="checkout__order__products">Products <span>Total</span></div>
                            <ul>
                                <?php foreach ($data["order"] as $id => $items) : ?>
                                    <?php foreach ($items as $item) : ?>
                                        <li><?= $item["attributes"]["name"] ?> x<?= $item["quantity"] ?><span><?= number_format($item["attributes"]["price"] *  $item["quantity"]) ?></span></li>
                                    <?php endforeach; ?>
                                <?php endforeach; ?>
                            </ul>
                            <div class="checkout__order__subtotal">
                                Subtotal
                                <span>
                                    <?= number_format($data["total"]) ?>
                                    <input type="text" name="total" value="<?= $data["total"] ?>" hidden>
                                </span>
                            </div>
                            <div class="checkout__order__total">
                                Total
                                <span>
                                    <?= number_format($data["total"]) ?>
                                </span>
                            </div>
                            <!-- <div class="checkout__input__checkbox">
                                <label for="acc-or">
                                    Create an account?
                                    <input type="checkbox" id="acc-or">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                            <div class="checkout__input__checkbox">
                                <label for="payment">
                                    Check Payment
                                    <input type="checkbox" id="payment">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="checkout__input__checkbox">
                                <label for="paypal">
                                    Paypal
                                    <input type="checkbox" id="paypal">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <button type="submit" name="placeOrder" class="site-btn">PLACE ORDER</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->

<?php require "Views/layouts/footer.php" ?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#formOrder").validate({
            rules: {
                cus_name: {
                    required: true,
                    minlength: 2,
                },
                address: {
                    required: true,
                    minlength: 6,
                },
                email: {
                    required: true,
                    minlength: 4,
                    email: true,
                },
                phone: {
                    required: true,
                    matches: "[0-9]+",
                    minlength: 10,

                },
                notes: {
                    required: false,
                },
            },
            message: {
                cus_name: {
                    required: "Vui l??ng nh???p h??? t??n",
                    minlength: "H??? t??n ??t nh???t l?? 2 k?? t???",
                },
                address: {
                    required: "Vui l??ng nh???p ?????a ch???",
                    minlength: "?????a ch??? ??t nh???t l?? 6 k?? t???",
                },
                email: {
                    required: "Vui l??ng nh???p email",
                    minlength: "Email ??t nh???t l?? 4 k?? t???",
                    email: "Email kh??ng ????ng ?????nh d???ng",
                },
                phone: {
                    required: "Vui l??ng nh???p s??? ??i???n tho???i",
                    matches: "S??? ??i???n tho???i kh??ng ????ng ?????nh d???ng",
                    minlength: "S??? ??i???n tho???i ??t nh???t l?? 10 k?? t???",

                },
            },
        });
    });
</script>