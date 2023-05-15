<?php 
    require('./admin/config/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/img/rel-icon.ico">
    <title>TIN HỌC NHƯ Ý</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-orders.css">
  </head>
</head>
<body>
    <div class="wrapper">
        <!-- Start header -->
        <?php
            require('./partials/header.php')
        ?>
        <!-- End header -->

        <!-- Start main content -->
        <div class="order-detail-content">
            <div class="container-lg container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sidebar-menu">
                            <div class="sidebar-menu__header">
                                <img src="./storage/uploads/img/<?=$userlogged['avatar']?>" alt="" class="sidebar-menu__header-img">
                                <p class="sidebar-menu__header-name"><?=$userlogged['fullname']?></p>
                            </div>

                            <ul class="sidebar-menu__list">
                                <li class="sidebar-menu__item">
                                    <a href="./profile.php" class="sidebar-menu__link">
                                        <i class="fa-regular fa-circle-user sidebar-menu__icon"></i> Thông tin tài khoản
                                    </a>
                                </li>
                                <li class="sidebar-menu__item active">
                                    <a href="./orders.php" class="sidebar-menu__link">
                                        <i class="fa-solid fa-clipboard-list sidebar-menu__icon"></i> Quản lý đơn hàng
                                    </a>
                                </li>
                                <li class="sidebar-menu__item">
                                    <a href="./notify.php" class="sidebar-menu__link">
                                        <i class="fa-regular fa-bell sidebar-menu__icon"></i> Thông báo
                                    </a>
                                </li>
                                <li class="sidebar-menu__item">
                                    <a href="./change-password.php" class="sidebar-menu__link">
                                        <i class="fa-solid fa-gear sidebar-menu__icon"></i> Đổi mật khấu
                                    </a>
                                </li>
                                <li class="sidebar-menu__item">
                                    <a href="./address.php" class="sidebar-menu__link">
                                        <i class="fa-solid fa-map-location-dot sidebar-menu__icon"></i> Địa chỉ
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <h5 class="py-3">CHI TIẾT ĐƠN HÀNG: DH0001</h5>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card border-0">
                                    <div class="card-body">
                                      <h6 class="card-title">Thông tin khách hàng</h6>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Họ và tên: </span>
                                        <span class="ms-1">Đào Thị Diệu Thương</span>
                                      </p>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Số điện thoại: </span>
                                        <span class="ms-1">0868337083</span>
                                      </p>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Địa chỉ: </span>
                                        <span class="ms-1">Sóc Trăng</span>
                                      </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card border-0">
                                    <div class="card-body">
                                      <h6 class="card-title">Thông tin đơn hàng</h6>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Ngày đặt hàng: </span>
                                        <span class="ms-1">01/05/2023 23:54</span>
                                      </p>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Thời gian xác nhận: </span>
                                        <span class="ms-1">02/05/2023 07:00</span>
                                      </p>
                                      <p class="card-text mb-1 fs-7">
                                        <span class="fw-bold">Trạng thái: </span>
                                        <span class="ms-1 text-success">Đã hoàn thành</span>
                                      </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card border-0">
                                    <div class="card-body">
                                      <h6 class="card-title">Sản phẩm</h6>
                                      
                                      <div class="mt-4 d-flex">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="img-thumbnail" style="width: 75px;">
                                        <div class="w-100 ms-3 fs-7">
                                            <p>Camera IP 360 Độ 1536P TP-Link Tapo C210</p>
                                            <p class="d-flex align-items-center justify-content-between">
                                                <span>Số lượng: 1</span>
                                                <span class="fw-bold">649.00đ</span>
                                            </p>
                                        </div>
                                      </div>

                                      <div class="mt-4 d-flex">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="img-thumbnail" style="width: 75px;">
                                        <div class="w-100 ms-3 fs-7">
                                            <p>Camera IP 360 Độ 1536P TP-Link Tapo C210</p>
                                            <p class="d-flex align-items-center justify-content-between">
                                                <span>Số lượng: 1</span>
                                                <span class="fw-bold">649.00đ</span>
                                            </p>
                                        </div>
                                      </div>

                                      <div class="mt-4 d-flex">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="img-thumbnail" style="width: 75px;">
                                        <div class="w-100 ms-3 fs-7">
                                            <p>Camera IP 360 Độ 1536P TP-Link Tapo C210</p>
                                            <p class="d-flex align-items-center justify-content-between">
                                                <span>Số lượng: 1</span>
                                                <span class="fw-bold">649.00đ</span>
                                            </p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card border-0">
                                    <div class="card-body">
                                      <p class="card-text d-flex align-items-center justify-content-between mb-1 fs-7">
                                        <span>Tạm tính: </span>
                                        <span class="fw-bold">1.947.000đ</span>
                                      </p>
                                      <p class="card-text d-flex align-items-center justify-content-between mb-1 fs-7">
                                        <span>Phí vận chuyển: </span>
                                        <span class="fw-bold">0đ</span>
                                      </p>
                                      <p class="card-text d-flex align-items-center justify-content-between mb-1 fs-7">
                                        <span>Giảm giá: </span>
                                        <span class="fw-bold">0đ</span>
                                      </p>
                                      <p class="card-text d-flex align-items-center justify-content-between mb-1 fs-7">
                                        <span>Tổng tiền: </span>
                                        <span class="fs-5 fw-bold text-primary">1.947.000đ</span>
                                      </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="card border-0">
                                    <div class="card-body">
                                      <h6 class="card-title pb-3 border-bottom">Phương thức thanh toán</h6>
                                      <p class="card-text d-flex align-items-center justify-content-between mb-1 pt-2 fs-7">
                                        <span class="fw-bold">Thanh toán khi nhận hàng: </span>
                                        <span class="ms-1 fs-5 fw-bold text-primary">1.947.000đ</span>
                                      </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End main content -->

        <!-- Start footer -->
        <footer id="footer" class="footer">
            <div class="footer-content">
                <div class="container-lg container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-item">
                                <h6 class="footer-item__title">
                                    VỀ CHÚNG TÔI
                                </h5>
                                <div class="footer-item__body">
                                    <p class="footer-item__desc">
                                        Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500.
                                    </p>
                                    <p class="footer-item__info">
                                        <span class="footer-item__icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </span>
                                        <span class="footer-item__info-text">
                                            Số 18-E4, đường số 5, KDC Tràng An, Phường 7, TP. Bạc Liêu, Tỉnh Bạc Liêu
                                        </span>
                                    </p>
                                    <p class="footer-item__info">
                                        <span class="footer-item__icon">
                                            <i class="fa-solid fa-envelope"></i>
                                        </span>
                                        <span class="footer-item__info-text">
                                            example@gmail.com
                                        </span>
                                    </p>
                                    <p class="footer-item__info">
                                        <span class="footer-item__icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </span>
                                        <span class="footer-item__info-text">
                                            0844 444 369
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-item">
                                <h6 class="footer-item__title">
                                    CHÍNH SÁCH & ĐIỀU KHOẢN
                                </h5>
                                <div class="footer-item__body">
                                    <ul class="footer-item__nav">
                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách mua hàng
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo hành
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo mật
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Điều khoản chung
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-item">
                                <h6 class="footer-item__title">
                                    CHÍNH SÁCH & ĐIỀU KHOẢN
                                </h5>
                                <div class="footer-item__body">
                                    <ul class="footer-item__nav">
                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách mua hàng
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo hành
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo mật
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Điều khoản chung
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="footer-item">
                                <h6 class="footer-item__title">
                                    CHÍNH SÁCH & ĐIỀU KHOẢN
                                </h5>
                                <div class="footer-item__body">
                                    <ul class="footer-item__nav">
                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách mua hàng
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo hành
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Chính sách bảo mật
                                            </a>
                                        </li>

                                        <li class="footer-item__nav-item">
                                            <a href="" class="footer-item__nav-link">
                                                Điều khoản chung
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->
    </div> 

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

</body>
</html>