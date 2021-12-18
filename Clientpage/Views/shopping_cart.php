<?php 

session_start();
  if (!isset($_SESSION['giohang'])) 
        $_SESSION['giohang']=[];
        //xóa hết
    //if (isset($_GET['delcart'])&&($_GET['delcart']==1))
    //unset($_SESSION['giohang']); 
        //$_SESSION['giohang']=[];
    //xóa 1 sản phẩm
    if (isset($_GET['delid'])&&($_GET['delid']>=0)){
        array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }

    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        //kiem tra sp co trong cua hang hay chua
        $fl=0;
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;

            }
        }
        if($fl==0){
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

        //them san pham
     
    }
    function tong(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            $tong=0;
            for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
            
            } echo' <li>Tổng giá <span>'.$tong.'</span></li>';
        }
    }
   
    
    function showgiohang( ){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            
            $tong=0;
            for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                echo'<tr>
                <td class="shoping__cart__item">
                    <img src="'.$_SESSION['giohang'][$i][0].'" alt="">
                    <h5>'.$_SESSION['giohang'][$i][1].'</h5>
                </td>
                <td class="shoping__cart__price">
                '.$_SESSION['giohang'][$i][2].'
                </td>
                <td class="shoping__cart__quantity">
                    <div class="quantity">
                        <div class="pro-qty">
                        '.$_SESSION['giohang'][$i][3].'
                        </div>
                    </div>
                </td>
                <td class="shoping__cart__total">
                    '.$tt.'
                </td>
                <td class="shoping__cart__item__close">
                    <span ><a  class="icon_close" href="shoping-cart.php?delid='.$i.'"></a></span>
                </td>
            </tr>';
          
            }
        }
    }
?>


<?php include './layouts/headerpage.php'?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/amsterdam-street-art.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Giỏ hàng</h2>
                    </div>
                </div>
            </div>
        </div>
        <a href=""></a>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Sản phẩm </th>
                                    <th>Giá</th>
                                    <th>Số lượng </th>
                                    <th>Tổng giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php showgiohang();?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">XEM NHIỀU SẢN PHẢM HƠN</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Cập nhật giỏ hàng</a><br>
                            <br>
                            <a href="shoping-cart.php?delcart=1" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Xóa giỏ hàng</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">
                            <h5>Mã giảm giá</h5>
                            <form action="#">
                                <input type="text" placeholder="Nhập mã tại đây">
                                <button type="submit" class="site-btn">Áp dụng mã</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Tổng giỏ hàng</h5>
                        <ul>
                            <?php
                          
                            tong();
                            //<li>Tổng giá <span>$454.98</span></li>
                            ?>
                        </ul>
                        <form action="">
                        <a href="./checkout.php" class="primary-btn">THANH TOÁN</a>
                        </form>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shoping Cart Section End -->

    <?php include 'layouts/footerpage.php'?>
