<?php include "../../partials/navbar.php"; ?>
<?php include "../../partials/sidebar.php"; ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card ml-32">
                <div class="card">
                    <div class="card-body">
                        <div class="header-table">
                            <h4 class="card-title">Chi tiết đơn hàng</h4>
                            <button class="btn-add" onclick="window.location.href='./products-manager.php'">Quay lại</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Header</th>
                                        <th>Info</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Hình ảnh</td>
                                        <td>
                                            <img class="py-1" src="../../public/images/nike-air-force-1-6-1.jpg" alt="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mã đơn hàng</td>
                                        <td>
                                            1
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tên đơn hàng</td>
                                        <td>
                                            Nike Air Force 1 Shadow All White New
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.php -->
    <?php include "../../partials/footer.php"; ?>