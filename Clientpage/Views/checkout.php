<?php include './layouts/headerpage.php'?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/background.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Thanh toán</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Trang chủ</a> 
                            <span>Thanh toán</span>                      
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
                    <h6><span class="icon_tag_alt"></span> Nếu bạn có mã giảm giá ? <a href="#">Hãy ấn vào đây</a> để sử dụng
                    </h6>
                </div>
            </div>
            <div class="checkout__form">
                <h4>Chi tiết thanh toán</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p> Họ và Tên<span>*</span></p>
                                        <input type="text">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="checkout__input">
                                <p>Địa chỉ<span>*</span></p>
                                <input type="text" placeholder="" class="checkout__input__add">
                                
                            </div>
                            <div class="checkout__input">
                                <p>Tỉnh/Thành Phố<span>*</span></p>
                                <input type="text">
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="checkout__input">
                                        <p>Số điện thoại<span>*</span></p>
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
                           
                            
                            <div class="checkout__input">
                                <p>Ghi chú đơn đặt hàng<span>*</span></p>
                                <input type="text"
                                    placeholder="Yêu cầu quá trình khi giao sản phẩm">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout__order">
                                <h4>Đơn hàng của bạn</h4>
                                <div class="checkout__order__products">Sản phẩm  <span>Giá</span></div>
                                <ul>
                                    <li>Nike Air Force 1 <span>$90.00</span></li>
                                    <li>Air Huarache LE <span> $155.15</span></li>
                                    <li>Air Jordan 3 Retro <span>$246.00</span></li>
                                </ul>
                                <div class="checkout__order__subtotal">Tổng phụ <span>$491.15</span></div>
                                <div class="checkout__order__total">Tổng giá <span>$491.5</span></div>
                                
                                <div class="checkout__input__checkbox">
                                    <label for="payment">
                                        COD
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
                                </div>
                                <button type="submit" class="site-btn">ĐẶT HÀNG</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    <?php include 'layouts/footerpage.php'?>
