//loader
$(function() {
  $('.loader-container').fadeOut(1000);
})

// sidebar menu toggle

$(document).on('click', '#sidebar_toggler', function() {
  $('.sidebar-wrapper').addClass('sidebar-show');
   $('.mob-overlay').addClass('active');
});

$(document).on('click', '#burgerBtn', function() {
  $('.sidebar-wrapper').removeClass('sidebar-show');
  $('.mob-overlay').removeClass('active');
});

$(document).on('click', '.mob-overlay', function() {
  $('.sidebar-wrapper').removeClass('sidebar-show');
  $('.mob-overlay').removeClass('active');
});



// scroll top button
$(function () {

  var scrollButton = $('.go-top');

  $(window).scroll(function () {

    if($(window).scrollTop() >= 500) {
      scrollButton.show();
    }else {
      scrollButton.hide();
    }
  });

  scrollButton.click(function () {
    $('html, body').animate({scrollTop: 0});
  })
});

/*** started modal   ***/

$('.show__started__modal').click(function () {
   $('.startedModal').addClass('mfade__in');
   $('body').addClass('overflow__hidden')
})

$('.close__modal').click(function () {
  $(this).parent('.my__modal').removeClass('mfade__in');
  $(this).parent('.reportModal').removeClass('mfade__in');
  $(this).parent('.terms__modal').removeClass('mfade__in');
   $('body').removeClass('overflow__hidden');
 })
 
$('.my__modal').click(function () {
  $(this).removeClass('mfade__in');
   $('body').removeClass('overflow__hidden')
 })

 $('.inner__modal').click(function (e) {
  e.stopPropagation();
 })

/*** new restaurant modal   ***/

$('.show__rest__modal').click(function () {
  $('.startedModal').removeClass('mfade__in');
  $('.restModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
})


/*** pro restaurant modal   ***/

$('.show__pro__modal').click(function () {
  $('.startedModal').removeClass('mfade__in');
  $('.proModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
})

/*** second pro restaurant modal   ***/

$('.open__sec__proModal').click(function () {
  $('.proModal').removeClass('mfade__in');
  $('.sec__proModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
})

/*** code modal   ***/

$('.show__code__modal').click(function () {
  $('.restModal').removeClass('mfade__in');
  $('.sec__proModal').removeClass('mfade__in');
  $('.codeModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
})

$(document).ready(function(){
  $(".code__input").keyup(function(){
    $(this).blur();
    $(this).addClass('border__none');
    $(this).next().focus();
  });
});

/*** confirm modal   ***/

$('.show__confirm__modal').click(function () {
  $('.codeModal').removeClass('mfade__in');
  $('.sec__proModal').removeClass('mfade__in');
  $('.confirmModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
});

$('input.check__input').on('change', function (e) {
  if ($('input.check__input:checked').length > 3) {
      $(this).prop('checked', false);
      alert("allowed only 2 choice for your kitchen");
  }
});

/*** terms & conditions modal   ***/
$('.openTerms__modal').click(function () {
  $('.terms__modal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
});

$('.terms__overlay').click(function () {
  $('.terms__modal').removeClass('mfade__in');
  $('body').removeClass('overflow__hidden');
});

/*** video modal   ***/
$('.play__video').click(function () {
  $('.videoModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
});
// dashboard nice select

$(document).ready(function() {
  $('select.nice-select').niceSelect();
});


// dashboard datepicker
$(function() {
  $('.datepicker').datepicker();
});

$( "#calender__icon" ).click( function() {
  $('.datepicker-container').removeClass('datepicker-hide')
});

// dashboard datepicker
// $( ".contacted_span" ).click( function(e) {
//   e.stopPropagation();
//   $(this).addClass('active__color');
//   $(this).text('contacted');
// });

 //dashboard datepicker
 $( ".collapse__table" ).click( function() {
  $(this).siblings('.collapsed__div').slideToggle('');
 });

// jobs page form
$(document).ready(function(){
  $(".register__form .form-control").keyup(function(){
    $(this).prev().addClass('relative__label');
  });
});


// jobs textarea
$(document).ready(function(){
  var myText =  $(".jobs__textarea");
  var myResult = $(".number__increase");

  myResult.text(0);

  $(".jobs__textarea").keyup(function(){
    var textLength = myText.val().length;
      myResult.text(textLength);
  });
})

// jobs select

  $("#dashboard__select").on('change', function(){

    var selectedValue = $(this).val();

    if(selectedValue == 'sales'){
      $('.option__none').fadeIn();
    }
    else {
      $('.option__none').fadeOut();
    }
    
  });
  

// jobs input file
$( ".file__group .lg__control").click( function() {
  $(this).css('opacity', '1');
 });

 // jobs input file
$(".sm__control").click( function() {
  $(this).css('opacity', '1');
 });

// dashboard dropdown toggle
$( ".dashboard__dropdown .dropdown-toggle" ).on('click', function(event2) {
  event2.stopPropagation();
  $(this).next('.dropdown-menu').toggleClass('show__dropdown');
});

// dashboard dropdown item
$( ".dashboard__dropdown .dropdown-item.has__function" ).on('click', function(event3) {
  event3.preventDefault();
  event3.stopPropagation();
  $(this).parents('.dropdown-menu').removeClass('show__dropdown');
});

$( "body" ).on('click', function() {
  $('.dashboard__dropdown .dropdown-menu').removeClass('show__dropdown');
});


// dashboard dropdown report
// $( ".open__report__wrapper" ).on('click', function() {
//   $(this).parents('.dashboard__table .twrapper').next('.report__wrapper').slideToggle(700);
// });

// dashboard dropdown delete
$( ".delete__dashrow" ).on('click', function(ev) {
  ev.preventDefault();
  $(this).parents('.dashboard__table .twrapper').next('.report__wrapper').fadeOut();
  $(this).parents('.dashboard__table .twrapper').remove();
});

// dashboard report delete
$( ".trash__icon" ).on('click', function() {
  $(this).parents('.report__card').remove();
});

// dashboard report edit
$( ".edit__icon" ).on('click', function() {
  $(this).parents('.report__card').find('.report__des').attr('contenteditable', 'true');
  $(this).parents('.report__card').find('.save__btn').fadeIn();
  $(this).fadeOut();
  $(this).siblings('.trash__icon').fadeOut();
});

// dashboard open modal
$( ".report__title" ).on('click', function() {
  $('.reportModal').addClass('mfade__in');
  $('body').addClass('overflow__hidden');
});

// dashboard close modal
$('.modal__overlay').click(function () {
  $(this).parent('.reportModal').removeClass('mfade__in');
   $('body').removeClass('overflow__hidden');
 })

 // skip page slider
 $(function(){
  
  var is_rtl = $("html[lang='ar']").length > 0;
    
  $('.one_skip_slider').slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    rtl: is_rtl,
    dots: true,
    arrows: true,
    loop: false,
    autoplay: false


  });
});


$('#stepExample1').timepicker({ 'step': 1 });

// open invoice form
$( ".newCBtn" ).on('click', function() {
 $('.newCustFrm_wrap').toggleClass('openCinform_wrap');
});