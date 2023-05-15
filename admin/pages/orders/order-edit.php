<?php 
    require("../../config/config.php");
    if(!empty($adminlogged)) {

    } else {
        header("location: ../auth-login.php");
    }
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Basic Inputs - Forms | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                  <a href="index.php" class="app-brand-link">
                    <span class="app-brand-logo demo">
                      
                    </span>
                    <span class="app-brand-text demo menu-text text-uppercase fw-bolder">ADMIN</span>
                  </a>
      
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
                </div>
      
                <div class="menu-inner-shadow"></div>
      
                <ul class="menu-inner py-1">
                  <!-- Dashboard -->
                  <li class="menu-item">
                    <a href="../index.php" class="menu-link">
                      <i class="menu-icon tf-icons bx bx-home-circle"></i>
                      <div data-i18n="Analytics">Trang chú</div>
                    </a>
                  </li>
      
                  <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Giao diện web</span>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-category"></i>
                      <div data-i18n="Account Settings">Quản lí danh mục</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="../categories/category-list.php" class="menu-link">
                          <div>Danh sách danh mục</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../categories/category-add.php" class="menu-link">
                          <div>Thêm danh mục</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-carousel"></i>
                      <div data-i18n="Account Settings">Quản lí banner</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="../banners/banner-list.php" class="menu-link">
                          <div>Danh sách banner</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../banners/banner-add.php" class="menu-link">
                          <div>Thêm banner</div>
                        </a>
                      </li>
                    </ul>
                  </li>
      
                  <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Khách hàng</span>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-user-pin"></i>
                      <div data-i18n="Account Settings">Quản lí tài khoản</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="../users/user-list.php" class="menu-link">
                          <div>Danh sách tài khoản</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../users/user-add.php" class="menu-link">
                          <div>Thêm tài khoản</div>
                        </a>
                      </li>
                    </ul>
                  </li>
      
                  <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Sản phẩm</span>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-desktop"></i>
                      <div data-i18n="Account Settings">Quản lí sản phẩm</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="../product-list.php" class="menu-link">
                          <div>Danh sách sản phẩm</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../product-add.php" class="menu-link">
                          <div>Nhập sản phẩm</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bxs-edit"></i>
                      <div data-i18n="Account Settings">Quản lí chi tiết</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="../products-detail/product-detail-pc-add.php" class="menu-link">
                          <div>Thêm chi tiết PC</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../products-detail/product-detail-laptop-add.php" class="menu-link">
                          <div>Thêm chi tiết Laptop</div>
                        </a>
                      </li>
                      <li class="menu-item">
                        <a href="../products-detail/product-detail-camera-add.php" class="menu-link">
                          <div>Thêm chi tiết Camera</div>
                        </a>
                      </li>
                    </ul>
                  </li>
      
      
                  <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Đơn hàng</span>
                  </li>
                  <li class="menu-item active open">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                      <i class="menu-icon tf-icons bx bx-list-check"></i>
                      <div data-i18n="Account Settings">Quản lí đơn hàng</div>
                    </a>
                    <ul class="menu-sub">
                      <li class="menu-item">
                        <a href="./order-list.php" class="menu-link">
                          <div>Danh sách đơn hàng</div>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                                    aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                           

                            <!-- User -->
							<li class="nav-item navbar-dropdown dropdown-user dropdown">
								<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
									<div class="avatar avatar-online">
										<img src="../../../storage/uploads/img/<?= $adminlogged['avatar'] ?>" alt class="w-px-40 h-auto rounded-circle" />
									</div>
								</a>
								<ul class="dropdown-menu dropdown-menu-end">
									<li>
										<a class="dropdown-item" href="#">
											<div class="d-flex">
												<div class="flex-shrink-0 me-3">
													<div class="avatar avatar-online">
														<img src="../../../storage/uploads/img/<?= $adminlogged['avatar'] ?>" alt class="w-px-40 h-auto rounded-circle" />
													</div>
												</div>
												<div class="flex-grow-1">
													<span class="fw-semibold d-block"><?= $adminlogged['fullname'] ?></span>
													<small class="text-muted">Admin</small>
												</div>
											</div>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="../account.php">
											<i class="bx bx-user me-2"></i>
											<span class="align-middle">Thông tin tài khoản</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="../account.php">
											<i class="bx bx-cog me-2"></i>
											<span class="align-middle">Cài đặt</span>
										</a>
									</li>
									<li>
										<a class="dropdown-item" href="#">
											<span class="d-flex align-items-center align-middle">
												<i class="flex-shrink-0 bx bx-credit-card me-2"></i>
												<span class="flex-grow-1 align-middle">Thông báo</span>
												<span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
											</span>
										</a>
									</li>
									<li>
										<div class="dropdown-divider"></div>
									</li>
									<li>
										<a class="dropdown-item" href="../logout.php">
											<i class="bx bx-power-off me-2"></i>
											<span class="align-middle">Đăng xuất</span>
										</a>
									</li>
								</ul>
							</li>
							<!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Khách hàng /</span> Thêm tài
                            khoản</h4>

                        <div class="row bg-white">
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="ID" class="form-label">ID tài khoản</label>
                                            <input type="text" class="form-control" id="ID"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp"
                                                readonly />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="fullname" class="form-label">Họ tên</label>
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="username" class="form-label">Tên tài
                                                khoản</label>
                                            <input type="text" class="form-control" id="username" name="username"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="password" class="form-label">Mật khẩu</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="birthdate" class="form-label">Ngày sinh</label>
                                            <input type="date" class="form-control" id="birthdate" name="birthdate"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="defaultFormControlInput" class="form-label">Giới tính</label>
                                            <div class="d-flex py-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" value="Nam"
                                                        id="Male" name="gender" checked />
                                                    <label class="form-check-label" for="Male"> Nam
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="Nữ"
                                                        id="Female" name="gender"/>
                                                    <label class="form-check-label" for="Female"> Nữ
                                                    </label>
                                                </div>
                                                <div class="form-check ms-3">
                                                    <input class="form-check-input" type="radio" value="Khác"
                                                        id="Orther" name="gender"/>
                                                    <label class="form-check-label" for="Orther"> Khác
                                                    </label>
                                                </div>
                                            </div>
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="phone" class="form-label">Số điện
                                                thoại</label>
                                            <input type="phone" class="form-control" id="phone" name="phone"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="level" class="form-label">Cấp bậc</label>
                                            <select class="form-select" id="level" name="level" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="avatar" class="form-label">Ảnh đại diện</label>
                                            <input class="form-control" type="file" id="avatar" name="avatar" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-4 shadow-none">
                                    <div class="card-body">
                                        <div>
                                            <label for="create_at" class="form-label">Ngày tạo tài
                                                khoản</label>
                                            <input type="datetime-local" class="form-control" id="create_at" name="create_at"
                                                placeholder="John Doe" aria-describedby="defaultFormControlHelp" />
                                            <span id="defaultFormControlHelp" class="form-text text-danger"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- / Content -->

                        

                        <div class="content-backdrop fade"></div>
                    </div>
                    <!-- Content wrapper -->
                </div>
                <!-- / Layout page -->
            </div>

            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
        </div>
        <!-- / Layout wrapper -->

        <div class="buy-now">
            <a href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/" target="_blank"
                class="btn btn-danger btn-buy-now">Upgrade to Pro</a>
        </div>

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
        <script src="../../assets/vendor/libs/popper/popper.js"></script>
        <script src="../../assets/vendor/js/bootstrap.js"></script>
        <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="../../assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="../../assets/js/main.js"></script>

        <!-- Page JS -->

        <script src="../../assets/js/form-basic-inputs.js"></script>

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>