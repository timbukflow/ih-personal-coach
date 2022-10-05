//loading//
/*
let i01 = document.querySelector('.i01');
let h02 = document.querySelector('.h02');
let h03 = document.querySelector('.h03');
let loader = document.querySelector('.loader');

window.addEventListener('DOMContentLoaded', ()=>{
  
    setTimeout(() => {

        setTimeout(()=>{
            i01.classList.add('logofade', 'disti01');
            h02.classList.add('logofade', 'disti02');
            h03.classList.add('logofade', 'form01');
        },1000)

        setTimeout(()=>{
            loader.classList.add('logofade', 'fade');
        }, 2500)

    }) 
});*/

// nav  //
$('.navbutton').click(function(){
  $('.navcontainer').stop().fadeToggle(1000);
  $('.navcontainer ul li').children().toggleClass('fadein')
});

// nav reverse //
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= $('#navchange').offset().top) {
    $('.nccolor').addClass('reverse');
  } else {
    $('.nccolor').removeClass('reverse');
  }
});

// isinviewport //
var isInViewport = function (elem) {
	var distance = elem.getBoundingClientRect();
	return (
		distance.top >= 0 &&
		distance.left >= 0 &&
		distance.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		distance.right <= (window.innerWidth || document.documentElement.clientWidth)
	);
};

var fadeinout = document.querySelector('.fadeinout');
var circle = document.querySelectorAll('.circle');
var circleChild = document.querySelectorAll('.circle h2');


window.addEventListener('scroll', function (event) {
	if (isInViewport(fadeinout)) {
        circle.forEach((circle) => {
          circle.classList.add('animationC');
        });
        circleChild.forEach((circleChild) => {
          circleChild.classList.add('animationT');
        });
	} else {
        circle.forEach((circle) => {
          circle.classList.remove('animationC');
        });
        circleChild.forEach((circleChild) => {
          circleChild.classList.remove('animationT');
        });
  }  
}, false);

// accordion 
$('.accTitle').click(function() {
  $accContent = $(this).next('.accList');
  $('.accList').not($accContent).slideUp(400);
  $accContent.stop(true, false).slideToggle(400);
});

// more
$('.morebutton').click(function() {
  var seemore = $(this).attr("data-toggle");
  $(seemore).slideToggle(500);
  $(this).children('img').toggleClass('accX');

  if ($(seemore).is(":visible")) {
      $('html,body').animate({scrollTop:$(seemore).offset().top}, 1000);
  }
});

// hover
$('.supplus').hover(function() {
  var suppmore = $(this).attr("data-toggle");
  $(suppmore).stop(true, false).fadeToggle('slow');
  $(this).children('img').toggleClass('accX');
});
