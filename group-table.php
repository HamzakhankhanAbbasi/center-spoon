<?php include 'includes/header.php';?>
<div class="groupTable-wrap">
<!-- Index Sec1 -->
<section class="index-sec1">
	<div class="container">
		<div class="banner-content">
			<h3>Find Food You Crave. Get Nutrition You Need.</h3>
		</div>
	</div>
	<a href="#sec2" class="bottom-arrow"><i class="fas fa-chevron-down"></i></a>
</section>

<!-- Filter Section -->
<section class="filter-sec">
	<div class="container">
		<div class="filter-innerWrap">
			<div class="rest-location">
				<i class="fas fa-map-marker-alt"></i> <span>St. Lous</span>
			</div>
			<!-- Location Range Bar Start -->
			<div class="range-input">
				<input type="range" min='0' max = "100" value="0" step="5">
				<div class="value">
					<div></div>
				</div>
			</div> 
			<!-- End -->

			<div class="filer-button">
				<i class="fas fa-sliders-h"></i>
			</div>
		</div>
	</div>
</section>

<!-- Group Table Form Section Start -->
<section class="groupTable-sec">
	<div class="container">
		<form id="gt-Form" novalidate>
			<div class="row">
				<div class="gt-steps">
					<div class="step step1">Create A Group Table <span class="shape1"><i class="fas fa-chevron-right"></i></span></div>
					<div class="step step2">Group Deals And Perks <span class="shape2"><i class="fas fa-chevron-right"></i></span></div>
					<div class="step step3">Request Group Deals And Perks <span class="shape3"><i class="fas fa-chevron-right"></i></span></div>
					<div class="step step4">My Table</div>
				</div>
			</div>
			<div class="steps-innrerWrap">
			<div class="step-tab">
				<div class="steps-Wrap">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="input-fields">
								<input type="text" class="input-field" placeholder="Enter Name">
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<div class="input-fields">
								<input type="email" class="input-field" placeholder="Enter Email">
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<div class="input-fields">
								<input type="tel" placeholder="Enter Phone Number" class="input-field" maxlength="11" pattern="[0-9]" required="required">
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6">
							<div class="input-fields date-box">
								<div class="input-field date-field">Date  ||  <span>Tuesday,  14 - JULY - 2021</span></div>
								<div class="input-field time-field">Time  ||  <span>12 : 00 : 00</span></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="step-tab">
				<div class="steps-Wrap stepTwo-wrap">
					<div class="row">
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal1.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>The Seafood</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal1">
											<label for="deal1"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:theseafood@gmail.com"><span><i class="fas fa-envelope"></i></span> theseafood@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal2.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>Hard Rock Cafe</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal2">
											<label for="deal2"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:hardrockcafe@gmail.com"><span><i class="fas fa-envelope"></i></span> hardrockcafe@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal3.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>Ches’s Fish & Chips</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal3">
											<label for="deal3"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:chessfish@gmail.com"><span><i class="fas fa-envelope"></i></span> chessfish@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal4.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>Ok Dinner Resturant</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal4">
											<label for="deal4"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:okdinner@gmail.com"><span><i class="fas fa-envelope"></i></span> okdinner@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal1.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>The Seafood</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal5">
											<label for="deal5"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:theseafood@gmail.com"><span><i class="fas fa-envelope"></i></span> theseafood@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-lg-6 mb-4">
							<div class="deal-box">
								<div class="image">
									<img src="assets/images/deal2.jpg" alt="img" class="img-fluid">
								</div>
								<div class="details">
									<div class="head">
										<p>Hard Rock Cafe</p>
										<div class="deal-checkbox">
											<input type="checkbox" id="deal6">
											<label for="deal6"></label>
										</div>
									</div>
									<p class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tem
										por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
									<div class="bottom">
										<a href="mailto:hardrockcafe@gmail.com"><span><i class="fas fa-envelope"></i></span> hardrockcafe@gmail.com</a>
										<a href="tel:(789) 456 9875" class="mx-2"><span><i class="fas fa-phone-alt"></i></span> (789) 456 9875</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="step-tab">
				<div class="steps-Wrap">
					<div class="step3-wrap">
						<div class="row">
							<div class="col-12 col-md-3 col-lg-3">
								<div class="step3-image">
									<img src="assets/images/step3-img1.jpg" alt="img" class="img-fluid">
								</div>
							</div>
							<div class="col-12 col-md-9 col-lg-9">
								<div class="step3-details">
									<p class="title">The Seafood</p>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lacinia lectus tellus, a ornare odio dictum eget. Donec varius, diam nec bibendum posuere, turpis dui mattis eros, vel luctus quam ipsum fringilla purus. Phasellus dapibus eget nisl in laoreet. Nam dictum aliquet nisi, id ultricies diam efficitur sit amet. Praesent accumsan neque quis metus malesuada, malesuada pretium ligula maximus. Fusce pharetra, ipsum ullamcorper efficitur gravida, massa risus molestie est, sit amet aliquet ligula sapien in massa. Integer at dapibus purus. Donec suscipit pretium dolor ac pulvinar. Suspendisse dapibus nisi ut fringilla accumsan. Pellentesque euismod lacus non aliquam hendrerit. In consequat feugiat molestie. Nunc at nulla nec augue consectetur lobortis sit amet feugiat nibh.Etiam elementum imperdiet lacus, ac hendrerit lacus condimentum eget. Sed at commodo arcu. Curabitur dapibus velit sed fermentum fermentum. Donec hendrerit massa vel ligula cursus .</p>
									<div class="bottom">
										<div class="contact-links">
											<a href="mailto:theseafood@gmail.com">
												<span><i class="fas fa-envelope"></i></span> 
												theseafood@gmail.com
											</a>
											<a href="tel:(789) 456 9875" class="mx-2">
												<span><i class="fas fa-phone-alt"></i></span> 
												(789) 456 9875
											</a>
										</div>
										<button type="button" class="site-btn">Request</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="referalEmail-area">
						<div class="row">
							<div class="col-12 col-md-6 col-lg-6 my-3">
								<input type="checkbox" id="referal-check">
								<label for="referal-check" class="mx-2">Make Private On Profile</label>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="step-tab">
				<div class="steps-Wrap">
					<div class="step4-image">
						<img src="assets/images/step4-image.jpg" alt="img" class="img-fluid">
					</div>
					<div class="step3-wrap">
						<div class="row">
							<div class="col-12 col-md-12 col-lg-12">
								<div class="gt-preview-area">
									<div class="date"><p>MAY <span>06</span></p></div>
									<div class="gt-detail">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
										<span>Privte - Event - By - Jay Bradly 2021</span>
									</div>
								</div>
							</div>
						</div>
						<div class="second-bar">
							<ul>
								<li><img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon"></li>
								<li class="location-btn">
									<a href="javascript:void(0)">
										<span><i class="fas fa-map-marker-alt"></i></span>
										Location
									</a>
									<span class="tooltip-box">Your Current Location</span>
								</li>
								<li>
									<a href="javascript:void(0)" id="popup-btn2">
										<span><i class="fas fa-user-plus"></i></span>
										Invite Guests
									</a>
								</li>
								<li>
									<a href="#add-comment-area" id="add-comment">
										<span><i class="fas fa-comment-dots"></i></span>
										Add Comments
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="step4-title my-3">
						<p>Commnets</p>
					</div>
					<div class="step3-wrap">
						<div class="commentsBox-wrap">
							<!-- Sender Comment Start -->
							<div class="commentBox">
								<!-- Comment Title Area Start -->
								<div class="commnet-titleBox">
									<div class="pro-image">
										<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
									</div>
									<div class="comment-title">
										<p>Marie Jeson</p>
										<span>About 2 Days Ago</span>
									</div>	
								</div>
								<!-- comment Content Area Start -->
								<div class="commentText-area">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
								</div>
							</div>
							<!-- Receiver Comment Start -->
							<div class="commentBox reciver-commentBox">
								<!-- Comment Title Area Start -->
								<div class="commnet-titleBox">
									<div class="pro-image">
										<img src="assets/images/receiver-icon.jpg" alt="img" class="img-fluid member-icon">
									</div>
									<div class="comment-title">
										<p>Will addson</p>
										<span>About 1 Days Ago</span>
									</div>	
								</div>
								<!-- comment Content Area Start -->
								<div class="commentText-area">
									<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
								</div>
							</div>
						</div>
						<div class="addComment-box">
							<!-- Comment Title Area Start -->
							<div class="commnet-titleBox">
								<div class="pro-image">
									<img src="assets/images/member-icon.jpg" alt="img" class="img-fluid member-icon">
								</div>
								<div class="comment-title">
									<p>Marie Jeson</p>
									<span>About 2 Days Ago</span>
								</div>	
							</div>
							<!-- Add Comment Field Start -->
							<div class="addComment-area">
								<textarea rows="2" placeholder="Write A Comments...." id="add-comment-area"></textarea>
								<button type="submit">Send <span><i class="fas fa-paper-plane mx-1"></i></span></button>
							</div>
						</div>
					</div>
				</div>
			</div>

			
			<div class="gt-buttons" style="overflow:auto;">
				<div style="float:right;">
					<button type="button" class="site-btn" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
					<button type="button" class="site-btn" id="nextBtn" onclick="nextPrev(1)">Next</button>
					<input type="submit" class="site-btn" id="submit-Btn" value="Submit">
				</div>
			</div>

			
			</div>
		</form>
	</div>
</section>

</div>

<?php include 'includes/footer.php';?>