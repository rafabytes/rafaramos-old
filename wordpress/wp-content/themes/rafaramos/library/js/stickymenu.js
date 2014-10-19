var menu = $('.navbar');
var offSet = 550;

function scroll() {
  if ($(window).scrollTop() >= offSet) {
    $('.navbar').addClass('sticky');
  } 
  if ($(window).scrollTop() < offSet) {
    $('.navbar').removeClass('sticky');
    $('li:first').removeClass('active');
  }
}

document.onscroll = scroll;