<?php include './layouts/headerpage.php'?>

  
  <!-- danh muc bai viet begin-->
  <section class="u-align-left u-clearfix u-image u-shading u-section-1" src="" data-image-width="1140" data-image-height="800" id="sec-df0c" style="background-image: url('./img/backgroundanhmuc.jpg')">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-text-palette-2-light-1 u-title u-text-1">Giày không những đẹp mà phải còn thoải mái </h1>
      <p class="" style="color: #00ff7e;">Hãy để chúng tôi mang đến cho bạn những đôi giày đẹp và thoải mái nhất&nbsp;</p>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-6bc8">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1080" data-image-height="1440">
                  <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                  <?php
                  include './data.php';
                  ?>
                  <img class="u-image u-image-default u-image-2" src="<?php echo $dataCategory[0]["image"]; ?>" alt="" data-image-width="1050" data-image-height="1400">
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">

                    <h2 class="u-text u-text-1"><?php echo $dataCategory[0]["category"]; ?></h2>

                    <p class="u-text u-text-2"><?php echo $dataCategory[0]["categorymini"]; ?></p>

                    <a href="news_detail.php" class="u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2">Đọc thêm</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="u-clearfix u-section-2" id="sec-6bc8">
    <div class="u-clearfix u-sheet u-sheet-1">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-col">
            <div class="u-size-30">
              <div class="u-layout-row">
                <div class="u-container-style u-image u-layout-cell u-left-cell u-size-30 u-image-1" src="" data-image-width="1080" data-image-height="1440">
                  <div class="u-container-layout u-valign-middle u-container-layout-1"></div>
                  <?php
                  include './data.php';
                  ?>
                  <img class="u-image u-image-default u-image-2" src="<?php echo $dataCategory[2]["image"]; ?>" alt="" data-image-width="1050" data-image-height="1400">
                </div>
                <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                  <div class="u-container-layout u-valign-middle u-container-layout-2">

                    <h2 class="u-text u-text-1"><?php echo $dataCategory[2]["category"]; ?></h2>

                    <p class="u-text u-text-2"><?php echo $dataCategory[2]["categorymini"]; ?></p>

                    <a href="news_detail.php" class="u-border-2 u-border-palette-1-base u-btn u-btn-rectangle u-button-style u-none u-text-body-color u-btn-2">Đọc thêm</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- danh muc bai viet end-->
  <!-- Footer Section Begin -->
  <?php include 'layouts/footerpage.php'?>
