<?php include './layouts/headerpage.php'?>


    <section class="breadcrumb-section set-bg" data-setbg="img/anhbiaheader.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Đăng nhập</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- log in begin-->
    <div id="login-box">
        <div class="left">
            <h1>Đăng nhập</h1>
            <form method="post" action="./handlelogin.php">
                <input type="text" name="email" placeholder="E-mail" />
                <input type="password" name="password" placeholder="Password" />
                <input type="submit" name="signup_submit" value="Đăng nhập" />
                <div>Chưa có tài khoản ? <a href="./register.php">Đăng ký ngay</a> </div>
            </form>
        </div>
        <div class="right">
            <span class="loginwith">Đăng nhập với<br /> Mạng xã hội </span>
            <button class="social-signin facebook">Đăng nhập với facebook</button>
            <button class="social-signin twitter">Đăng nhập với Twitter</button>
            <button class="social-signin google">Đăng nhập với Google+</button>
        </div>
        <div class="or">OR</div>
    </div>
    <!-- log in end-->
    <?php include 'layouts/footerpage.php'?>
