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
		600:{
			items:2
		},
		1000:{
			items:3
		},
		1100:{
			items:4
		}
	}
}); 
// Local Favorites Slider Js
$('.localFavorites-slider').owlCarousel({
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
			items:2
		},
		1000:{
			items:4
		}
	}
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
		}
	}
});

// User DropDown Js
$('.user-icon').click(function(){
	$('.user-dropdown').toggleClass('show');
});

// Add Review Buttton Js
$('#addReview-btn').click(function(){
	$('#addReview').show();
	$('#reviews').hide();
})

// Rating Stars Js
$(document).ready(function(){
	$(".rate-icon").click(function(){
		if($(this).hasClass("rate-icon")){
			$(this).removeClass("rate-icon");
			$(this).addClass("liked");
			$(this).html('<i class="fas fa-star"></i>').css("color", "#e21d26" , "font-size", "20px" , "margin", "0 2px");
		}
		else{
			$(this).removeClass("liked");
			$(this).addClass("rate-icon");
			$(this).html('<i class="far fa-star"></i>').css("color", "#e21d26");
			
		}
	});
});

// File Upload Js Start

$("#demo-upload2").dropzone({ url: "/file/post" });
var dropzone = new Dropzone('#demo-upload2', {
  previewTemplate: document.querySelector('#preview-template2').innerHTML,
  parallelUploads: 2,
  thumbnailHeight: 120,
  thumbnailWidth: 120,
  maxFilesize: 3,
  maxFiles: 1,
  filesizeBase: 1000,
  thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); });
    }
  }

});

// Input Type Number Js

$('form').on('blur', 'input[type=number]', function (e) {
	$(this).off('wheel.disableScroll')
});



// File Upload2 Js Start
$("#demo-upload").dropzone({ url: "/file/post" });
var dropzone = new Dropzone('#demo-upload', {
  previewTemplate: document.querySelector('#preview-template').innerHTML,
  parallelUploads: 2,
  thumbnailHeight: 120,
  thumbnailWidth: 120,
  maxFilesize: 3,
  maxFiles: 1,
  filesizeBase: 1000,
  thumbnail: function(file, dataUrl) {
    if (file.previewElement) {
      file.previewElement.classList.remove("dz-file-preview");
      var images = file.previewElement.querySelectorAll("[data-dz-thumbnail]");
      for (var i = 0; i < images.length; i++) {
        var thumbnailElement = images[i];
        thumbnailElement.alt = file.name;
        thumbnailElement.src = dataUrl;
      }
      setTimeout(function() { file.previewElement.classList.add("dz-image-preview"); });
    }
  }

});

// End

// Full Screen Search Bar Js
function openSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "block";
}
function closeSearchHero() {
	document.getElementById("FullScreenOverlay").style.display = "none";
}


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


	//Calander Js 
$(function () {
  $(".datepicker-btn").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  });
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
