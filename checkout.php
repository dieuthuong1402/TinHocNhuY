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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/style-checkout.css">
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

            <div class="checkout-content">
                <div class="container-lg container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkout-content__left">
                                <h6 class="checkout-content__left-title">Thông tin nhận hàng</h6>
                                <form action="" id="form-checkout" class="checkout-content__left-form">
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="checkout-content__left-form-group">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    <div class="card w-100">
                                                        <div class="card-body">
                                                            <h6 class="card-title">
                                                                Đào Thị Diệu Thương
                                                                <span class="badge ms-2 bg-danger">Mặc định</span>
                                                            </h6>
                                                            <div class="d-flex align-items-end justify-content-between">
                                                                <div>
                                                                    <p class="mb-1 fs-7 text-default">Địa chỉ: Sóc Trăng
                                                                    </p>
                                                                    <p class="mb-1 fs-7 text-default">Điện thoại:
                                                                        0868337083</p>
                                                                    <p class="mb-1 fs-7 text-default">Email:
                                                                        daothuong068@gmail.com</p>
                                                                </div>

                                                                <div>
                                                                    <button type="button" class="btn btn-sm btn-outline-danger me-2 btn-edit-address" data-bs-toggle="modal" data-bs-target="#address-modal" data-name="Đào Thị Diệu Thương" data-address="Sóc Trăng" data-phone="0868337083" data-email="daothuong068@gmail.com">
                                                                        Chỉnh sửa
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="checkout-content__left-form-group">
                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    <div class="card w-100">
                                                        <div class="card-body">
                                                            <h6 class="card-title">
                                                                Đào Thị Diệu Thương

                                                            </h6>
                                                            <div class="d-flex align-items-end justify-content-between">
                                                                <div>
                                                                    <p class="mb-1 fs-7 text-default">Địa chỉ: Sóc Trăng
                                                                    </p>
                                                                    <p class="mb-1 fs-7 text-default">Điện thoại:
                                                                        0868337083</p>
                                                                    <p class="mb-1 fs-7 text-default">Email:
                                                                        daothuong068@gmail.com</p>
                                                                </div>

                                                                <div>
                                                                    <button type="button" class="btn btn-sm btn-outline-danger me-2 btn-edit-address" data-bs-toggle="modal" data-bs-target="#address-modal" data-name="Đào Thị Diệu Thương" data-address="Sóc Trăng" data-phone="0868337083" data-email="daothuong068@gmail.com">
                                                                        Chỉnh sửa
                                                                    </button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <button type="button" class="btn-add-address" data-bs-toggle="modal" data-bs-target="#address-modal">
                                                <i class="fa-solid fa-plus"></i>
                                                Thêm địa chỉ
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-content__right">
                                <h6 class="checkout-content__right-title">Thông tin đơn hàng</h6>
                                <ul class="checkout-content__right-product-list">
                                    <li class="checkout-content__right-product-item">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="checkout-content__right-product-thumbnail">
                                        <div class="checkout-content__right-product-info">
                                            <p class="checkout-content__right-product-name">
                                                Camera IP 360 Độ 1536P TP-Link Tapo C210
                                            </p>
                                            <div class="checkout-content__right-product-group">
                                                <p class="checkout-content__right-product-quantity">Số lượng: 1</p>

                                                <p class="checkout-content__right-product-price">649.000 đ</p>
                                                </p>
                                            </div>
                                    </li>

                                    <li class="checkout-content__right-product-item">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="checkout-content__right-product-thumbnail">
                                        <div class="checkout-content__right-product-info">
                                            <p class="checkout-content__right-product-name">
                                                Camera IP 360 Độ 1536P TP-Link Tapo C210
                                            </p>
                                            <div class="checkout-content__right-product-group">
                                                <p class="checkout-content__right-product-quantity">Số lượng: 1</p>

                                                <p class="checkout-content__right-product-price">649.000 đ</p>
                                                </p>
                                            </div>
                                    </li>

                                    <li class="checkout-content__right-product-item">
                                        <img src="./assets/img/products/camera/product-1.jpg" alt="" class="checkout-content__right-product-thumbnail">
                                        <div class="checkout-content__right-product-info">
                                            <p class="checkout-content__right-product-name">
                                                Camera IP 360 Độ 1536P TP-Link Tapo C210
                                            </p>
                                            <div class="checkout-content__right-product-group">
                                                <p class="checkout-content__right-product-quantity">Số lượng: 1</p>

                                                <p class="checkout-content__right-product-price">649.000 đ</p>
                                                </p>
                                            </div>
                                    </li>
                                </ul>

                                <h6 class="checkout-content__right-title">Phương thức thanh toán</h6>
                                <div class="checkout-content__right-payments">
                                    <form action="" class="products-content-filter__categories-form">
                                        <div class="form-check-pay">
                                            <input class="form-check-input" type="radio" name="category" id="category-all1" checked>
                                            <label class="form-check-label" for="category-all1">
                                                Ví điện tử
                                            </label>
                                        </div>
                                        <div class="form-check-pay">
                                            <input class="form-check-input" type="radio" name="category" id="category-all">
                                            <label class="form-check-label" for="category-all">
                                                Thẻ Tín dụng/Ghi nợ
                                            </label>
                                        </div>

                                        <div class="form-check-pay">
                                            <input class="form-check-input" type="radio" name="category" id="category-pc">
                                            <label class="form-check-label" for="category-pc">
                                                Chuyển khoảng ngân hàng
                                            </label>
                                        </div>

                                        <div class="form-check-pay">
                                            <input class="form-check-input" type="radio" name="category" id="category-laptop">
                                            <label class="form-check-label" for="category-laptop">
                                                Thanh toán khi nhận hàng
                                            </label>
                                        </div>
                                    </form>
                                </div>

                                <p class="d-flex align-items-center justify-content-between mt-3 mb-2 text-default">
                                    <span class="fw-bold">Tổng tạm tính</span>
                                    <span class="fw-bold">1.947.000 đ</span>
                                </p>
                                <p class="d-flex align-items-center justify-content-between mb-2 text-default">
                                    <span class="fw-bold">Phí vận chuyển</span>
                                    <span class="fw-bold">Miễn phí</span>
                                </p>
                                <p class="d-flex align-items-center justify-content-between mb-2 text-default">
                                    <span class="fw-bold">Thành tiền</span>
                                    <span class="fw-bold text-primary fs-5">1.947.000 đ</span>
                                </p>

                                <div class="text-end">
                                    <a href="" class="checkout-content__right-btn">THANH TOÁN</a>
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

        <!-- Modal -->
        <div class="modal fade" id="address-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Thông tin người nhận hàng</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="form-address" action="address.php" method="POST">
                            <div class="border-bottom">
                                <div class="mb-3 form-group">
                                    <label for="fullname" class="form-label fs-7 fw-semibold">Họ tên <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control shadow-none fs-7" id="fullname" name="fullname" aria-describedby="emailHelp" placeholder="Nhập họ tên người nhận hàng">
                                    <span class="form-text text-danger"></span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="email" class="form-label fs-7 fw-semibold">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control shadow-none fs-7" id="email" name="email" aria-describedby="emailHelp" placeholder="Nhập email của bạn">
                                            <span class="form-text text-danger"></span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3 form-group">
                                            <label for="phone" class="form-label fs-7 fw-semibold">Điện thoại <span class="text-danger">*</span></label>
                                            <input type="phone" class="form-control shadow-none fs-7" id="phone" name="phone" placeholder="Nhập số điện thoại">
                                            <span class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <h6 class="my-3">Địa chỉ nhận hàng</h6>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="phone" class="form-label fs-7 fw-semibold">Tỉnh/Thành phố <span class="text-danger">*</span></label>
                                        <select id="city" class="select-tp form-select fs-7 shadow-none" aria-label="Default select example">
                                            <option value="" selected>--- Chọn Tỉnh/Thành phố ---</option>
                                        </select>
                                        <input type="hidden" name="city">
                                        <span class="form-text text-danger"></span>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="phone" class="form-label fs-7 fw-semibold">Quận/Huyện <span class="text-danger">*</span></label>
                                        <select id="district" class="form-select fs-7 shadow-none" aria-label="Default select example">
                                            <option value="" selected>--- Chọn Quận/Huyện ---</option>
                                        </select>
                                        <input type="hidden" name="district">
                                        <span class="form-text text-danger"></span>
                                    </div>

                                    <div class="col-md-6 form-group mt-3">
                                        <label for="phone" class="form-label fs-7 fw-semibold">Phường/Xã <span class="text-danger">*</span></label>
                                        <select id="ward" class="form-select fs-7 shadow-none" aria-label="Default select example">
                                            <option value="" selected>--- Chọn Phường/Xã ---</option>
                                        </select>
                                        <input type="hidden" name="ward">
                                        <span class="form-text text-danger"></span>
                                    </div>

                                    <div class="col-md-6 form-group mt-3">
                                        <div class="mb-3">
                                            <label for="phone" class="form-label fs-7 fw-semibold">Địa chỉ cụ thể <span class="text-danger">*</span></label>
                                            <input type="phone" class="form-control shadow-none fs-7" id="address" placeholder="Số nhà, ấp, tên đường" name="address">
                                            <span class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <div class="form-check d-flex justify-content-end">
                                            <input class="form-check-input" type="checkbox" value="checked" id="flexCheckDefault" name="check-address-default">
                                            <label class="form-check-label ms-2" for="flexCheckDefault">
                                                Đặt làm mặc định
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" id="input-submit" name="add-address-submit" value="submit">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Hủy</button>
                        <button class="btn btn-sm btn-primary" form="form-address">Lưu lại</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->

    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>

    <!-- Bootstrap Bundle JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Slick Carousel JS -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>

    <!-- Validator -->
    <script src="./assets/js/validatior.js"></script>

    <!-- Main JS -->
    <script src="./assets/js/main.js"></script>

    <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

    <script>
        validator({
            form: '#form-addess',
            errorSelector: '.form-text',
            formGroupSelector: '.form-group',
            rules: [
                validator.isRequired('#fullname', 'Vui lòng nhập trường này'),
                validator.isRequired('#email', 'Vui lòng nhập trường này'),
                validator.isEmail('#email', 'Vui lòng nhập đúng định dạng email'),
                validator.isRequired('#phone', 'Vui lòng nhập trường này'),
                validator.isRequired('#city', 'Vui lòng nhập trường này'),
                validator.isRequired('#district', 'Vui lòng nhập trường này'),
                validator.isRequired('#ward', 'Vui lòng nhập trường này'),
            ],
            onSubmit: function(data) {
                console.log(data);
            }
        })
    </script>

    <script>
        const addressModal = document.getElementById('address-modal')
        addressModal.addEventListener('show.bs.modal', event => {

            const button = event.relatedTarget
            const data = {
                name: button.getAttribute('data-name'),
                email: button.getAttribute('data-email'),
                phone: button.getAttribute('data-phone'),
                address: button.getAttribute('data-address'),
            }

            //
            // Update the modal's content.
            if (button.matches('.btn-edit-address')) {
                document.querySelector('.modal-body #fullname').value = data.name;
                document.querySelector('.modal-body #email').value = data.email;
                document.querySelector('.modal-body #phone').value = data.phone;

                document.querySelector('.modal-body form').setAttribute('action', 'update');
            } else {
                document.querySelector('.modal-body form').setAttribute('action', 'add');
            }
        })


        const citis = document.getElementById("city");
        const districts = document.getElementById("district");
        const wards = document.getElementById("ward");

        const Parameter = {
            method: "GET",
            url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
            responseType: "application/json",
        };

        const promise = axios(Parameter);

        promise.then(function(result) {
            renderCity(result.data);
        });

        function renderCity(data) {
            for (const x of data) {
                citis.options[citis.options.length] = new Option(x.Name, x.Id);
            }
            citis.onchange = function() {
                district.length = 1;
                ward.length = 1;
                if (this.value != "") {
                    const result = data.filter(n => n.Id === this.value);

                    for (const k of result[0].Districts) {
                        district.options[district.options.length] = new Option(k.Name, k.Id);
                    }
                }
            };
            district.onchange = function() {
                ward.length = 1;
                const dataCity = data.filter((n) => n.Id === citis.value);
                if (this.value != "") {
                    const dataWards = dataCity[0].Districts.filter(n => n.Id === this.value)[0].Wards;

                    for (const w of dataWards) {
                        wards.options[wards.options.length] = new Option(w.Name, w.Id);
                    }
                }
            };
        }
    </script>
</body>

</html>