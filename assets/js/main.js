(function ($) {
  'use strict';
  /*=================================
      JS Index Herevs-service
  ==================================*/
  /*
    01. Preloader Must Needed In Your Project
    02. Button Hover
    03. Mobile Menu Active 
    04. Sticky Menu
    05. Dynamic Background Image
    06. Lenis & GSAP
    07. Slide Animation Hero
    08. Title Animation
    09. Swiper Global
    10. Counter
    11. Services-tab 
    12. Process Slider
    13. Popup Search Box
    14. Active Menu Item Based On URL
    15. WOW Js Active 
    16. Back To Top
    17. Magnify Popup
    18. Progress Bar
    19. Current Year Set
  */
  /*=================================
      JS Index End
  ==================================*/

  /**************************************
   ***** 01. Preloader Must Needed In Your Project *****
   **************************************/
  $(window).on('load', function () {
    // Define GSAP animation for the preloader
    if ($('.preloader').length) {
      gsap.to('.preloader', {
        y: '-100%',
        duration: 1.2,
        ease: 'power3.inOut',
        onComplete: function () {
          $('.preloader').hide();
        },
      });

      // Handle preloader close event
      $('.preloaderCls').on('click', function (e) {
        e.preventDefault(); // Prevent default action
        gsap.to('.preloader', {
          y: '-100%',
          duration: 1.2,
          ease: 'power3.inOut',
          onComplete: function () {
            $('.preloader').hide();
          },
        });
      });
    }
  });

  /**************************************
   ***** 02. Button Hover *****
   **************************************/
  $(function () {
    $('.vsBtn').on('mouseenter mouseout', function (e) {
      let parentOffset = $(this).offset();
      let relX = e.pageX - parentOffset.left;
      let relY = e.pageY - parentOffset.top;
      $(this).find('span').css({
        top: relY,
        left: relX
      });
    });
  });

  /**************************************
   ***** 03. Mobile Menu Active *****
   **************************************/
  $.fn.vsmobilemenu = function (options) {
    var opt = $.extend(
      {
        menuToggleBtn: '.vs-menu-toggle',
        bodyToggleClass: 'vs-body-visible',
        subMenuClass: 'vs-submenu',
        subMenuParent: 'vs-item-has-children',
        subMenuParentToggle: 'vs-active',
        meanExpandClass: 'vs-mean-expand',
        appendElement: '<span class="vs-mean-expand"></span>',
        subMenuToggleClass: 'vs-open',
        toggleSpeed: 400,
      },
      options
    );

    return this.each(function () {
      var menu = $(this); // Select menu

      // Menu Show & Hide
      function menuToggle() {
        menu.toggleClass(opt.bodyToggleClass);

        // collapse submenu on menu hide or show
        var subMenu = '.' + opt.subMenuClass;
        $(subMenu).each(function () {
          if ($(this).hasClass(opt.subMenuToggleClass)) {
            $(this).removeClass(opt.subMenuToggleClass);
            $(this).css('display', 'none');
            $(this).parent().removeClass(opt.subMenuParentToggle);
          }
        });
      }

      // Class Set Up for every submenu
      menu.find('li').each(function () {
        var submenu = $(this).find('ul');
        submenu.addClass(opt.subMenuClass);
        submenu.css('display', 'none');
        submenu.parent().addClass(opt.subMenuParent);
        submenu.prev('a').append(opt.appendElement);
        submenu.next('a').append(opt.appendElement);
      });

      // Toggle Submenu
      function toggleDropDown($element) {
        if ($($element).next('ul').length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).next('ul').slideToggle(opt.toggleSpeed);
          $($element).next('ul').toggleClass(opt.subMenuToggleClass);
        } else if ($($element).prev('ul').length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).prev('ul').slideToggle(opt.toggleSpeed);
          $($element).prev('ul').toggleClass(opt.subMenuToggleClass);
        }
      }

      // Submenu toggle Button
      var expandToggler = '.' + opt.meanExpandClass;
      $(expandToggler).each(function () {
        $(this).on('click', function (e) {
          e.preventDefault();
          toggleDropDown($(this).parent());
        });
      });

      // Menu Show & Hide On Toggle Btn click
      $(opt.menuToggleBtn).each(function () {
        $(this).on('click', function () {
          menuToggle();
        });
      });

      // Hide Menu On out side click
      menu.on('click', function (e) {
        e.stopPropagation();
        menuToggle();
      });

      // Stop Hide full menu on menu click
      menu.find('div').on('click', function (e) {
        e.stopPropagation();
      });
    });
  };
  $('.vs-menu-wrapper').vsmobilemenu();

  /**************************************
   ***** 04. Sticky Menu *****
   **************************************/
  var lastScrollTop = '';
  var scrollToTopBtn = '.scrollToTop';

  function stickyMenu($targetMenu, $toggleClass, $parentClass) {
    var st = $(window).scrollTop();
    var height = $targetMenu.css('height');
    $targetMenu.parent().css('min-height', height);
    if ($(window).scrollTop() > 800) {
      $targetMenu.parent().addClass($parentClass);

      if (st > lastScrollTop) {
        $targetMenu.removeClass($toggleClass);
      } else {
        $targetMenu.addClass($toggleClass);
      }
    } else {
      $targetMenu.parent().css('min-height', '').removeClass($parentClass);
      $targetMenu.removeClass($toggleClass);
    }
    lastScrollTop = st;
  }
  $(window).on('scroll', function () {
    stickyMenu($('.sticky-active'), 'active', 'will-sticky');
    if ($(this).scrollTop() > 500) {
      $(scrollToTopBtn).addClass('show');
    } else {
      $(scrollToTopBtn).removeClass('show');
    }
  });

  /**************************************
   ***** 05. Dynamic Background Image *****
   **************************************/
  if ($('[data-bg-src]').length > 0) {
    $('[data-bg-src]').each(function () {
      var src = $(this).attr('data-bg-src');
      $(this).css('background-image', 'url(' + src + ')');
      $(this).removeAttr('data-bg-src').addClass('background-image');
    });
  }

  /**************************************
   ***** 06. Lenis & GSAP *****
   **************************************/
  gsap.registerPlugin(
    ScrollTrigger,
    ScrollToPlugin,
    SplitText
  );

  window.addEventListener("load", () => {
    ScrollTrigger.refresh();
  });

  ScrollTrigger.defaults({
    invalidateOnRefresh: true
  });

  gsap.utils.toArray(".parallax-sec").forEach((section) => {
    const images = section.querySelectorAll(".paralax img");
    images.forEach((img, index) => {
      const speed = 15;
      gsap.fromTo(
        img,
        {
          yPercent: index % 2 ? 15 : -15,
        },
        {
          yPercent: index % 2 ? -15 : 15,
          ease: "none",

          scrollTrigger: {
            trigger: section,
            start: "top bottom",
            end: "bottom top",
            scrub: 0.8,
          }
        }
      );
    });
  });

  class SmoothScroll {
    constructor() {
      this.current = window.scrollY;
      this.target = window.scrollY;
      this.ease = 0.01;
      this.isRunning = false;
      this.onScroll = this.onScroll.bind(this);
      this.animate = this.animate.bind(this);
      window.addEventListener("scroll", this.onScroll, { passive: true });
      this.animate();
    }

    onScroll() {
      this.target = window.scrollY;
      if (!this.isRunning) {
        this.isRunning = true;
        requestAnimationFrame(this.animate);
      }
    }

    animate() {
      this.current += (this.target - this.current) * this.ease;
      if (Math.abs(this.target - this.current) < 0.1) {
        this.current = this.target;
        this.isRunning = false;
        return;
      }
      requestAnimationFrame(this.animate);
    }
  }
  new SmoothScroll();

  /**************************************
   ***** 07. Slide Animation Hero *****
   **************************************/
  // Hero Content Animation
  document.querySelectorAll(".vs-hero__content").forEach((heroContent) => {
    const items = heroContent.querySelectorAll(
      ".title-sub, .title-main, .title-para, .heroBtn"
    );
    if (!items.length) return;
    gsap.set(items, {
      y: 50,
      opacity: 0,
      filter: "blur(10px)"
    });

    gsap.to(items, {
      y: 0,
      opacity: 1,
      filter: "blur(0px)",
      duration: 1,
      stagger: 0.7,
      ease: "power3.out",
      clearProps: "transform,filter",

      scrollTrigger: {
        trigger: heroContent,
        start: "top 80%",
        toggleActions: "play none none reverse",
        invalidateOnRefresh: true
      }
    });
  });

  // Hero Box Animation
  document.querySelectorAll(".hero-box").forEach((heroBox) => {
    const items = heroBox.querySelectorAll(
      ".title-sub1, .title-main1, .title-para1, .heroBtn1"
    );
    if (!items.length) return;
    gsap.set(items, {
      x: 50,
      opacity: 0
    });

    gsap.to(items, {
      x: 0,
      opacity: 1,
      duration: 1,
      stagger: 0.5,
      ease: "power3.out",
      clearProps: "transform",

      scrollTrigger: {
        trigger: heroBox,
        start: "top 80%",
        toggleActions: "play none none reverse",
        invalidateOnRefresh: true
      }
    });
  });

  const section = document.querySelector(".parallax-sec");
  if (section) {
    const localStarGlow = section.querySelectorAll(".starGlow");

    if (localStarGlow.length) {
      gsap.to(localStarGlow, {
        scale: 1.05,
        opacity: 0.5,
        filter: "drop-shadow(0 0 5px rgba(255,255,255,.5))",
        duration: 1.8,
        ease: "sine.inOut",
        repeat: -1,
        yoyo: true
      });
    }

    const items = [
      { el: section.querySelector(".icon_one, .ele1, .ele8"), mx: .2, my: .2, d: 1.2 },
      { el: section.querySelector(".icon_two, .ele2"), mx: .4, my: .5, d: .8 },
      { el: section.querySelector(".icon_three, .ele3"), mx: .2, my: .3, d: 1.1 },
      { el: section.querySelector(".icon_four, .ele4"), mx: .5, my: .8, d: 1.4 },
      { el: section.querySelector(".icon_five, .ele5"), mx: .8, my: .7, d: 1 },
      { el: section.querySelector(".icon_six, .ele6"), mx: .9, my: .8, d: 1.5 },
      { el: section.querySelector(".img-parallax, .ele7"), mx: .9, my: .8, d: 1.5 }
    ].filter(item => item.el);
    // Create quick setters once
    items.forEach(item => {
      item.xTo = gsap.quickTo(item.el, "x", {
        duration: item.d,
        ease: "power3.out"
      });

      item.yTo = gsap.quickTo(item.el, "y", {
        duration: item.d,
        ease: "power3.out"
      });
    });
    section.addEventListener("mousemove", (e) => {
      const x = (e.clientX / window.innerWidth - 0.5) * 30;
      const y = (e.clientY / window.innerHeight - 0.5) * 30;
      items.forEach(item => {
        item.xTo(x * item.mx);
        item.yTo(y * item.my);
      });
    });
    // Reset when mouse leaves
    section.addEventListener("mouseleave", () => {
      items.forEach(item => {
        item.xTo(0);
        item.yTo(0);
      });
    });
  }

  /**************************************
   ***** 08. Title Animation *****
   **************************************/
  function vsTitleAnimation() {

    document.querySelectorAll(".title-anime").forEach((title) => {
      if (title.animation) {
        title.animation.kill();
        title.animation.scrollTrigger?.kill();
      }
      if (title.split) {
        title.split.revert();
      }
      const wrapper = title.closest(".vs-title");
      const match = wrapper?.className.match(/animation-(style\d+)/);
      const style = match ? match[1] : "style1";
      title.split = new SplitText(title, {
        type: "words,chars",
        linesClass: "split-line"
      });
      gsap.set(title, {
        textTransform: "none"
      });
      const chars = title.split.chars;
      const initialStates = {
        style1: { opacity: 0, y: 30, rotateX: -20 },
        style2: { opacity: 0, x: 30 },
      };
      gsap.set(chars, initialStates[style]);
      title.animation = gsap.to(chars, {
        x: 0,
        y: 0,
        rotate: 0,
        rotateX: 0,
        scale: 1,
        opacity: 1,

        duration: 1,
        stagger: .01,
        ease: "power3.out",

        scrollTrigger: {
          trigger: title,
          start: "top 90%",
          toggleActions: "play none none none"
        }
      });
    });
  }
  vsTitleAnimation();

  /**************************************
   ***** 09. Swiper Global *****
   **************************************/
  function initSwiper(el, options = {}) {
    const isMobile = window.innerWidth < 991;

    const nextBtn = el.dataset.navNext;
    const prevBtn = el.dataset.navPrev;
    if (el.dataset.autoplay === "false") {
      options.autoplay = false;
    }

    if (el.classList.contains("blogSlider")) {
      options.loop = isMobile;
      options.autoplay = isMobile
        ? {
          delay: 3000,
          disableOnInteraction: false,
        }
        : false;
      options.allowTouchMove = isMobile;
    }

    // SWIPER INIT
    const swiper = new Swiper(el, {
      speed: 1000,
      loop: options.loop ?? true,
      autoplay: options.autoplay ?? {
        delay: 3000,
        disableOnInteraction: false,
      },
      allowTouchMove: options.allowTouchMove ?? true,

      // PAGINATION
      pagination: el.querySelector(".swiper-pagination")
        ? {
          el: el.querySelector(".swiper-pagination"),
          clickable: true,
        }
        : false,

      // GLOBAL NAVIGATION
      navigation: nextBtn && prevBtn
        ? {
          nextEl: nextBtn,
          prevEl: prevBtn,
        }
        : false,
      // BREAKPOINTS
      breakpoints: getDynamicBreakpoints(el),
      ...options,
    });

    // GLOBAL PAGINATION
    if (el.dataset.pagination === "global") {
      initGlobalPagination(swiper, {
        splitIndex: bp(el, "split", 4),
      });
      swiper.pagination?.destroy();
    }
    return swiper;
  }
  // INIT ALL SWIPERS
  document.querySelectorAll("[data-swiper]").forEach((el) => {
    initSwiper(el);
  });
  // BREAKPOINT HELPER
  function bp(el, size, fallback) {
    return parseInt(el.dataset[size]) || fallback;
  }
  // DYNAMIC BREAKPOINTS
  function getDynamicBreakpoints(el) {
    return {
      320: {
        slidesPerView: bp(el, "xs", 1),
        spaceBetween: bp(el, "gapSm", 10),
      },
      576: {
        slidesPerView: bp(el, "sm", 1),
        spaceBetween: bp(el, "gapMd", 15),
      },
      768: {
        slidesPerView: bp(el, "md", 2),
        spaceBetween: bp(el, "gapMd", 15),
      },
      992: {
        slidesPerView: bp(el, "lg", 3),
        spaceBetween: bp(el, "gapLg", 20),
      },
      1200: {
        slidesPerView: bp(el, "xl", 4),
        spaceBetween: bp(el, "gapXl", 30),
      },
    };
  }
  // Testimonial Slider
  const testimonialSlider = new Swiper(".testimonialSlider", {
    slidesPerView: 3,
    speed: 1500,
    spaceBetween: 30,
    centeredSlides: true,
    fadeEffect: {
      crossFade: true,
    },
    loop: true,
    autoplay: true,
    navigation: {
      nextEl: ".vs-swiper-button-next",
      prevEl: ".vs-swiper-button-prev",
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
      },
    },
  });
  testimonialSlider.on("afterInit", () => {
    ScrollTrigger.refresh();
  });

  /**************************************
   ***** 10. Counter *****
   **************************************/
  function animateCounter(counter) {
    const targetValue = parseInt(counter.getAttribute("data-counter"));
    const animationDuration = 1000; // Set the desired animation duration in milliseconds
    const startTimestamp = performance.now();

    function updateCounter(timestamp) {
      const elapsed = timestamp - startTimestamp;
      const progress = Math.min(elapsed / animationDuration, 1);
      const currentValue = Math.floor(targetValue * progress);
      counter.textContent = currentValue;
      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      }
    }
    requestAnimationFrame(updateCounter);
  }
  function startCounterAnimation(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const counter = entry.target.querySelector(".counter-number");
        animateCounter(counter);
      }
    });
  }
  const counterObserver = new IntersectionObserver(startCounterAnimation, {
    rootMargin: "0px",
    threshold: 0.2, // Adjust the threshold value as needed (0.2 means 20% visibility)
  });
  const counterBlocks = document.querySelectorAll(".counter-body");
  counterBlocks.forEach((counterBlock) => {
    counterObserver.observe(counterBlock);
  });

  /**************************************
   ***** 11. Services-tab *****
   **************************************/
  document.addEventListener("DOMContentLoaded", () => {
    const navItems = document.querySelectorAll(".services-nav .nav-item");
    const panels = document.querySelectorAll(".content-panel");

    navItems.forEach(item => {
      item.addEventListener("click", () => {
        const target = item.dataset.target;

        // Remove active class from all buttons
        navItems.forEach(btn => btn.classList.remove("active"));

        // Hide all panels
        panels.forEach(panel => {
          panel.classList.remove("active");
        });

        // Add active class to clicked button
        item.classList.add("active");

        // Show target panel
        const activePanel = document.getElementById(target);
        if (activePanel) {
          activePanel.classList.add("active");
        }
      });
    });
  });

  /**************************************
   ***** 12. Hero Slider *****
   **************************************/

