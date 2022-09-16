/*loading*/

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
});

/*nav navigation*/
$('#switch').click(function(){
  $(".navcontainer").stop().fadeToggle(1000);
  $('.navcontainer ul li').children().toggleClass('fadein')
  $(this).text($(this).text() == 'Menu' ? 'Close' : 'Menu');
});



/*navbutton reverse*/
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= $('#navreverse').offset().top) {
    $('button').addClass('reverse');
  } else {
    $('button').removeClass('reverse');
  }
});

/*isinviewport*/
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
