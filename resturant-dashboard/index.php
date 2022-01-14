<?php include 'includes/header.php';?>
<section class="userDashboard-sec">
	<aside>
		<div class="aside-top">
			<div class="user-view">
				<img src="assets/images/resturant-icon.jpg" alt="img" class="img-fluid member-icon">
				<p>Hard Rock Cafe
					<span>Restaurant</span>
				</p>
			</div>
		</div>
		<div class="aside-counter">
			<div class="aside-counterWrap">
				<div class="counter">
					<span>150</span>
					<p>Followers</p>
				</div>
				<div class="counter">
					<span>150</span>
					<p>Reviews</p>
				</div>
				<div class="counter">
					<span>150</span>
					<p>Total Posts</p>
				</div>
			</div>
			<div class="follow-button">
				<button type="button" class="site-btn">Follow</button>
			</div>
		</div>
		<div class="dashboard-tabs">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<button class="nav-link active" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="true"><span><i class="fas fa-user"></i></span> Profile</button>

				<button class="nav-link" id="v-pills-favorites-tab" data-bs-toggle="pill" data-bs-target="#v-pills-favorites" type="button" role="tab" aria-controls="v-pills-favorites" aria-selected="false"><span><i class="fas fa-heart" aria-hidden="true"></i></span> Favorites</button>

				<button class="nav-link" id="v-pills-schedule-tab" data-bs-toggle="pill" data-bs-target="#v-pills-schedule" type="button" role="tab" aria-controls="v-pills-schedule" aria-selected="false"><span><i class="fas fa-shopping-bag"></i></span> Order Schedule</button>

				<button class="nav-link" id="v-pills-newItems-tab" data-bs-toggle="pill" data-bs-target="#v-pills-newItems" type="button" role="tab" aria-controls="v-pills-newItems" aria-selected="false"><span><img src="assets/images/new-items.png" alt="img" class="img-fluid"></span> New Items</button>

				<button class="nav-link" id="v-pills-topCuisines-tab" data-bs-toggle="pill" data-bs-target="#v-pills-topCuisines" type="button" role="tab" aria-controls="v-pills-topCuisines" aria-selected="false"><span><img src="assets/images/cuisines.png" alt="img" class="img-fluid"></span> Top Cuisines</button>

				<button class="nav-link" id="v-pills-meals-tab" data-bs-toggle="pill" data-bs-target="#v-pills-meals" type="button" role="tab" aria-controls="v-pills-meals" aria-selected="false"><span><img src="assets/images/meals.png" alt="img" class="img-fluid"></span> Meals Under 600</button>

				<button class="nav-link" id="v-pills-reviews-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reviews" type="button" role="tab" aria-controls="v-pills-reviews" aria-selected="false"><span><img src="assets/images/reviews.png" alt="img" class="img-fluid"></span> Reviews</button>

				<button class="nav-link" id="v-pills-camp-tab" data-bs-toggle="pill" data-bs-target="#v-pills-camp" type="button" role="tab" aria-controls="v-pills-camp" aria-selected="false"><span><img src="assets/images/camp.png" alt="img" class="img-fluid"></span> Ad Campaign</button>
			</div>
		</div>
	</aside>
	<div class="dashboard-right">
		<div class="dashboard-wrap">

			<div class="tab-content" id="v-pills-tabContent">
				<!-- Profile Tab Start -->
				<div class="tab-pane fade show active" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Restaurant Profile <span>Lorem ipsum dolor sit amet, consectetur</span></p>
							</div>
							<div class="row">
								<div class="innerSec-head">
									<p class="inner-heading">Featured Items</p>
									<a href="javascript:void(0)">View All</a>
								</div>
								<div class="owl-carousel feature-slider owl-theme">
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>The Maui Wide Leg Linen Pants</p>
												<div class="bottom">
													<p>478 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide2 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>A Sweet Surprise Floral Dress</p>
												<div class="bottom">
													<p>300 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Loock My Way Lace Tank</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide4 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item04.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Reach For The Stars Leopard</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide5 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item05.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>PREORDER - Bragging Rights</p>
												<div class="bottom">
													<p>450 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide2 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>A Sweet Surprise Floral Dress</p>
												<div class="bottom">
													<p>300 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Loock My Way Lace Tank</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="right-slider2">
								<div class="row">
									<div class="innerSec-head">
										<p class="inner-heading">Meals Under 600</p>
										<a href="javascript:void(0)">View All</a>
									</div>
									<div class="owl-carousel localFavorites-slider owl-theme">
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide2 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>A Sweet Surprise Floral Dress</p>
													<div class="bottom">
														<p>300 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Loock My Way Lace Tank</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide4 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item04.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Reach For The Stars Leopard</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide5 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item05.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>PREORDER - Bragging Rights</p>
													<div class="bottom">
														<p>450 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide2 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>A Sweet Surprise Floral Dress</p>
													<div class="bottom">
														<p>300 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Loock My Way Lace Tank</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="right-slider3">
								<div class="row">
									<div class="innerSec-head">
										<p class="inner-heading">Top Cuisines</p>
										<a href="javascript:void(0)">View All</a>
									</div>
									<div class="owl-carousel topCuisines-slider owl-theme">
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon1.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Chicken</p>
												</div>
											</a>
										</div>
										<!-- Slide2 -->
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon2.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Mexicon</p>
												</div>
											</a>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon3.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Seefood</p>
												</div>
											</a>
										</div>
										<!-- Slide4 -->
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon4.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Vegetables</p>
												</div>
											</a>
										</div>
										<!-- Slide5 -->
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon5.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Asian</p>
												</div>
											</a>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<a href="javascript:void(0)">
												<div class="Cuisine-box">
													<div class="image">
														<img src="assets/images/food-icon3.png" alt="img" class="img-fluid">
													</div>
													<p class="Cuisine-title">Seefood</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- End -->

				<div class="tab-pane fade" id="v-pills-favorites" role="tabpanel" aria-labelledby="v-pills-favorites-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Favorites</p>
							</div>
							<div class="userFavorites">
								<div class="row">
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="user-favoriteBox">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly="">
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="liked"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="loadMore-btn text-center my-4">
									<a href="javascript:void(0)">Load More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-schedule" role="tabpanel" aria-labelledby="v-pills-schedule-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Order Schedule</p>
							</div>
							<div class="schedule-area">
								<div class="row">
									<div class="orderSchedule-listing">
										<ul class="nav nav-pills schedule-tabs mb-3" id="pills-tab" role="tablist">
											<li class="nav-item" role="presentation">
												<button class="nav-link active" id="pills-sunday-tab" data-bs-toggle="pill" data-bs-target="#pills-sunday" type="button" role="tab" aria-controls="pills-sunday" aria-selected="true">Sunday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-monday-tab" data-bs-toggle="pill" data-bs-target="#pills-monday" type="button" role="tab" aria-controls="pills-monday" aria-selected="false">Monday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-tuesday-tab" data-bs-toggle="pill" data-bs-target="#pills-tuesday" type="button" role="tab" aria-controls="pills-tuesday" aria-selected="false">Tuesday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-wednesday-tab" data-bs-toggle="pill" data-bs-target="#pills-wednesday" type="button" role="tab" aria-controls="pills-wednesday" aria-selected="false">Wednesday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-thursday-tab" data-bs-toggle="pill" data-bs-target="#pills-thursday" type="button" role="tab" aria-controls="pills-thursday" aria-selected="false">Thursday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-friday-tab" data-bs-toggle="pill" data-bs-target="#pills-friday" type="button" role="tab" aria-controls="pills-friday" aria-selected="false">Friday</button>
											</li>
											<li class="nav-item" role="presentation">
												<button class="nav-link" id="pills-saturday-tab" data-bs-toggle="pill" data-bs-target="#pills-saturday" type="button" role="tab" aria-controls="pills-saturday" aria-selected="false">Saturday</button>
											</li>
										</ul>
									</div>
								</div>
								<div class="row">
									<div class="tab-content" id="pills-tabContent">
										<!-- Sunday Tab Start -->
										<div class="tab-pane fade show active" id="pills-sunday" role="tabpanel" aria-labelledby="pills-sunday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Monday Tab Start -->
										<div class="tab-pane fade" id="pills-monday" role="tabpanel" aria-labelledby="pills-monday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Tuesday Tab Start -->
										<div class="tab-pane fade" id="pills-tuesday" role="tabpanel" aria-labelledby="pills-tuesday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Wednesday Tab Start -->
										<div class="tab-pane fade" id="pills-wednesday" role="tabpanel" aria-labelledby="pills-wednesday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Thursday Tab Start -->
										<div class="tab-pane fade" id="pills-thursday" role="tabpanel" aria-labelledby="pills-thursday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Friday Tab Start -->
										<div class="tab-pane fade" id="pills-friday" role="tabpanel" aria-labelledby="pills-friday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Saturday Tab Start -->
										<div class="tab-pane fade" id="pills-saturday" role="tabpanel" aria-labelledby="pills-saturday-tab">
											<div class="row m-0">
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order2.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
												<div class="col-12 col-md-4 col-lg-4">
													<div class="orderSchedule-box">
														<div class="image">
															<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
														</div>
														<div class="order-timeBar">
															<span class="time-icon"><i class="fas fa-hourglass-start"></i></span>
															<span class="order-time">10 + 30 Min</span>
															<span class="order-type">| Medium | Serves: 2</span>
														</div>
														<div class="order-details">
															<p class="title">Low-Carb Garlic Fish </p>
															<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
														</div>
														<div class="order-link">
															<a href="javascript:void(0)">Order Link <i class="fas fa-plus"></i></a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-newItems" role="tabpanel" aria-labelledby="v-pills-newItems-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>New Items</p>
							</div>
							<div class="newItems-wrap">
								<div class="row">
									<div class="owl-carousel new-Items-slider owl-theme">
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>The Maui Wide Leg Linen Pants</p>
													<div class="bottom">
														<p>478 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide2 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>A Sweet Surprise Floral Dress</p>
													<div class="bottom">
														<p>300 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Loock My Way Lace Tank</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide4 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item04.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Reach For The Stars Leopard</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide5 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item05.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>PREORDER - Bragging Rights</p>
													<div class="bottom">
														<p>450 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide2 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>A Sweet Surprise Floral Dress</p>
													<div class="bottom">
														<p>300 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- Slide3 -->
										<div class="item">
											<div class="feature-slide">
												<div class="image">
													<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
												</div>
												<div class="slide-footer">
													<p>Loock My Way Lace Tank</p>
													<div class="bottom">
														<p>395 CAL</p>
														<div class="bottom-right">
															<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
																<input class="form-control" type="text" readonly />
																<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
															</div>
															<span class="unlike"><i class="fas fa-heart"></i></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-topCuisines" role="tabpanel" aria-labelledby="v-pills-topCuisines-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Top Cuisines</p>
							</div>
							<div class="topCuisines-wrap">
								<div class="owl-carousel topCuisines-slider owl-theme">
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon1.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Chicken</p>
											</div>
										</a>
									</div>
									<!-- Slide2 -->
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon2.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Mexicon</p>
											</div>
										</a>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon3.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Seefood</p>
											</div>
										</a>
									</div>
									<!-- Slide4 -->
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon4.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Vegetables</p>
											</div>
										</a>
									</div>
									<!-- Slide5 -->
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon5.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Asian</p>
											</div>
										</a>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<a href="javascript:void(0)">
											<div class="Cuisine-box">
												<div class="image">
													<img src="assets/images/food-icon3.png" alt="img" class="img-fluid">
												</div>
												<p class="Cuisine-title">Seefood</p>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-meals" role="tabpanel" aria-labelledby="v-pills-meals-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Meals Under 600</p>
							</div>
							<div class="meals-wrap">
								<div class="owl-carousel localFavorites-slider owl-theme">
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item01.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>The Maui Wide Leg Linen Pants</p>
												<div class="bottom">
													<p>478 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide2 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>A Sweet Surprise Floral Dress</p>
												<div class="bottom">
													<p>300 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Loock My Way Lace Tank</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide4 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item04.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Reach For The Stars Leopard</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide5 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item05.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>PREORDER - Bragging Rights</p>
												<div class="bottom">
													<p>450 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide2 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item02.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>A Sweet Surprise Floral Dress</p>
												<div class="bottom">
													<p>300 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Slide3 -->
									<div class="item">
										<div class="feature-slide">
											<div class="image">
												<a href="javascript:void(0)"><img src="assets/images/f-item03.jpg" alt="img" class="img-fluid"></a>
											</div>
											<div class="slide-footer">
												<p>Loock My Way Lace Tank</p>
												<div class="bottom">
													<p>395 CAL</p>
													<div class="bottom-right">
														<div class="input-group date datepicker-btn" data-date-format="dd-mm-yyyy">
															<input class="form-control" type="text" readonly />
															<!-- <span class="input-group-addon"><i class="fas fa-calendar-alt"></i></span> -->
														</div>
														<span class="unlike"><i class="fas fa-heart"></i></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-reviews" role="tabpanel" aria-labelledby="v-pills-reviews-tab">
					<div class="container">
						<!-- Reviews Start -->
						<div class="dashboard-tabWrap" id="reviews">
							<div class="dashboardTab-head">
								<p>Reviews <span>Lorem ipsum dolor sit amet, consectetur</span></p>
								<button type="button" class="site-btn" id="addReview-btn">Add Review</button>
							</div>
							<div class="allReviews-wrap">
								<div class="row">
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
									<div class="col-12 col-md-4 col-lg-4">
										<div class="orderSchedule-box review-box">
											<div class="image">
												<img src="assets/images/order1.jpg" alt="img" class="img-fluid">
											</div>
											<div class="user-reviewBox">
												<div class="left">
													<div class="icon">
														<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
													</div>
													<div class="info">
														<p>Marie Barie <span>Date : 1- May-2021</span></p>
													</div>
												</div>
												<div class="right">
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="fas fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
													<span><i class="far fa-star"></i></span>
												</div>
											</div>
											<div class="order-details">
												<p>Lorem ipsum dolor sit amet, consectetur adi pisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End -->
						<div class="dashboard-tabWrap" id="addReview">
							<div class="dashboardTab-head">
								<p>Add Review <span>Lorem ipsum dolor sit amet, consectetur</span></p>
							</div>
							<!-- Add Review Start -->
							<div class="addReviews-form">
								<form class="userProfile-form">
									<!--Drag File Html Start-->
									<DIV id="dropzone">
										<DIV class="dropzone needsclick" id="demo-upload" action="/upload">
											<DIV class="dz-message needsclick"> 
												<SPAN class="note needsclick">
													<i class="fas fa-cloud-upload-alt"></i>
													<span id="fileLabelText">
														Drag Or Drop File
													</span>
												</SPAN>
											</DIV>
										</DIV>
									</DIV>
									<DIV id="preview-template" style="display: none;"></DIV>
									<!--End-->
									<div class="reviews-ratings">
										<span class="title">Rating:</span>
										<div class="rating-icons">
											<span class="rate-icon"><i class="far fa-star"></i></span>
											<span class="rate-icon"><i class="far fa-star"></i></span>
											<span class="rate-icon"><i class="far fa-star"></i></span>
											<span class="rate-icon"><i class="far fa-star"></i></span>
											<span class="rate-icon"><i class="far fa-star"></i></span>
										</div>
									</div>
									<div class="field-area">
										<input type="text" placeholder="Name" class="userPro-formField">
										<input type="text" placeholder="Comment" class="userPro-formField">
										<textarea class="userPro-formField" placeholder="Descriptions"></textarea>
									</div>
									<div class="profileForm-button">
										<button type="submit" class="site-btn">Submit Now</button>
									</div>
								</form>
							</div>
							<!-- End -->
						</div>
					</div>
				</div>

				<div class="tab-pane fade" id="v-pills-camp" role="tabpanel" aria-labelledby="v-pills-camp-tab">
					<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Add Campaign <span>Lorem ipsum dolor sit amet, consectetur</span></p>
							</div>
							<!-- Add Review Start -->
							<div class="addReviews-form">
								<form class="userProfile-form">
									<!--Drag File Html Start-->
									<DIV id="dropzone">
										<DIV class="dropzone needsclick" id="demo-upload2" action="/upload">
											<DIV class="dz-message needsclick"> 
												<SPAN class="note needsclick">
													<i class="fas fa-cloud-upload-alt"></i>
													<span id="fileLabelText">
														Drag Or Drop File
													</span>
												</SPAN>
											</DIV>
										</DIV>
									</DIV>
									<DIV id="preview-template2" style="display: none;"></DIV>
									<!--End-->
									<div class="field-area">
										<select class="userPro-formField">
											<option selected="selected">Select Package</option>
											<option>Lorem ipsum dolor</option>
											<option>Lorem ipsum dolor</option>
											<option>Lorem ipsum dolor</option>
											<option>Lorem ipsum dolor</option>
										</select>
									</div>
									<div class="payment-area">
										<p>Payment Method</p>
										<img src="assets/images/visa.png" alt="img" class="img-fluid">
									</div>
									<div class="field-area">
										<input type="text" placeholder="Full Name" class="userPro-formField" required="required">
										<input type="number" placeholder="Card Number" class="userPro-formField"
										oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "14">
									</div>
									<div class="row">
										<div class="col-12 col-md-4 col-lg-5">
											<input type="number" placeholder="Expiry Date" class="userPro-formField"
											oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "2" pattern="([0-9]{2}[/]?){2}">
										</div>
										<div class="col-12 col-md-4 col-lg-3 p-0">
											<input type="number" placeholder="Year" class="userPro-formField" 
											oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4">
										</div>
										<div class="col-12 col-md-4 col-lg-4">
											<input type="number" name="Number" placeholder="Security Code" class="userPro-formField"
											oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "4">
										</div>
									</div>
									<div class="profileForm-button">
										<button type="submit" class="site-btn">Submit Now</button>
									</div>
								</form>
							</div>
							<!-- End -->
						</div>
				</div>
		</div>
	</div>
</section>



<?php include 'includes/footer.php';?>
