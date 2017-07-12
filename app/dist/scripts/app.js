// -------------------------
// ANIMATIONS
// -------------------------

// Variables
// Calc Window Height
var winHeight = $(window).height();
var winWidth = $(window).width();
var docHeight = $(document).height();
var mq = window.matchMedia("(max-width: 768px)").matches;
var currentGallery = {
  'location': ['' , 'Nueva Delhi' , 'Uttar Pradesh']
};

var video = [
  document.getElementById("video00"),
  document.getElementById("video01"),
  document.getElementById("video02"),
];

$(document).ready(function(){

  // Loader
  // Loader progressBar
  var width = 100, // width of a progress bar in percentage
    perfData = window.performance.timing, // The PerformanceTiming interface
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart), // Calculated Estimated Time of Page Load which returns negative value.
    time = parseInt((EstimatedTime/1000)%60)*100; //Converting EstimatedTime from miliseconds to seconds.

  // Loadbar Animation
  $(".loadbar").animate({
    width: width + "%"
  }, time);
  // Loadbar Glow Animation
  $(".glow").animate({
    width: width + "%"
  }, time);

  // Percentage Increment Animation
  var PercentageID = $("#precent"),
      start = 0,
      end = 100,
      durataion = time;
      animateValue(PercentageID, start, end, durataion);

  function animateValue(id, start, end, duration) {
    var range = end - start,
      current = start,
      increment = end > start? 1 : -1,
      stepTime = Math.abs(Math.floor(duration / range)),
      obj = $(id);
    var timer = setInterval(function() {
      current += increment;
      $(obj).text(current + "%");
    //obj.innerHTML = current;
      if (current == end) {
          clearInterval(timer);
      }
    }, stepTime);
  }

  $('.sk-folding-cube').css('top' , ((winHeight / 2) - 40));
    $(window).on("load", function() {
      console.log("imgs loaded");
      $(".loader").fadeOut(600);
      $('#page-content-wrapper').fadeIn(600);
      setTimeout(function(){
        $('.krundi-anm--container').addClass('img-01');
        $('.krundi-anm--container').addClass('img-03');
        console.log('img-01 displayed');
      },1000);
      setTimeout(function(){
        $('.krundi-anm--container').addClass('img-02');
        $('.krundi-anm--container').addClass('img-04');
        console.log('img-02 displayed');
      },2000);
    })
    // Fading Out Loadbar on Finised
  // setTimeout(function(){
    // $('.loader').fadeOut(300);
  // }, time);


  // Sidebar Wrapper TOGGLE
  $(".navbar-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("sidebar-toggle");
      $('.navbar-right').fadeToggle();
  });
  $("#sidebar-closebox").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("sidebar-toggle");
      $('.navbar-right').fadeToggle();
  });
  
  // Go to SIDEBAR
  function scrollToAnchor(aid){
     var aTag = $("#"+ aid);
     $('html,body').animate({scrollTop: aTag.offset().top-100},'slow');
  }

  $('.gotop').click(function(){
    scrollToAnchor('wrapper');
  });

  // Scroll transition
  $(function(){
    var hasBeenTrigged = false;
    $(window).scroll(function() {
      if(mq){
        if ($(this).scrollTop() >= 230 && !hasBeenTrigged) {
          $('#navbar').addClass('navbar-shrink');
          hasBeenTrigged = true;
        }else if(($(this).scrollTop() <= 230)){
          $('#navbar').removeClass('navbar-shrink');
          hasBeenTrigged = false;
        }
      }else{
        if ($(this).scrollTop() >= 530 && !hasBeenTrigged) {
          $('#navbar').addClass('navbar-shrink');
          hasBeenTrigged = true;
        }else if(($(this).scrollTop() <= 530)){
          $('#navbar').removeClass('navbar-shrink');
          hasBeenTrigged = false;
        }
      }
    });
  });

  // CirclePointer
  $(".go-top--section").mouseenter(
    function() {
      console.log("hasBeenTrigged");
      $('.circle-pointer').toggleClass("slideDown");
    }
  );  

  $('.moveSectionDown').click(function(e){
    e.preventDefault();
    $.fn.fullpage.moveSectionDown();
  });

  // Full Page
  $('#fullpage').fullpage({
    verticalCentered: false,

    // //Navigation
    // menu: '#menu',
    // lockAnchors: false,
    // anchors:['section-00', 'section-01'],
    navigation: true,
    navigationPosition: 'right',
    // navigationTooltips: ['firstSlide', 'secondSlide'],
    // showActiveTooltip: false,
    // slidesNavigation: false,
    // slidesNavPosition: 'bottom',

    // //Scrolling
    // css3: true,
    // scrollingSpeed: 700,

    // make the web flow by sections
    autoScrolling: true,

    // make the section scrollable
    scrollOverflow: true,

    fitToSection: true,
    fitToSectionDelay: 100,
    // scrollBar: true,
    // easing: 'easeInOutCubic',
    // easingcss3: 'ease',

    // go top
    // loopBottom: true,
    // loopTop: true,
    // loopHorizontal: true,
    // continuousVertical: false,
    // continuousHorizontal: false,
    // scrollHorizontally: false,
    // interlockedSlides: false,
    // dragAndMove: false,
    // offsetSections: false,
    // resetSliders: false,
    // fadingEffect: true,
    // normalScrollElements: '.slide , .element2',
    // scrollOverflow: true,
    // scrollOverflowReset: true,
    // scrollOverflowOptions: null,
    // touchSensitivity: 15,
    // normalScrollElementTouchThreshold: 5,
    // bigSectionsDestination: null,

    // //Accessibility
    // keyboardScrolling: true,
    // animateAnchor: true,
    // recordHistory: true,

    // //Design
    controlArrows: true,
    verticalCentered: true,
    sectionsColor : ['', ''],
    // paddingTop: '3em',
    // paddingBottom: '3em',
    fixedElements: '.arrow-container , .pipo',
    // responsiveWidth: 0,
    // responsiveHeight: 0,
    // responsiveSlides: false,
    parallax: true,
    parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

    // //Custom selectors
    // sectionSelector: '.section',
    slideSelector: '.slide',

    // lazyLoading: true,

    // //events
    // onLeave: function(index, nextIndex, direction){},
    afterLoad: function(anchorLink, index){
      if(index == 1){
        $('.section-00').addClass('cest-active');
        $('.navbar').removeClass('navbar-shrink');
        console.log(index);
      }
      if(index == 2){
        $('.section-01').addClass('cest-active');
        $('.navbar').addClass('navbar-shrink');
        console.log(index);
      }
      if(index == 3){
        $('.section-03').addClass('cest-active');
        $('.navbar').addClass('navbar-shrink');
        console.log(index);
      }
      if(index == 4){
        $('.navbar').addClass('navbar-shrink');
        console.log(index);
      }
    },

    // easingcss3: 'cubic-bezier(0.575, 0.885, 0.520, 1.275)',

    // afterRender: function(){},
    // afterResize: function(){},
    // afterResponsive: function(isResponsive){},
    // afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
    // onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
  });
  
});
