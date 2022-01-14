<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4 mb-4">
				<div class="footer-col1">
					<div class="footer-logo mb-4">
						<a href="index.php"><img src="assets/images/footer-logo.png" alt="logo" class="img-fluid"></a>
					</div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
				</div>
			</div>
			<div class="col-12 col-sm-3 col-md-2 col-lg-2 mb-4">
				<div class="footer-col2">
					<p class="links-heading">Quick Links</p>
					<ul>
						<li><a href="javascript:void(0)">About Us</a></li>
						<li><a href="javascript:void(0)">Company Info</a></li>
						<li><a href="javascript:void(0)">Blog</a></li>
						<li><a href="javascript:void(0)">Contact Us</a></li>
						<li><a href="javascript:void(0)">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-3 col-md-2 col-lg-2 mb-4">
				<div class="footer-col2">
					<p class="links-heading">Helpful Links</p>
					<ul>
						<li><a href="javascript:void(0)">Add Your Resturant</a></li>
						<li><a href="javascript:void(0)">Resturant Sign Up</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-3 col-md-2 col-lg-2 mb-4">
				<div class="footer-col2">
					<p class="links-heading">Top Cities</p>
					<ul>
						<li><a href="javascript:void(0)">St.Louis</a></li>
						<li><a href="javascript:void(0)">St.Charles</a></li>
						<li><a href="javascript:void(0)">Chesterfield</a></li>
						<li><a href="javascript:void(0)">Ofallon</a></li>
						<li><a href="javascript:void(0)">Kirkwood</a></li>
						<li><a href="javascript:void(0)">St.Peters</a></li>
						<li><a href="javascript:void(0)">Wentzville</a></li>
					</ul>
				</div>
			</div>
			<div class="col-12 col-sm-3 col-md-2 col-lg-2">
				<div class="footer-col2">
					<p class="links-heading">Categories</p>
					<ul>
						<li><a href="javascript:void(0)">New Items</a></li>
						<li><a href="javascript:void(0)">Top Cusines</a></li>
						<li><a href="javascript:void(0)">Live Ding Tour</a></li>
						<li><a href="javascript:void(0)">Featured Items</a></li>
						<li><a href="javascript:void(0)">Local Favorite s</a></li>
						<li><a href="javascript:void(0)">All Resturants</a></li>
						<li><a href="javascript:void(0)">Meal Under 600 Cal</a></li>
						<li><a href="javascript:void(0)">Customer Finds</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>		
</footer>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<p>Copyright © 2021 Center Spoon. All Rights Reserved.</p>
			</div>
			<div class="col-12 col-sm-6 col-md-6 col-lg-6">
				<div class="right">
					<span>Follow Us:</span>
					<a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
					<a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
					<a href="javascript:void(0)"><i class="fab fa-facebook-messenger"></i></a>
					<a href="javascript:void(0)"><i class="fab fa-whatsapp"></i></a>
					<a href="javascript:void(0)"><i class="fab fa-twitter"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Login/Signup POPUP MODAL Start -->
<div class="modal fade login-signup-modal user-modals" id="login-signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="login-modal" id="login-modal-wrap">
					<div class="form-container sign-up-container">
						<form action="#">
							<h1>Create Account</h1>
							<div class="social-container">
								<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
								<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<span>or use your email for registration</span>
							<input type="text" placeholder="Name" />
							<input type="email" placeholder="Email" />
							<input type="password" placeholder="Password" />
							<button class="submit" type="submit">Sign Up</button>
						</form>
					</div>
					<div class="form-container sign-in-container">
						<form action="#">
							<h1>Sign in</h1>
							<div class="social-container">
								<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
								<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
								<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
							</div>
							<span>or use your account</span>
							<input type="email" placeholder="Email" />
							<input type="password" placeholder="Password" />
							<a href="#">Forgot your password?</a>
							<button class="submit" type="submit">Sign In</button>
						</form>
					</div>
					<div class="overlay-container">
						<div class="overlay">
							<div class="overlay-panel overlay-left">
								<div class="modal-logo"></div>
								<h1>Welcome Back!</h1>
								<p>To keep connected with us please login with your personal info</p>
								<button class="slide-button submit" id="signIn">Sign In</button>
							</div>
							<div class="overlay-panel overlay-right">
								<div class="modal-logo"></div>
								<h1>Hello, Friend!</h1>
								<p>Enter your details and start journey with us</p>
								<button class="slide-button submit" id="signUp">Sign Up</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> 
<!-- Login/Signup POPUP MODAL End -->

<!-- Invite Guests Modal Start -->
<div id="popup-wrapper2" class="popup-container">
        <div class="popup-content">
            <span id="close2">×</span>
            <form class="quotePopup" action="#">
            	<div class="row">
                    <input type="text" name="fancy-text" id="name">
                    <label for="name">Name</label>
                </div>
                <div class="row">
                    <input type="email" name="fancy-text" id="email">
                    <label for="email">Email</label>
                </div>
       			<div class="modal-btn">
       				<button type="submit" class="site-btn" tabindex="0">Submit</button>
       			</div>
            </form>
        </div>
    </div>
<!-- End -->


<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
<script src="assets/js/custom.js"></script> 


</body>
</html>
