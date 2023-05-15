<?php
require("../../config/config.php");

$users = array();
if (!empty($adminlogged)) {
	$sql = "SELECT * FROM khach_hang WHERE id NOT IN ({$adminlogged['id']})";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$users[] = $row;
		}
	}
} else {
	header("location: ../auth-login.php");
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../../../assets/" data-template="vertical-menu-template-free">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

	<title>Tables - Basic Tables | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

	<meta name="description" content="" />

	<!-- Favicon -->
	<link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

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
								<a href="./users/user-list.php" class="menu-link">
									<div>Danh sách danh mục</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="./users/user-add.php" class="menu-link">
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
								<a href="./users/user-list.php" class="menu-link">
									<div>Danh sách banner</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="./users/user-add.php" class="menu-link">
									<div>Thêm banner</div>
								</a>
							</li>
						</ul>
					</li>

					<li class="menu-header small text-uppercase">
						<span class="menu-header-text">Khách hàng</span>
					</li>
					<li class="menu-item active open">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-user-pin"></i>
							<div data-i18n="Account Settings">Quản lí tài khoản</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item active">
								<a href="./user-list.php" class="menu-link">
									<div>Danh sách tài khoản</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="./user-add.php" class="menu-link">
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
								<a href="../products/product-list.php" class="menu-link">
									<div>Danh sách sản phẩm</div>
								</a>
							</li>
							<li class="menu-item">
								<a href="../products/product-add.php" class="menu-link">
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
					<li class="menu-item">
						<a href="javascript:void(0);" class="menu-link menu-toggle">
							<i class="menu-icon tf-icons bx bx-list-check"></i>
							<div data-i18n="Account Settings">Quản lí đơn hàng</div>
						</a>
						<ul class="menu-sub">
							<li class="menu-item">
								<a href="./orders/order-list.php" class="menu-link">
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

				<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
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
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
							</div>
						</div>
						<!-- /Search -->

						<ul class="navbar-nav flex-row align-items-center ms-auto">

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
						<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Khách hàng /</span> Danh sách tài khoản</h4>

						<!-- Bootstrap Table with Header - Dark -->
						<div class="card">
							<div class="table-responsive text-nowrap">
								<table class="table">
									<thead class="table-dark">

										<tr>
											<th>ID</th>
											<th>Tên tài khoản</th>
											<th>Họ tên</th>
											<th>Số điện thoại</th>
											<th>Avatar</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody class="table-border-bottom-0">
										<?php foreach ($users as $item) { ?>
											<tr>
												<td><strong><?= $item['id'] ?></strong></td>
												<td><?= $item['ten_tai_khoan'] ?></td>
												<td><?= $item['ho_ten'] ?></td>
												<td><?= $item['so_dien_thoai'] ?></td>
												<td>
													<img src="../../../storage/uploads/img/<?= $item['avatar'] ?>" alt="Avatar" class="rounded-circle" style="width: 40px; height: 40px;" />
												</td>
												<td>
													<a href="./user-edit.php?id=<?= $item['id'] ?>" class="btn btn-sm btn-outline-info">
														<i class='bx bxs-edit'></i>
													</a>

													<button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#modal-user" data-id="<?= $item['id'] ?>">
														<i class='bx bx-trash'></i>
														</a>
												</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						</div>
						<!--/ Bootstrap Table with Header Dark -->

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

	<!-- Modal -->
	<div class="modal fade" id="modal-user" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header border-bottom pb-3">
					<h5 class="modal-title" id="modal-user-title">Xóa tài khoản</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<h5>Bạn có chắc xóa tài khoản này, hành động này sẽ không thể khôi phục!</h5>
						</div>
					</div>
				</div>
				<div class="modal-footer border-top pt-3">
					<button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
						Hủy
					</button>
					<a href="" class="btn btn-danger btn-delete">Xóa</a>
				</div>
			</div>
		</div>
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

	<!-- Place this tag in your head or just before your close body tag. -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>

	<script>
		const userModal = document.getElementById('modal-user');
		const btnDelete = userModal.querySelector('.btn-delete');
		userModal.addEventListener('show.bs.modal', event => {

			const button = event.relatedTarget;
			const href = `./user-delete.php?id=${button.getAttribute('data-id')}`;

			btnDelete.setAttribute('href', href);

		})
	</script>
</body>

</html>