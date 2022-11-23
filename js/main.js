//loading//

let i01 = document.querySelector('.i01');
let m01 = document.querySelector('.m01');
let body = document.querySelector('body');
let loader = document.querySelector('.loader');

window.addEventListener('DOMContentLoaded', ()=>{
  
    setTimeout(() => {
      
      setTimeout(()=>{
        body.classList.add('bnscroll')
        i01.classList.add('logofade');
        m01.classList.add('logofade');
      },0)

      setTimeout(()=>{
          $(loader).fadeOut(1000);
          body.classList.remove('bnscroll')
      }, 1500)
    }) 
});

// nav  //
$('.navbutton').click(function(){
  $('.navcontainer').stop().fadeToggle(1000);
  $('.nccolor').addClass('reverse');
  body.classList.toggle('bnscroll')
});
$('.navbutton').hover(function(){
  $('.nccolor').toggleClass('hnav');
});

// nav reverse //
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= $('#navchange').offset().top) {
    $('.nccolor').addClass('reverse');
    $('.langbutton').addClass('reverse-font');
  } else {
    $('.nccolor').removeClass('reverse');
    $('.langbutton').removeClass('reverse-font');
  }
});

// hover method
$('.circle').hover(function() {
  $('.circle').stop(true, false).toggleClass('cpassiv');
  $(this).stop(true, false).toggleClass('chover');
});
// click analysis
$("#acbutton").click(function() {
  $('html, body').animate({
      scrollTop: $("#analysis").offset().top - 150
  }, 2000);
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
$('.supplus').click(function() {
  var suppmore = $(this).attr("data-toggle");
  $('.supinfo').fadeOut(1000)
  $(suppmore).stop(true, false).fadeIn(1000);
});
$('.supinfo').click(function() {
  $('.supinfo').fadeOut(1000)
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