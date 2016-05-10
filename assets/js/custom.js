jQuery(document).ready(function ($) {
  "use strict";

  $(".count-number").appear(function () {
    var datacount = $(this).attr('data-count');
    $(this).find('.count-focus').delay(6000).countTo({
      from: 10,
      to: datacount,
      speed: 3000,
      refreshInterval: 50,
    });
  });


  $("#slider-range").slider({
    range: true,
    step: 10,
    min: 10,
    max: 1000,
    values: [100, 500],
    slide: function (event, ui) {
      $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
    }
  });


  $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

  $(".progress-bar").loading();

  $(document).on('scroll', function () {
    // if the scroll distance is greater than 100px
    if ($(window).scrollTop() > 42) {
      // do something
      $('.site-header').addClass('scrolled-header');
    }
    else {
      $('.site-header').removeClass('scrolled-header');
    }
  });


  // Accordion script
  function close_accordion_section() {
    $('.accordion .accordion-section-title').removeClass('active');
    $('.accordion .accordion-section-content').slideUp(300).removeClass('open');
  }

  $('.accordion-section-title').on("click", function (e) {
    // Grab current anchor value
    var currentAttrValue = $(this).attr('href');

    if ($(e.target).is('.active')) {
      close_accordion_section();
    } else {
      close_accordion_section();

      // Add active class to section title
      $(this).addClass('active');
      // Open up the hidden content panel
      $('.accordion ' + currentAttrValue).slideDown(300).addClass('open');
    }

    e.preventDefault();
  });

  $('#getting-started').countdown('2016/10/10', function (event) {
    var $this = $(this).html(event.strftime(''
      + '<div class="col-md-2 col-md-offset-2"><span class="number">%D</span> <span class="label">days</span></div>'
      + '<div class="col-md-2"><span class="number">%H</span> <span class="label">hours</span></div> '
      + '<div class="col-md-2"><span class="number">%M</span> <span class="label">minutes</span></div>'
      + '<div class="col-md-2"><span class="number">%S</span> <span class="label">seconds</span></div>'));
  });

  // Tabs script
  $('.tabs .tab-links a').on('click', function (e) {
    var currentAttrValue = $(this).attr('href');

    // Show/Hide Tabs
    $('.tabs ' + currentAttrValue).fadeIn(500).siblings().hide();
    ;

    // Change/remove current tab to active
    $(this).parent('li').addClass('active').siblings().removeClass('active');

    e.preventDefault();
  });

  // Animation on scroll
  new WOW().init();


  // Portfolio Isotope Filter
  $('.projects').mixItUp();

  // init Isotope
  var portfolioGrid = $('#portfolio-grid');

  portfolioGrid.imagesLoaded(function () {
    portfolioGrid.isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows',
      "masonry": {"columnWidth": ".portfolio-grid-sizer"}
    });
  });

  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function () {
      var number = $(this).find('.number').text();
      return parseInt(number, 10) > 50;
    },
    // show if name ends with -ium
    ium: function () {
      var name = $(this).find('.name').text();
      return name.match(/ium$/);
    }
  };

  // bind filter button click
  $('#projects-filter').on('click', 'a', function () {
    var filterValue = $(this).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[filterValue] || filterValue;
    portfolioGrid.isotope({filter: filterValue});
    return false;
  });

  // change is-checked class on buttons
  $('#projects-filter').each(function (i, buttonGroup) {
    var $buttonGroup = $(buttonGroup);
    $buttonGroup.on('click', 'a', function () {
      $buttonGroup.find('.active').removeClass('active');
      $(this).addClass('active');
    });
  });


  // Owl Carouse Testimonials

  var owl = $("#owl-demo");

  owl.owlCarousel({
    pagination: false,
    items: 1, //10 items above 1000px browser width
    itemsDesktop: [1000, 1], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 1], // betweem 900px and 601px
    itemsTablet: [600, 1], //2 items between 600 and 0
    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
  });

  // Custom Navigation Events
  $(".next").on("click", function () {
    owl.trigger('owl.next');
  })
  $(".prev").on("click", function () {
    owl.trigger('owl.prev');
  })
  $(".play").on("click", function () {
    owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").on("click", function () {
    owl.trigger('owl.stop');
  })


  var owl = $("#owl-recent");
  owl.owlCarousel({
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    pagination: false,
    paginationNumbers: false,
    autoPlay: false, //Set AutoPlay to 3 seconds
    items: 4, //10 items above 1000px browser width
    itemsDesktop: [1000, 4], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 2], // betweem 900px and 601px
    itemsTablet: [600, 1], //2 items between 600 and 0
    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
  });

  var owl = $(".project-owl");
  owl.owlCarousel({
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    pagination: false,
    paginationNumbers: false,
    autoPlay: false, //Set AutoPlay to 3 seconds
    items: 1, //10 items above 1000px browser width
    itemsDesktop: [1000, 1], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 1], // betweem 900px and 601px
    itemsTablet: [600, 1], //2 items between 600 and 0
    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
  });

  var owl = $("#owl-clients");
  owl.owlCarousel({
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    pagination: false,
    paginationNumbers: false,
    autoPlay: false, //Set AutoPlay to 3 seconds
    items: 6, //10 items above 1000px browser width
    itemsDesktop: [1000, 4], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
    itemsTablet: [600, 2], //2 items between 600 and 0
    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
  });

  var owl = $("#owl-clients2");
  owl.owlCarousel({
    navigation: true,
    navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
    pagination: false,
    paginationNumbers: false,
    autoPlay: false, //Set AutoPlay to 3 seconds
    items: 4, //10 items above 1000px browser width
    itemsDesktop: [1000, 3], //5 items between 1000px and 901px
    itemsDesktopSmall: [900, 3], // betweem 900px and 601px
    itemsTablet: [600, 2], //2 items between 600 and 0
    itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
  });


  $('.skillbar').each(function () {
    $(this).find('.skillbar-bar').animate({
      width: $(this).attr('data-percent')
    }, 3000);
  });


  // Submenu Show/Hide
  // $('nav.main-navigation ul > li, nav.main-navigation ul > li > ul > li').hover(function () {
  //     $(this).children('ul').stop(true, true).slideDown(200);
  // }, function () {
  //     $(this).children('ul').stop(true, true).slideUp(200);
  // });


  $('nav.main-navigation > ul > li').each(function () {
    $(this).find('.has-submenu').append('<i class="fa fa-angle-down"></i>');
  });


  // Blog Masonry
  var blogIsotope = function () {
    var imgLoad = imagesLoaded($('.blog-isotope'));

    imgLoad.on('done', function () {

      $('.blog-isotope').isotope({
        "itemSelector": ".blog-post",
      });

    })

    imgLoad.on('fail', function () {

      $('.blog-isotope').isotope({
        "itemSelector": ".blog-post",
      });

    })

  }

  blogIsotope();

  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails",
  });


  // Flickr Images
  $('.flickr-images').jflickrfeed({
    limit: 6,
    qstrings: {id: '56174287@N02'},
    itemTemplate: '<li class="small-thumb"><a href="{{link}}" title="{{title}}"><img src="{{image_s}}" alt="{{title}}" /></a></li>'
  });

  // Mobile navigation
  var collapse_menu_status = false;

  function collapse_menu() {
    if (collapse_menu_status === false) {
      $(".topbar-menu").addClass("slide-from-top");
      collapse_menu_status = true;
    }
    else {
      collapse_menu_status = false;
      $(".topbar-menu").removeClass("slide-from-top");
    }

  }

  $(".side-menu-button").on('click', function () {
    collapse_menu();
  });

  $(".responsive-menu .menu-item-has-children").append('<div class="show-submenu"><i class="fa fa-chevron-circle-down"></i></div>');

  $(".responsive-menu").on("click", ".show-submenu", function (e) {
    e.stopPropagation();

    $(this).parent().toggleClass("current")
      .children(".sub-menu").toggleClass("open");

    $(this).html($(this).html() == '<i class="fa fa-chevron-circle-down"></i>' ? '<i class="fa fa-chevron-circle-up"></i>' : '<i class="fa fa-chevron-circle-down"></i>');
    $(".nano").nanoScroller();
  });

  $(".responsive-menu").on("click", "a", function (e) {
    if (($(this).attr('href') === "#") || ($(this).attr('href') === "")) {
      $(this).parent().children(".show-submenu").trigger("click");
      return false;
    } else {
      offcanvas_close();
    }
  });


  // revolution slider
  $('.fullwidthbanner').revolution({
    delay: 6000,
    startwidth: 1170,
    startheight: 680,
    onHoverStop: "off",
    hideTimerBar: "on",
    thumbWidth: 100,
    thumbHeight: 50,
    thumbAmount: 3,
    hideThumbs: 200,
    navigationType: "bullet",
    navigationArrows: "verticalcentered",
    navigationStyle: "preview4",
    touchenabled: "on",
    navOffsetHorizontal: 0,
    navOffsetVertical: 20,
    stopAtSlide: -1,
    stopAfterLoops: -1,
    hideCaptionAtLimit: 0,
    hideAllCaptionAtLilmit: 0,
    hideSliderAtLimit: 0,
    hideThumbsOnMobile: "on",
    hideNavDelayOnMobile: 1500,
    hideBulletsOnMobile: "on",
    hideArrowsOnMobile: "on",
    hideThumbsUnderResoluition: 0,
    fullWidth: "on",
    shadow: 0
  });


  //  go to top
  var offset = 1000,
  //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
    offset_opacity = 1200,
  //duration of the top scrolling animation (in ms)
    scroll_top_duration = 500,
  //grab the "back to top" link
    $back_to_top = $('.go-top');

  //hide or show the "back to top" link
  $(window).on('scroll', function () {
    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('go-top-visible') : $back_to_top.removeClass('go-top-visible go-top-fade-out');
    if ($(this).scrollTop() > offset_opacity) {
      $back_to_top.addClass('go-top-fade-out');
    }
  });

  //smooth scroll to top
  $back_to_top.on('click', function (event) {
    event.preventDefault();
    $('body,html').animate({
        scrollTop: 0,
      }, scroll_top_duration
    );
  });

  $('.testimonials-slider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });


  $('.services-slider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });

  function setModalMaxHeight(element) {
    var that = {};

    that.$element = $(element);
    that.$content = that.$element.find('.modal-content');
    var borderWidth = that.$content.outerHeight() - that.$content.innerHeight();
    var dialogMargin = $(window).width() < 768 ? 20 : 60;
    var contentHeight = $(window).height() - (dialogMargin + borderWidth);
    var headerHeight = that.$element.find('.modal-header').outerHeight() || 0;
    var footerHeight = that.$element.find('.modal-footer').outerHeight() || 0;
    var maxHeight = contentHeight - (headerHeight + footerHeight);

    that.$content.css({
      'overflow': 'hidden'
    });

    that.$element
      .find('.modal-body').css({
      'max-height': maxHeight,
      'overflow-y': 'auto'
    });
  }

  $('.modal').on('show.bs.modal', function () {
    $(this).show();
    setModalMaxHeight(this);
  });

  $(window).resize(function () {
    if ($('.modal.in').length != 0) {
      setModalMaxHeight($('.modal.in'));
    }
  });

});
