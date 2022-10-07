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
  $('.nccolor').addClass('reverse');
});
$('.navbutton').hover(function(){
  $('.nccolor').toggleClass('hnav');
});

// nav reverse //
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= $('#navchange').offset().top) {
    $('.nccolor').addClass('reverse');
    $('.ihlogo').addClass('reverse-ih');
    $('.pc').fadeOut(500);
  } else {
    $('.nccolor').removeClass('reverse');
    $('.ihlogo').removeClass('reverse-ih');
    $('.pc').fadeIn(1000);
  }
});

// hover method
$('.circle').hover(function() {
  $('.circle').stop(true, false).toggleClass('cpassiv');
  $(this).stop(true, false).toggleClass('chover');
});

// hover footer nav
$('.fn-three').hover(function() {
  var hoverfn = $(this).attr('data-toggle');
  $(hoverfn).toggleClass('chover');
});


// accordion 
$('.accTitle').click(function() {
  $accContent = $(this).next('.accList');
  $('.accList').not($accContent).slideUp(400);
  $accContent.stop(true, false).slideToggle(400);
});

// more
$('.morebutton').click(function() {
  var seemore = $(this).attr('data-toggle');
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

// impressum

$('.impressum').click(function() {
  var totoggle = $(this).attr("data-toggle");
  $(totoggle).slideToggle(500);
  $(totoggle).next().hide();

  if ($(totoggle).is(":visible")) {
      $('html,body').animate({scrollTop:$(totoggle).offset().top}, 1000);
  }
});