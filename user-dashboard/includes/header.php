<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CENTER SPOON</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="assets/images/favicon.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
</head>

<body>
<header>
	<div class="container">
		<div class="header-wrap">
			<div class="logo">
				<a href="../index.php"><img src="assets/images/logo.png" alt="logo" class="img-fluid"></a>
			</div>
			<div class="header-right">
				<ul>
					<li>
						<div class="showHide-icons">
							<a href="javascript:void(0)" class="search-btn" onclick="openSearchHero()"><img src="assets/images/search-icon.png" alt="img" class="img-fluid"></a>
							<a href="javascript:void(0)" class="user-icon">
								<span><i class="fas fa-user"></i></span>
							</a>
						</div>
					</li>
					<li>
						<a href="javascript:void(0)" class="cart-icon">
							<img src="assets/images/cart.png" alt="img" class="img-fluid">
								<span class="item-count">0</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="user-dropdown">
				<ul>
					<li><a href="javascript:void(0)"><i class="fas fa-user"></i> Profile</a></li>
					<li><a href="favorite.php"><i class="fas fa-heart"></i> FAVORITES</a></li>
					<li><a href="order-schedule.php"><i class="fas fa-shopping-bag"></i> ORDER SCHEDULE</a></li>
					<li><a href="group-table.php"><i class="fas fa-users"></i> START A GROUP TABLE</a></li>
					<li><a href="javascript:void(0)"><i class="fas fa-shopping-basket"></i> PAST ORDERS</a></li>
					<li><a href="javascript:void(0)"><i class="fas fa-comment-dots"></i> MY REVIEWS</a></li>
					<li><a href="javascript:void(0)"><i class="fas fa-user-cog"></i> ACCOUNT SETTINGS</a></li>
					<li><a href="javascript:void(0)"><i class="fas fa-sign-out-alt"></i> SIGN OUT</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Searchbar Modal onclick  -->
	<div id="FullScreenOverlay" class="overlaySearch">
		<span class="closebtn" onclick="closeSearchHero()" title="Close overlaySearch">×</span>
		<div class="overlay-content">
			<form action="">
				<div class="fieldWrapper">
					<input type="text" class="modalInput" placeholder="Search" name="search">
					<button type="submit" class="modalBtn"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
	</div>
  <!-- End -->
</header>
