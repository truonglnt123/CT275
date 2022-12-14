<?php
	if(isset($_COOKIE["remember_login"])){
		$_SESSION['login_success'] = $_COOKIE["remember_login"];
	}
	if(empty($_GET['action'])){
		$_GET['action'] = 'home';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link rel="stylesheet" href="../view/css/style.css" type="text/css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> <!--Sử dụng Aos-->
</head>
<body>
	<!--Sử dụng preloader-->
	<div class="preloader"></div>
	<header class="container mt-4">
		<div class="row align-items-center">
			<div class="col-md-3 my-3"><a href="?action=home"><img style="width: 100%;" src="../view/img/LUXENUS FURNITURE.png" alt=""></a></div>
			<div class="col-md-5 my-3">
				<form id="form_search" action="#" method="get" class="d-flex justify-content-center align-items-center">
					<input class="d-inline-block" type="text" id="input_product" placeholder="Nhập từ khóa tìm kiếm ..." name="search_product">
					<button id="search_btn" type="submit" class="btn">
						<i class="fas fa-search"></i>
					</button>
				</form>
			</div>
			<div id="account_cart" class="col-md-4 d-flex my-3 justify-content-center">
			<?php
			  if(isset($_SESSION['login_success'])){
						echo "<div class='d-flex'><span class='font-italic'>Người dùng&nbsp;</span>"."<span class='font-weight-bold'>".$_SESSION['login_success']."</span>";
						echo "<a href='../controller/index.php?action=logout' style='text-decoration:none;	'> &nbsp;| Đăng xuất</a></div>";
				 }else{
				?>
					<a class="mx-3" href="../controller/index.php?action=register">ĐĂNG KÝ</a>|
					<a class="mx-3" href="../controller/index.php?action=login">ĐĂNG NHẬP</a>|
	
				<?php }?>

				<a class="mx-3" href="../controller/index.php?action=cart" id="cart">
					<i class="fas fa-dolly" style="color: rgb(247,148,29);"></i>
					<span id="count_product"><?php if(isset($_SESSION['cart'])){
														echo count($_SESSION['cart']);
													}else{echo "0";}?>
					</span>
				</a>
			</div>
		</div>
		<div class="row mt-4">			
			<nav class="navbar navbar-expand-lg navbar-light col-md-8">
				<button id="btn_toggler" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li class="nav-item active mx-2">
							<a class="nav-link font-weight-bold" style="<?php if($_GET['action'] == 'home') echo ' color: rgba(0,0,0,.9) !important;'; ?> ;color:rgba(0,0,0,.5);" href="../controller/index.php?action=home">TRANG CHỦ <span class="sr-only"></span></a>
						</li>
						<li class="nav-item dropdown mx-2">
							<a id="product_portfolio"  style="<?php if($_GET['action'] == 'product') echo 'color: rgba(0,0,0,.9);'; ?>" class="nav-link dropdown-toggle font-weight-bold" href="../controller/index.php?action=product&category_id=all" role="button" data-toggle="dropdown" aria-expanded="true">
								SẢN PHẨM
							</a>
							<div class="dropdown-menu" id="dropdown_container">
								<a class="dropdown-item d-flex justify-content-between align-items-center" href="../controller/index.php?action=product&category_id=all" style="border-top: 1px solid rgb(247,148,29);" id="parent_product">
										Tất cả sản phẩm 
								</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=1">Sofa</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=2">Ghế</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=3">Trang trí</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=4">Kệ sách</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=5">Bàn</a>
								<a class="dropdown-item" href="../controller/index.php?action=product&category_id=6">Tủ</a>
							</div>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" style="<?php if($_GET['action'] == 'about') echo ' color: rgba(0,0,0,.9);'; ?>" href="../controller/index.php?action=about">GIỚI THIỆU</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" style="<?php if($_GET['action'] == 'news') echo ' color: rgba(0,0,0,.9);'; ?>" href="../controller/index.php?action=news">TIN TỨC</a>
						</li>
						<li class="nav-item mx-2">
							<a class="nav-link font-weight-bold" style="<?php if($_GET['action'] == 'contact') echo ' color: rgba(0,0,0,.9);'; ?>" href="../controller/index.php?action=contact">LIÊN HỆ</a>
						</li>
					</ul>
				</div>
			</nav>
			<div class="col-md-4 d-flex align-items-center justify-content-end" id="top_right">
				<span><i class="fas fa-headphones fa-lg" style="color: orange;"></i><span class="font-weight-bold" id="hotline">Hotline: <span id="phone_number">1900 6789</span></span></span>
			</div>
		</div>
	</header>
