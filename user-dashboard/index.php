<?php include 'includes/header.php';?>
<section class="userDashboard-sec">
	<aside>
		<div class="aside-top">
			<div class="user-view">
				<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
				<p>Marie Martin
					<span>User</span>
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

				<button class="nav-link" id="v-pills-ambassador-tab" data-bs-toggle="pill" data-bs-target="#v-pills-ambassador" type="button" role="tab" aria-controls="v-pills-ambassador" aria-selected="false"><span><i class="fas fa-award"></i></span> Become a Ambassador</button>
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
								<p>User Profile <span>Lorem ipsum dolor sit amet, consectetur</span></p>
							</div>
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
								<div class="field-area">
									<input type="text" placeholder="Name" class="userPro-formField">
									<input type="email" placeholder="Email Address" class="userPro-formField">
									<input type="text" placeholder="Address" class="userPro-formField">
									<input type="password" placeholder="Password" class="userPro-formField">
									<input type="password" placeholder="Re-Password" class="userPro-formField">
								</div>
								<div class="profileForm-button">
									<button type="submit" class="site-btn">Submit Now</button>
								</div>
							</form>
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
								<div class="showmore">
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

				<div class="tab-pane fade" id="v-pills-ambassador" role="tabpanel" aria-labelledby="v-pills-ambassador-tab">
					<div class="container">
						<div class="dashboard-tabWrap">
							<div class="dashboardTab-head">
								<p>Become a Ambassador</p>
							</div>
							<div class="ambassador-wrap">
								<div class="row">
									<div class="col-12 col-md-9 col-lg-9">
										<div class="ambassador-content">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec finibus erat, vitae elementum ipsum. In molestie gravida erat non consequat. Mauris condimentum, velit aliquet pellentesque vulputate, leo justo elementum enim, et ullamcorper quam turpis eget tellus. Cras at tempor velit. Mauris mattis accumsan posuere. Suspendisse ac aliquet est, et tincidunt risus. Nulla non nisl ex. In eleifend malesuada faucibus. Duis sed posuere urna. Sed pulvinar, neque ut finibus elementum, sem mauris tincidunt nisl, eget interdum risus eros a nisl.</p>
											<p class="my-4"><strong>Neque porro quisquam est qui dolorem ipsum</strong></p>
											<ol>
												<li>Vestibulum eget commodo sapien. Nam volutpat sodales dapibus. Sed aliquam ac dolor sed accumsan.</li>
												<li>Vestibulum eget commodo sapien. Nam volutpat sodales dapibus. Sed aliquam ac dolor sed accumsan.Vestibulum eget commodo.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor.</li>
												<li>Aliquam pulvinar ornare diam eget rutrum. Proin vel augue vitae sem pharetra viverra.</li>
												<li>Aliquam pulvinar ornare diam eget rutrum. Proin vel augue vitae sem pharetra viverr liquam pulvinar ornare.</li>
												<li>Vestibulum eget commodo sapien. Nam volutpat sodales dapibus. Sed aliquam ac dolor sed accumsan.Vestibulum eget commodo.</li>
												<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
												<li>Aliquam pulvinar ornare diam eget rutrum. Proin vel augue vitae sem pharetra viverra.</li>
												<li>Aliquam pulvinar ornare diam eget rutrum. Proin vel augue vitae sem pharetra viverr liquam pulvinar ornare.</li>
											</ol>
											<form>
												<input type="checkbox" id="accept-check">
												<label for="accept-check">I do Not Accept The Terms & Conditions.</label>
												<div class="apply-btn mt-4">
													<button type="submit" class="site-btn">Apply Now</button>
												</div>
											</form>
										</div>
									</div>
									<div class="col-12 col-md-3 col-lg-3">
										<div class="ambassador-image">
											<img src="assets/images/badge.png" alt="img" class="img-fluid">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-4 col-lg-4">
								<div class="progress-box">
									<div class="dashboardTab-head">
										<p>Lorem Ipsum?</p>
									</div>
									<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur vived not only five centuries, but also the leap into electronic typ esetting, remaining essentially unchanged.</p>
									<div class="ambass-progressBar mt-3">
										<div class="bar-range">
											<span>0%</span>
											<span>100%</span>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%">
												<span class="title">80%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<div class="progress-box">
									<div class="dashboardTab-head">
										<p>Lorem Ipsum?</p>
									</div>
									<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur vived not only five centuries, but also the leap into electronic typ esetting, remaining essentially unchanged.</p>
									<div class="ambass-progressBar mt-3">
										<div class="bar-range">
											<span>0%</span>
											<span>100%</span>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%">
												<span class="title">80%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-4 col-lg-4">
								<div class="progress-box">
									<div class="dashboardTab-head">
										<p>Lorem Ipsum?</p>
									</div>
									<p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur vived not only five centuries, but also the leap into electronic typ esetting, remaining essentially unchanged.</p>
									<div class="ambass-progressBar mt-3">
										<div class="bar-range">
											<span>0%</span>
											<span>100%</span>
										</div>
										<div class="progress">
											<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80" style="width: 80%">
												<span class="title">80%</span>
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
</section>



<?php include 'includes/footer.php';?>
