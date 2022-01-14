// Navigation Slide Bar JS
$('.menu-toggle').click(function(){
	$('.slide-menu').toggleClass('show');
});

// Header Icons Changer Js
$(document).ready(function(){
	var pageURL = $(location).attr("href");

	if(pageURL == "https://myprojectstaging.com/html/center-spoon/index.php"){
		// alert("URL is matched");
		$('.showHide-icons').hide();
		$('.login-hide').show();
	}
	else{
		$('.showHide-icons').show();
		$('.login-hide').hide();
	}
});
// Full Screen Search Bar Js
function openSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "block";
}
function closeSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "none";
}

// User DropDown Js
$('.user-icon').click(function(){
	$('.user-dropdown').toggleClass('show');
});


// Feature Slider Js
$('.feature-slider').owlCarousel({
	loop:true,
	margin:15,
	nav:false,
	dots:false,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		600:{
			items:3
		},
		1000:{
			items:4
		},
		1100:{
			items:5
		}
	}
}); 

// Feature Slide Like / Unlike Js
$(document).ready(function(){
	$(".unlike").click(function(){
		if($(this).hasClass("unlike")){
			$(this).removeClass("unlike");
			$(this).addClass("liked");
			var value = parseInt($(".item-count").text(), 10) + 1;
			$(".item-count").text(value);
			$(this).html('<i class="fas fa-heart" aria-hidden="true"></i>');
		}
		else{
			$(this).removeClass("liked");
			var value = parseInt($(".item-count").text(), 10) - 1;
			$(".item-count").text(value);
			$(this).addClass("unlike");
			$(this).html('<i class="far fa-heart" aria-hidden="true"></i>');
			
		}
	});
});


// Categories Slider Js
$('.categories-slider').owlCarousel({
	loop:true,
	margin:15,
	nav:false,
	dots:false,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:4
		}
	}
});

// New-Items Slider Js
$('.new-Items-slider').owlCarousel({
	loop:true,
	margin:15,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		600:{
			items:3
		},
		1000:{
			items:4
		},
		1100:{
			items:5
		}
	}
});

//Calander Js 
$(function () {
  $(".datepicker-btn").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  });
});

// topCuisines-slider Js
$('.topCuisines-slider').owlCarousel({
	loop:true,
	margin:10,
	nav:false,
	dots:false,
	responsive:{
		0:{
			items:1
		},
		600:{
			items:3
		},
		1000:{
			items:4
		},
		1100:{
			items:5
		}
	}
});

// Local Favorites Slider Js
$('.localFavorites-slider').owlCarousel({
	loop:true,
	margin:15,
	nav:false,
	dots:false,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
	responsive:{
		0:{
			items:1
		},
		576:{
			items:2
		},
		600:{
			items:3
		},
		1000:{
			items:4
		},
		1100:{
			items:5
		}
	}
}); 

// Restaurant Nearby Slider Js
$('.rest-nearby-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
	dots:false,
	autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        },
		1100:{
			items:5
		}
    }
});

//PRODUCT QUANTITY SELECT INPUT
$(document).ready(function(){
	$('.count').prop('disabled', false);
	$(document).on('click','.plus',function(){
		$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) + 1 );
	});
	$(document).on('click','.minus',function(){
		$(this).siblings('.count').val(parseInt($(this).siblings('.count').val()) - 1 );
		if ($(this).siblings('.count').val() == 0) {
			$(this).siblings('.count').val(1);
		}
	});
});

// LOGIN SIGNUP FORM
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const login_wrap = document.getElementById('login-modal-wrap');

signUpButton.addEventListener('click', () => {
	login_wrap.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	login_wrap.classList.remove("right-panel-active");
});

// Filter Button Js
$('.filer-button').click(function(){
	$('.range-input').toggleClass('show');
})

// Location Range Bar Js
let rangeInput = document.querySelector(".range-input input");
let rangeValue = document.querySelector(".range-input .value div");

let  start = parseFloat(rangeInput.min);
let end = parseFloat(rangeInput.max);
let step = parseFloat(rangeInput.step);

for(let i=start;i<=end;i+=step){
  rangeValue.innerHTML += '<div>'+i+' '+'mil'+'</div>';
}
rangeInput.addEventListener("input",function(){
  let top = parseFloat(rangeInput.value)/step * -40;
  rangeValue.style.marginTop = top+"px";
});


// Invite Guests Modal Js
const popups = document.getElementById('popup-wrapper2');
const btns = document.getElementById("popup-btn2");
const spans = document.getElementById("close2");
if(btns){
	btns.addEventListener('click', () => {
		popups.classList.add('show');
	});
}
if(spans){
	spans.addEventListener('click', () => {
		popups.classList.remove('show');
	});
}
window.onclick = function(event) {
	if (event.target == popups) {
		popups.classList.remove('show');
	}
} 

// Onclick Focus Js
$('#add-comment').click(function(){
	$('#add-comment-area').focus();
})


// // Group Table Form Js
var currentTab = 0;
showTab(currentTab);

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("step-tab");
  x[n].style.display = "inline";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("submit-Btn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
  	document.getElementById("submit-Btn").style.display = "inline";
  	document.getElementById("nextBtn").style.display = "none";
    // document.getElementById("nextBtn").innerHTML = "Submit";
    // document.getElementById("nextBtn").type = "submit";
  } else {
  	document.getElementById("nextBtn").style.display = "inline";
  	document.getElementById("submit-Btn").style.display = "none";
    // document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("step-tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("gt-Form").style.display = "none";
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("step-tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
