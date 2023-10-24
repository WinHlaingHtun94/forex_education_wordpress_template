//AOS
AOS.init({
  once: true,
  easing: 'ease',
  duration: 800,
  offset: 250,
});

$("#liveTxt").typer({
    strings: [
      "Welcome To MKMyanmar.",
      "We Are A Team Of Forex Trader.",
      "We Are Here To Help You.",
    ],
    typeSpeed: 100,
    backspaceSpeed: 20,
    backspaceDelay: 800,
    repeatDelay: 1000,
    repeat: true,
    autoStart: true,
    startDelay: 100,
    useCursor: true
  });

$('.humberger').on('click',function(){
  $(this).toggleClass('active');
  $('.nav').toggleClass('active');
  $('body').toggleClass('no-scroll');
});

$('.nav li').on('click',function(){
  $('body').removeClass('no-scroll');
  $('.humberger').removeClass('active');
  $('.nav').removeClass('active');
})

$(window).on('load',function(){
  $('.loading').removeClass('active');
});

$('.mode').on('click',function(){
  $(this).toggleClass('light');
  $('body,header,footer').toggleClass('changemode');
  localStorage.setItem('mode',$(this).hasClass('light'));
});

if(localStorage.getItem('mode') == 'true'){
  $('.mode').addClass('light');
  $('body,header,footer').addClass('changemode');
}
