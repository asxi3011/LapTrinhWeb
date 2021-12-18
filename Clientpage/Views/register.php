<?php include './layouts/headerpage.php'?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/anhbiaheader.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Đăng ký</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section end -->

    <div id="login-box">
        <div class="left">
            <h1>Đăng ký</h1>
            <input type="text" name="username" placeholder="Username" />
            <input type="text" name="email" placeholder="E-mail" />
            <input type="password" name="password" placeholder="Password" />
            <input type="password" name="password2" placeholder="Retype password" />
            <input type="submit" name="signup_submit" value="Đăng ký" />
        </div>
        <div class="or">OR

        </div>
        <div class="right">
            <span class="loginwith">Đăng ký với <br> Mạng xã hội  </span>
            <button class="social-signin facebook">Đăng ký với Facebook</button>
            <button class="social-signin twitter">Đăng ký với Twitter</button>
            <button class="social-signin google">Đăng ký với Google+</button>
        </div>
    </div>
    <!-- register end-->


    <?php include 'layouts/footerpage.php'?>
