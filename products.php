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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

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

        <!-- Start main content -->
        <div class="main-content">

            <!-- Start product featured -->
            <div class="section">
                <!-- <div class="section__title">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <h5>SẢN PHẨM NỔI BẬT</h5>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="section__content">
                    <div class="container-lg container-fluid">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="products-content-filter">
                                    <h6 class="products-content-filter__title">DANH MỤC SẢN PHẨM</h6>
                                    <div class="products-content-filter__categories">
                                        <form action="" class="products-content-filter__categories-form">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="category-all" checked>
                                                <label class="form-check-label" for="category-all">
                                                    Tất cả
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="category-pc">
                                                <label class="form-check-label" for="category-pc">
                                                    PC - Linh kiện
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="category-laptop">
                                                <label class="form-check-label" for="category-laptop">
                                                    Laptop
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="category"
                                                    id="category-camera">
                                                <label class="form-check-label" for="category-camera">
                                                    Camera
                                                </label>
                                            </div>
                                        </form>
                                    </div>

                                    <h6 class="products-content-filter__title">LỌC THEO GIÁ TIỀN</h6>
                                    <div class="products-content-filter__price">
                                        <div class="range-slide">
                                            <div class="slide">
                                                <div class="line" id="line" style="left: 0%; right: 0%;"></div>
                                                <span class="thumb" id="thumbMin" style="left: 0%;"></span>
                                                <span class="thumb" id="thumbMax" style="left: 100%;"></span>
                                            </div>
                                            <input id="rangeMin" type="range" max="42000000" min="300000" step="100000"
                                                value="300000">
                                            <input id="rangeMax" type="range" max="42000000" min="300000" step="100000"
                                                value="42000000">
                                        </div>
                                        <div class="display">
                                            <span id="min">300.000 ₫</span>
                                            <span id="max">42.000.000 ₫</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="products-main-content">
                                    <div class="products-main-content__header">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <nav aria-label="breadcrumb">
                                                    <ol class="breadcrumb">
                                                      <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Trang chủ</a></li>
                                                      <li class="breadcrumb-item active" aria-current="page">Sản phẩm</li>
                                                    </ol>
                                                </nav>
                                            </div>
                                            <div class="offset-md-3 col-md-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Mới nhất</option>
                                                    <option value="1">Thứ tự theo mức độ phổ biến</option>
                                                    <option value="2">Thứ tự theo mức độ đánh giá</option>
                                                    <option value="3">Thứ tự theo giá: thấp đến cao</option>
                                                    <option value="4">Thứ tự theo giá: cao đến thấp</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="products-main-content__body">
                                        <div class="row">
                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                            <div class="col-md-4 mt-3">
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

                                        <div class="row mt-4">
                                            <div class="col-md-12 ">
                                                <nav class="d-flex align-items-center justify-content-center" aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a></li>
                                                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                      <li class="page-item"><a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End product featured -->

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
                                            Lorem Ipsum chỉ đơn giản là một đoạn văn bản giả, được dùng vào việc trình
                                            bày và dàn trang phục vụ cho in ấn. Lorem Ipsum đã được sử dụng như một văn
                                            bản chuẩn cho ngành công nghiệp in ấn từ những năm 1500.
                                        </p>
                                        <p class="footer-item__info">
                                            <span class="footer-item__icon">
                                                <i class="fa-solid fa-location-dot"></i>
                                            </span>
                                            <span class="footer-item__info-text">
                                                Số 18-E4, đường số 5, KDC Tràng An, Phường 7, TP. Bạc Liêu, Tỉnh Bạc
                                                Liêu
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
    <script src="https://code.jquery.com/jquery-3.6.4.js"
        integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>

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

    <script>
        let min = 300000;
        let max = 42000000;

        const calcLeftPosition = value => 100 / (42000000 - 300000) * (value - 300000);

        $('#rangeMin').on('input', function (e) {
            const newValue = parseInt(e.target.value);
            if (newValue > max) return;
            min = newValue;
            $('#thumbMin').css('left', calcLeftPosition(newValue) + '%');
            $('#min').php(VND.format(newValue));
            $('#line').css({
                'left': calcLeftPosition(newValue) + '%',
                'right': (100 - calcLeftPosition(max)) + '%'
            });
        });

        $('#rangeMax').on('input', function (e) {
            const newValue = parseInt(e.target.value);
            if (newValue < min) return;
            max = newValue;
            $('#thumbMax').css('left', calcLeftPosition(newValue) + '%');
            $('#max').php(VND.format(newValue));
            $('#line').css({
                'left': calcLeftPosition(min) + '%',
                'right': (100 - calcLeftPosition(newValue)) + '%'
            });
        });
    </script>
</body>

</html>