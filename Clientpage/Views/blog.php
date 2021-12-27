    <?php require "Views/layouts/header.php" ?>

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="blog__sidebar">
                        <div class="blog__sidebar__search">
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><span class="icon_search"></span></button>
                            </form>
                        </div>
                        <div class="blog__sidebar__item">
                            <h4>Categories</h4>
                            <ul>
                                <li><a href="index.php?controller=blog&action=index" class="active">All</a></li>
                                <?php foreach($data["allBC"] as $bc) : ?>
                                <li><a href="index.php?controller=blog&action=index&bc_id=<?=$bc["bc_id"]?>"><?=$bc["bc_name"]?></a></li>
                                <?php endforeach?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="row">
                        <?php 
                        $blogs =  $data["blogByBC"];
                        foreach($blogs as $blog) : 
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="public/img/<?=$blog["bn_img"]?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?=$blog["date_posted"]?></li>
                                        <!-- <li><i class="fa fa-comment-o"></i> 5</li> -->
                                    </ul>
                                    <h5><a href="index.php?controller=blog&action=blogDetail&bn_id=<?=$blog["bn_id"]?>&author_id=<?=$blog["author_id"]?>"><?=$blog["bn_title"]?></a></h5>
                                    <div class="blog-content"><?=substr($blog["bn_content"], 0, 60)?>...</div>
                                    <a href="index.php?controller=blog&action=blogDetail&bn_id=<?=$blog["bn_id"]?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach ?>
                        <div class="col-lg-12">
                            <div class="product__pagination blog__pagination">
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

    <?php require "Views/layouts/footer.php" ?>
