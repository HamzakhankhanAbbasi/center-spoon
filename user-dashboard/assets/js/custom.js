// User DropDown Js
$('.user-icon').click(function(){
  $('.user-dropdown').toggleClass('show');
});

// Load More Btn Js
$('.loadMore-btn').click(function(){
  $('.showmore').toggleClass('show');
})


// File Upload Js Start
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

	//Calander Js 
  $(function () {
    $(".datepicker-btn").datepicker({ 
      autoclose: true, 
      todayHighlight: true
    });
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