const heroSlider = new Swiper(".heroSlider", {
    slidesPerView: 1,
    spaceBetween: 0,
    speed: 1000,
    loop: true,
    autoplay:false,

    // autoplay: {
    //     delay: 5000,
    //     disableOnInteraction: false,
    // },

    navigation: {
        nextEl: ".hero-next",
        prevEl: ".hero-prev",
    },

    pagination: {
        el: ".hero-pagination",
        clickable: true,
    },
});

heroSlider.on("afterInit", () => {
    ScrollTrigger.refresh();
});

  /**************************************
   ***** 12. Process Slider *****
   **************************************/
  // NAV SLIDER
  const processNav = new Swiper(".processNav", {
    slidesPerView: "auto",
    watchSlidesProgress: true
  });

  // CONTENT SLIDER
  const processSlider = new Swiper(".processSlider", {
    slidesPerView: 2,
    spaceBetween: 40,
    speed: 2000,
    loop: true,

    navigation: {
      nextEl: ".process-next",
      prevEl: ".process-prev"
    },

    thumbs: {
      swiper: processNav,
      multipleActiveThumbs: false
    },

    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      576: {
        slidesPerView: 1,
      },
      991: {
        slidesPerView: 1,
      },
      992: {
        slidesPerView: 2,
      }
    }
  });
  processSlider.on("afterInit", () => {
    ScrollTrigger.refresh();
  });

  /**************************************
   ***** 13. Popup Search Box *****
   **************************************/
  function popupSarchBox($searchBox, $searchOpen, $searchCls, $toggleCls) {
    $($searchOpen).on('click', function (e) {
      e.preventDefault();
      $($searchBox).addClass($toggleCls);
    });
    $($searchBox).on('click', function (e) {
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
    $($searchBox)
      .find('form')
      .on('click', function (e) {
        e.stopPropagation();
        $($searchBox).addClass($toggleCls);
      });
    $($searchCls).on('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      $($searchBox).removeClass($toggleCls);
    });
  }
  popupSarchBox(
    '.popup-search-box',
    '.searchBoxTggler',
    '.searchClose',
    'show'
  );

  /**************************************
   ***** 14. Active Menu Item Based On URL *****
   **************************************/
  document.addEventListener('DOMContentLoaded', () => {
    const navMenu = document.querySelector('.main-menu'); // Select the main menu container once
    const windowPathname = window.location.pathname;

    if (navMenu) {
      const navLinkEls = navMenu.querySelectorAll('a'); // Only get <a> tags inside the main menu

      navLinkEls.forEach((navLinkEl) => {
        const navLinkPathname = new URL(navLinkEl.href, window.location.origin)
          .pathname;

        // Match current URL with link's href
        if (
          windowPathname === navLinkPathname ||
          (windowPathname === '/index.html' && navLinkPathname === '/')
        ) {
          navLinkEl.classList.add('active');

          // Add 'active' class to all parent <li> elements
          let parentLi = navLinkEl.closest('li');
          while (parentLi && parentLi !== navMenu) {
            parentLi.classList.add('active');
            parentLi = parentLi.parentElement.closest('li'); // Traverse up safely
          }
        }
      });
    }
  });
  $('.menu-item-has-children > a.active').each(function () {
    var parentItem = $(this).closest('.menu-item-has-children');
    parentItem.removeClass('active');  // Remove 'active' from parent item
    $(this).removeClass('active');     // Remove 'active' from the <a> tag
  });

  /**************************************
   ***** 15. WOW Js Active *****
   **************************************/
  const wow = new WOW({
    boxClass: "wow",
    animateClass: "wow-animated",
    offset: 80,
    mobile: false,
    live: false,
    resetAnimation: false,
    callback(box) {

      // Progress Bar
      $(box).find(".progress-bar").each(function () {
        $(this).css("width", $(this).data("width") + "%");
      });

      requestAnimationFrame(() => {
        ScrollTrigger.refresh();
      });

    }
  });

  wow.init();

  /**************************************
   ***** 16. Back To Top *****
   **************************************/
  // Get references to DOM elements
  const backToTopBtn = document.getElementById('backToTop');
  const progressCircle = document.querySelector('.progress');
  const progressPercentage = document.getElementById('progressPercentage');

  // Circle properties
  const CIRCLE_RADIUS = 40;
  const CIRCUMFERENCE = 2 * Math.PI * CIRCLE_RADIUS;

  // Set initial styles for the circle
  progressCircle.style.strokeDasharray = CIRCUMFERENCE;
  progressCircle.style.strokeDashoffset = CIRCUMFERENCE;

  // Update progress based on scroll position
  const updateProgress = () => {
    const scrollPosition = window.scrollY;
    const totalHeight =
      document.documentElement.scrollHeight - window.innerHeight;

    if (totalHeight > 0) {
      const scrollPercentage = (scrollPosition / totalHeight) * 100;
      const offset = CIRCUMFERENCE * (1 - scrollPercentage / 100);

      // Update the circle and percentage display
      progressCircle.style.strokeDashoffset = offset.toFixed(2);
      progressPercentage.textContent = `${Math.round(scrollPercentage)}%`;

      // Show or hide the back-to-top button
      if (scrollPercentage > 5) {
        backToTopBtn.classList.add('visible');
      } else {
        backToTopBtn.classList.remove('visible');
      }
    }
  };

  // Scroll to top using smooth animation
  const scrollToTop = () => {
    gsap.to(window, { duration: 1, scrollTo: 0 });
  };

  // Throttle function to limit function execution frequency
  const throttle = (func, limit) => {
    let lastFunc;
    let lastRan;
    return function (...args) {
      const context = this;
      if (!lastRan) {
        func.apply(context, args);
        lastRan = Date.now();
      } else {
        clearTimeout(lastFunc);
        lastFunc = setTimeout(() => {
          if (Date.now() - lastRan >= limit) {
            func.apply(context, args);
            lastRan = Date.now();
          }
        }, limit - (Date.now() - lastRan));
      }
    };
  };

  // Attach event listeners
  window.addEventListener('scroll', throttle(updateProgress, 50));
  backToTopBtn.addEventListener('click', scrollToTop);

  // Initial update to set the correct progress on page load
  updateProgress();

  /**************************************
   ***** 17. Magnify Popup *****
   **************************************/
  /* magnificPopup img view */
  $('.popup-image').magnificPopup({
    type: 'image',
    gallery: {
      enabled: true,
    },
  });

  /* magnificPopup video view */
  $('.popup-video').magnificPopup({
    type: 'iframe',
  });


  /**************************************
   ***** 18. Progress Bar *****
   **************************************/
  const progressBars = document.querySelectorAll('.progress-fill');
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const bar = entry.target;
        const width = bar.dataset.width;
        bar.style.width = width + '%';
        observer.unobserve(bar); // run only once
      }
    });
  }, {
    threshold: 0.5
  });
  progressBars.forEach(bar => {
    observer.observe(bar);
  });

  /**************************************
   ***** 19. Current Year Set *****
   **************************************/
  document.addEventListener('DOMContentLoaded', () => {
    const currentYear = new Date().getFullYear();
    const yearElement = document.getElementById('currentYear');
    if (yearElement) {
      yearElement.textContent = currentYear;
    }
  });
  
  document.querySelectorAll(".social").forEach((social) => {
    const button = social.querySelector(".social-toggle");
    button.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();

      // Close other open menus
      document.querySelectorAll(".social.active").forEach((item) => {
        if (item !== social) {
          item.classList.remove("active");
        }
      });

      // Toggle current
      social.classList.toggle("active");
    });

  });

  // Close when clicking outside
  document.addEventListener("click", function () {
    document.querySelectorAll(".social.active").forEach((item) => {
      item.classList.remove("active");
    });
  });

})(jQuery);