<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập</title>

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

    <link rel="stylesheet" href="css/log_in.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <?PHP
    include 'layouts/headerpage.php';
    ?>


    <?PHP
    include 'layouts/herosection.php';
    ?>

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
                <div>Chưa có tài khoản ? <a href="register.php">Đăng ký ngay</a> </div>
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
    <!-- Footer Section Begin -->
    <?php

    include 'layouts/footerpage.php';
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