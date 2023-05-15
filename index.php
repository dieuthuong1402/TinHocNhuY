<?php 
    require('./admin/config/config.php');

    $products = array();
    $banners = array();

    $sql_products = "SELECT * FROM san_pham";
    $sql_banners = "SELECT * FROM banners";

    $result_products = $conn->query($sql_products);
    $result_banners = $conn->query($sql_banners);

    if($result_products->num_rows > 0) {
        while($row = $result_products->fetch_assoc()) {
            $products[] = $row;
        }
    }

    if($result_banners->num_rows > 0) {
        while($row = $result_banners->fetch_assoc()) {
            $banners[] = $row;
        }
    }

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
  </head>
</head>
<body>
    <div class="wrapper">
        <!-- Start header -->
        <?php
            require('./partials/header.php')
        ?>
        <!-- End header -->

        <!-- Start banner -->
        <div class="banner">
            <div class="container-lg container-fluid-fluid p-0">
                <div class="row m-0">
                    <div class="banner-content p-0">
                        <div class="col-md-12">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="col-md-12">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End banner -->

        <!-- Start sub banner -->
        <div class="sub-banner my-4">
            <div class="container-lg container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sub-banner__item">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sub-banner__item">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sub-banner__item">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="sub-banner__item">
                            <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End sub banner -->

        <!-- Start main content -->
        <div class="main-content">

            <!-- Start product featured -->
            <div class="section">
                <div class="section__title section__title--bg-primary">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>SẢN PHẨM NỔI BẬT</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="" class="section__title-link">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__content">
                    <div class="container-lg container-fluid">
                        <div class="row row-cols-lg-5 row-cols-md-4 row-cols-2 g-2 g-lg-3">
                            <?php foreach ($products as $item) { $thumbnails = explode("||", $item['hinh_anh']) ?>
                                <div class="col">
                                    <a href="./product-detail.php?id=<?=$item['id']?>" class="product-item">
                                        <div class="position-relative" style="padding-bottom: 100%">
                                            <div class="product-item__thumbnail">
                                                <img src="./storage/uploads/img/<?=$thumbnails[0]?>" alt="<?=$item['ten_sp']?>" class="product-item__thumbnail-img">
                                            </div>
                                        </div>
                                        <div class="product-item__body">
                                            <p class="product-item__name"><?=$item['ten_sp']?></p>
                                            <p class="product-item__new-price"><?=currency_format($item['don_gia_ban'])?></p>
                                            <p class="product-item__old-price"> 
                                                <span><?=currency_format($item['don_gia_ban'])?></span> 
                                                <span>0%</span>
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product featured -->

            <!-- Start sub banner -->
            <div class="section">
                <div class="sub-banner my-4">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="sub-banner__item">
                                    <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                                </div>
                            </div>
        
                            <div class="col-md-6">
                                <div class="sub-banner__item">
                                    <img src="./assets/img/banners/banner-1.jpg" alt="" class="sub-banner__img img-fluid rounded-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End sub banner -->

            <!-- Start product(laptop) -->
            <div class="section">
                <div class="section__title section__title--bg-primary">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>LAPTOP</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="" class="section__title-link">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__content">
                    <div class="container-lg container-fluid">
                        <div class="row row-cols-lg-5 row-cols-md-4 row-cols-2 g-2 g-lg-3">
                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-2.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">Lenovo ThinkBook 14 G3 ACL R5 5500U (21A200R0VN)</p>
                                        <p class="product-item__new-price"> 12.790.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>18.190.000 VND</span> 
                                            <span>-28%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product(laptop) -->

            <!-- Start product(PC) -->
            <div class="section">
                <div class="section__title section__title--bg-primary">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>PC - LINH KIỆN</h5>
                            </div>
                            <div class="col-md-6 text-end">
                                <a href="" class="section__title-link">Xem tất cả <i class="fa-solid fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__content">
                    <div class="container-lg container-fluid">
                        <div class="row row-cols-lg-5 row-cols-md-4 row-cols-2 g-2 g-lg-3">
                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>

                            <div class="col">
                                <a href="./product-detail.php" class="product-item">
                                    <div class="product-item__thumbnail">
                                        <img src="./assets/img/products/camera/product-3.jpg" alt="" class="product-item__thumbnail-img">
                                    </div>
                                    <div class="product-item__body">
                                        <p class="product-item__name">HP AIO ProOne 240 G9 i3 1215U 23.8 inch (6M3T0PA)</p>
                                        <p class="product-item__new-price"> 14.630.000 VND</p>
                                        <p class="product-item__old-price"> 
                                            <span>21.190.000 VND</span> 
                                            <span>-30%</span>
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product(PC) -->
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

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script>
        $('.banner-content').slick({
            autoplay: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplaySpeed: 3000,
            prevArrow: '<button type="button" class="slick-prev"><i class="fa-solid fa-chevron-left"></i></button>',
            nextArrow: '<button type="button" class="slick-next"><i class="fa-solid fa-chevron-right"></i></button>',
            dots: true,
            dotClass: 'slick-dots'
        });

    </script>
</body>
</html>