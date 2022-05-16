(function (window, document, $) {
  'use strict';
  var $html = $('html');
  var $body = $('body');

  $(window).on('load', function () {
    var compactMenu = false; // Set it to true, if you want default menu to be compact

    setTimeout(function () {
      $html.removeClass('loading').addClass('loaded');
    }, 1200);

    $.app.menu.init(compactMenu);

    // Navigation configurations
    var config = {
      speed: 300, // set speed to expand / collpase menu
    };
    if ($.app.nav.initialized === false) {
      $.app.nav.init(config);
    }

    Unison.on('change', function (bp) {
      $.app.menu.change();
    });

    // Tooltip Initialization
    $('[data-toggle="tooltip"]').tooltip({
      container: 'body',
    });

    // Top Navbars - Hide on Scroll
    if ($('.navbar-hide-on-scroll').length > 0) {
      $('.navbar-hide-on-scroll.fixed-top').headroom({
        offset: 205,
        tolerance: 5,
        classes: {
          // when element is initialised
          initial: 'headroom',
          // when scrolling up
          pinned: 'headroom--pinned-top',
          // when scrolling down
          unpinned: 'headroom--unpinned-top',
        },
      });
      // Bottom Navbars - Hide on Scroll
      $('.navbar-hide-on-scroll.fixed-bottom').headroom({
        offset: 205,
        tolerance: 5,
        classes: {
          // when element is initialised
          initial: 'headroom',
          // when scrolling up
          pinned: 'headroom--pinned-bottom',
          // when scrolling down
          unpinned: 'headroom--unpinned-bottom',
        },
      });
    }

    //Match content & menu height for content menu
    setTimeout(function () {
      if ($('body').hasClass('vertical-content-menu')) {
        setContentMenuHeight();
      }
    }, 500);
    function setContentMenuHeight() {
      var menuHeight = $('.main-menu').height();
      var bodyHeight = $('.content-body').height();
      if (bodyHeight < menuHeight) {
        $('.content-body').css('height', menuHeight);
      }
    }

    // Collapsible Card
    $('a[data-action="collapse"]').on('click', function (e) {
      e.preventDefault();
      $(this).closest('.card').children('.card-content').collapse('toggle');
      $(this)
        .closest('.card')
        .find('[data-action="collapse"] i')
        .toggleClass('ft-minus ft-plus');
    });

    // Toggle fullscreen
    // $('a[data-action="expand"]').on('click', function (e) {
    //   e.preventDefault();
    //   $(this)
    //     .closest('.card')
    //     .find('[data-action="expand"] i')
    //     .toggleClass('ft-maximize ft-minimize');
    //   $(this).closest('.card').toggleClass('card-fullscreen');
    // });

    // Reload Card
    $('a[data-action="reload"]').on('click', function () {
      var block_ele = $(this).closest('.card');

      // Block Element
      block_ele.block({
        message: '<div class="ft-refresh-cw icon-spin font-medium-2"></div>',
        timeout: 2000, //unblock after 2 seconds
        overlayCSS: {
          backgroundColor: '#FFF',
          cursor: 'wait',
        },
        css: {
          border: 0,
          padding: 0,
          backgroundColor: 'none',
        },
      });
    });

   

    // Match the height of each card in a row
    setTimeout(function () {
      $('.row.match-height').each(function () {
        $(this).find('.card').not('.card .card').matchHeight(); // Not .card .card prevents collapsible cards from taking height
      });
    }, 500);

    $('.card .heading-elements a[data-action="collapse"]').on(
      'click',
      function () {
        var $this = $(this),
          card = $this.closest('.card');
        var cardHeight;

        if (parseInt(card[0].style.height, 10) > 0) {
          cardHeight = card.css('height');
          card.css('height', '').attr('data-height', cardHeight);
        } else {
          if (card.data('height')) {
            cardHeight = card.data('height');
            card.css('height', cardHeight).attr('data-height', '');
          }
        }
      }
    );

    // Add open class to parent list item if subitem is active except compact menu
    var menuType = $body.data('menu');
    if (
      menuType != 'vertical-compact-menu' &&
      menuType != 'horizontal-menu' &&
      compactMenu === false
    ) {
      if ($body.data('menu') == 'vertical-menu-modern') {
        if (localStorage.getItem('menuLocked') === 'true') {
          $('.main-menu-content').find('li.active').parents('li');
          // .addClass('open');
        }
      } else {
        $('.main-menu-content').find('li.active').parents('li');
        // .addClass('open');
      }
    }
    if (menuType == 'vertical-compact-menu' || menuType == 'horizontal-menu') {
      $('.main-menu-content').find('li.active').parents('li:not(.nav-item)');
      // .addClass('open');
      $('.main-menu-content')
        .find('li.active')
        .parents('li')
        .addClass('active');
    }

    //card heading actions buttons small screen support
    $('.heading-elements-toggle').on('click', function () {
      $(this).parent().children('.heading-elements').toggleClass('visible');
    });

    //  Dynamic height for the chartjs div for the chart animations to work
    var chartjsDiv = $('.chartjs'),
      canvasHeight = chartjsDiv.children('canvas').attr('height');
    chartjsDiv.css('height', canvasHeight);

    if ($body.hasClass('boxed-layout')) {
      if (
        $body.hasClass('vertical-overlay-menu') ||
        $body.hasClass('vertical-compact-menu')
      ) {
        var menuWidth = $('.main-menu').width();
        var contentPosition = $('.app-content').position().left;
        var menuPositionAdjust = contentPosition - menuWidth;
        if ($body.hasClass('menu-flipped')) {
          $('.main-menu').css('right', menuPositionAdjust + 'px');
        } else {
          $('.main-menu').css('left', menuPositionAdjust + 'px');
        }
      }
    }

    $('.nav-link-search').on('click', function () {
      var $this = $(this),
        searchInput = $(this).siblings('.search-input');

      if (searchInput.hasClass('open')) {
        searchInput.removeClass('open');
      } else {
        // searchInput.addClass('open');
      }
    });
  });

  $(document).on('click', '.menu-toggle, .modern-nav-toggle', function (e) {
    e.preventDefault();

    // Toggle menu
    $.app.menu.toggle();

    setTimeout(function () {
      $(window).trigger('resize');
    }, 200);

    if ($('#collapsed-sidebar').length > 0) {
      setTimeout(function () {
        if ($body.hasClass('menu-expanded') || $body.hasClass('menu-open')) {
          $('#collapsed-sidebar').prop('checked', false);
        } else {
          $('#collapsed-sidebar').prop('checked', true);
        }
      }, 1000);
    }

    return false;
  });

  /*$('.modern-nav-toggle').on('click',function(){
        var $this = $(this),
        icon = $this.find('.toggle-icon').attr('data-ticon');

        if(icon == 'ft-toggle-right'){
            $this.find('.toggle-icon').attr('data-ticon','ft-toggle-left')
            .removeClass('ft-toggle-right').addClass('ft-toggle-left');
        }
        else{
            $this.find('.toggle-icon').attr('data-ticon','ft-toggle-right')
            .removeClass('ft-toggle-left').addClass('ft-toggle-right');
        }

        $.app.menu.toggle();
    });*/

  $(document).on('click', '.open-navbar-container', function (e) {
    var currentBreakpoint = Unison.fetch.now();

    // Init drilldown on small screen
    $.app.menu.drillDownMenu(currentBreakpoint.name);

    // return false;
  });

  $(document).on('click', '.main-menu-footer .footer-toggle', function (e) {
    e.preventDefault();
    $(this).find('i').toggleClass('pe-is-i-angle-down pe-is-i-angle-up');
    $('.main-menu-footer').toggleClass('footer-close footer-open');
    return false;
  });

  // Add Children Class
  $('.navigation').find('li').has('ul').addClass('has-sub');

  $('.carousel').carousel({
    interval: 2000,
  });

  // Page full screen
  $('.nav-link-expand').on('click', function (e) {
    if (typeof screenfull != 'undefined') {
      if (screenfull.enabled) {
        screenfull.toggle();
      }
    }
  });
  if (typeof screenfull != 'undefined') {
    if (screenfull.enabled) {
      $(document).on(screenfull.raw.fullscreenchange, function () {
        if (screenfull.isFullscreen) {
          $('.nav-link-expand')
            .find('i')
            .toggleClass('ft-minimize ft-maximize');
        } else {
          $('.nav-link-expand')
            .find('i')
            .toggleClass('ft-maximize ft-minimize');
        }
      });
    }
  }

  $(document).on('click', '.mega-dropdown-menu', function (e) {
    e.stopPropagation();
  });

  $(document).ready(function () {
    /**********************************
     *   Form Wizard Step Icon
     **********************************/
    $('.step-icon').each(function () {
      var $this = $(this);
      if ($this.siblings('span.step').length > 0) {
        $this.siblings('span.step').empty();
        $(this).appendTo($(this).siblings('span.step'));
      }
    });
  });

  // Update manual scroller when window is resized
  $(window).resize(function () {
    $.app.menu.manualScroller.updateHeight();
  });

  // TODO : Tabs dropdown fix, remove this code once fixed in bootstrap 4.
  $('.nav.nav-tabs a.dropdown-item').on('click', function () {
    var $this = $(this),
      href = $this.attr('href');
    var tabs = $this.closest('.nav');
    tabs.find('.nav-link').removeClass('active');
    $this.closest('.nav-item').find('.nav-link').addClass('active');
    $this
      .closest('.dropdown-menu')
      .find('.dropdown-item')
      .removeClass('active');
    $this.addClass('active');
    tabs
      .next()
      .find(href)
      .siblings('.tab-pane')
      .removeClass('active in')
      .attr('aria-expanded', false);
    $(href).addClass('active in').attr('aria-expanded', 'true');
  });

  $('#sidebar-page-navigation').on('click', 'a.nav-link', function (e) {
    e.preventDefault();
    e.stopPropagation();
    var $this = $(this),
      href = $this.attr('href');
    var offset = $(href).offset();
    var scrollto = offset.top - 80; // minus fixed header height
    $('html, body').animate({ scrollTop: scrollto }, 0);
    setTimeout(function () {
      $this
        .parent('.nav-item')
        .siblings('.nav-item')
        .children('.nav-link')
        .removeClass('active');
      $this.addClass('active');
    }, 100);
  });
})(window, document, jQuery);

// function copyText() {
//   const dummy = $('.genarated-address').text();
//   console.log({ dummy });
//   var textArea = document.createElement('textarea');
//   textArea.value = dummy;
//   document.body.appendChild(textArea);

//   textArea.select();
//   document.execCommand('copy');
//   textArea.remove();

//   Swal.fire({
//     position: 'center',
//     icon: 'success',
//     title: 'Email Address Copied',
//     text: dummy,

//     showConfirmButton: false,
//     timer: 1500,
//     heightAuto: false,
//   });
// }

function wowAnimation() {
  new WOW({
    offset: 100,
    mobile: false,
  }).init();
}
wowAnimation();

$('.faq .card').each(function () {
  var $this = $(this);
  $this.on('click', function (e) {
    var has = $this.hasClass('active');
    $('.faq .card').removeClass('active');
    if (has) {
      $this.removeClass('active');
    } else {
      $this.addClass('active');
    }
  });
});

// Section Background Image
$('[data-bg-image]').each(function () {
  var img = $(this).data('bg-image');
  $(this).css({
    backgroundImage: 'url(' + img + ')',
  });
});

// hide/display sections

// navigation buttons
const indexBtns = document.querySelectorAll('.home-btn');
const contactBtn = document.querySelector('.contact-btn');
const contactBtnFromBlog = document.querySelector('.contact-btn-blog');
const contactBtnFromFaq = document.querySelector('.faq-contact-btn');

const redirectToContactBtns = [
  contactBtn,
  contactBtnFromBlog,
  contactBtnFromFaq,
];

const blogBtn = document.querySelector('.blog-btn');
const inboxBtn = document.querySelector('.inbox-btn');
const singleEmailBtn = document.querySelector('.email__list-btn');
const serviceBtn = document.querySelector('.service-btn');
const usermanualBtn = document.querySelector('.user_manual-btn');
const statusBtn = document.querySelector('.status-btn');
const faqBtn = document.querySelector('.faq-btn');
const privacyBtns = document.querySelectorAll('.privacy-btn');
const termsBtns = document.querySelectorAll('.terms-btn');

const readmoreOneBtn = document.querySelector('.read-more-one');
const readmoreTwoBtn = document.querySelector('.read-more-two');
const readmoreThreeBtn = document.querySelector('.read-more-three');
const readmoreFourBtn = document.querySelector('.read-more-four');
const readmoreFiveBtn = document.querySelector('.read-more-five');
const readmoreSixBtn = document.querySelector('.read-more-six');
const readmoreSevenBtn = document.querySelector('.read-more-seven');
const readmoreEightBtn = document.querySelector('.read-more-eight');
const readmoreNineBtn = document.querySelector('.read-more-nine');

// blog titles
const blogOneTitle = document.querySelector('.blog-one-title');
const blogTwoTitle = document.querySelector('.blog-two-title');
const blogThreeTitle = document.querySelector('.blog-three-title');
const blogFourTitle = document.querySelector('.blog-four-title');
const blogFiveTitle = document.querySelector('.blog-five-title');
const blogSixTitle = document.querySelector('.blog-six-title');
const blogSevenTitle = document.querySelector('.blog-seven-title');
const blogEightTitle = document.querySelector('.blog-eight-title');
const blogNineTitle = document.querySelector('.blog-nine-title');

const redirectFromService = document.querySelector('.external-blog');

const redirectToBlogOne = [readmoreOneBtn, blogOneTitle];
const redirectToBlogTwo = [readmoreTwoBtn, blogTwoTitle];
const redirectToBlogThree = [readmoreThreeBtn, blogThreeTitle];
const redirectToBlogFour = [readmoreFourBtn, blogFourTitle];
const redirectToBlogFive = [readmoreFiveBtn, blogFiveTitle];
const redirectToBlogSix = [readmoreSixBtn, blogSixTitle];
const redirectToBlogSeven = [readmoreSevenBtn, blogSevenTitle];
const redirectToBlogEight = [
  readmoreEightBtn,
  blogEightTitle,
  redirectFromService,
];
const redirectToBlogNine = [readmoreNineBtn, blogNineTitle];

// different sections of the site
const indexSection = document.querySelector('.index');
const contactSection = document.querySelector('.contact');
const blogSection = document.querySelector('.blog');
const serviceSection = document.querySelector('.our-service');
const usermanualSection = document.querySelector('.user-manual');
const statusSection = document.querySelector('.status-section');
const faqSection = document.querySelector('.faq-section');
const privacySection = document.querySelector('.privacy-section');
const termsSection = document.querySelector('.terms-section');
const emailListSection = document.querySelector('.email-list-section');
// TODO DEMO ONLY
const singleEmailSection = document.querySelector('.single-email-section');
const errorSection = document.querySelector('.error-section');

const blogSingleSectionOne = document.querySelector('.blog-single-section');
const blogTwoSection = document.querySelector('.blog-two-section');
const blogThreeSection = document.querySelector('.blog-three-section');
const blogFourSection = document.querySelector('.blog-four-section');
const blogFiveSection = document.querySelector('.blog-five-section');
const blogSixSection = document.querySelector('.blog-six-section');
const blogSevenSection = document.querySelector('.blog-seven-section');
const blogEightSection = document.querySelector('.blog-eight-section');
const blogNineSection = document.querySelector('.blog-nine-section');

const blogNavItem = document.querySelector('.blog-nav-item');
const contactNavItem = document.querySelector('.contact-nav-item');
const servicesNavItem = document.querySelector('.services-nav-item');
const userManualNavItems = document.querySelector('.user_manual-nav-item');
const statusNavItems = document.querySelector('.status-nav-item');
const faqNavItems = document.querySelector('.faq-nav-item');
const privacyNavItems = document.querySelector('.privacy-nav-item');
const termsNavItem = document.querySelector('.terms-nav-item');
const dashboardNavItem = document.querySelector('.dashboard-opener');

const menuBar = document.querySelector('.nav-link.nav-menu-main.menu-toggle.hidden-xs');



// this is used whenever the window is resized




function hideVerticalMenu() {
 
 
  // document.querySelector('body').classList.add('menu-hide');
  // document.querySelector('body').classList.remove('menu-open');
 

  if($(window).width()<=768){
    document.querySelector('body').classList.add('menu-hide');
    document.querySelector('body').classList.remove('menu-open');
    menuBar.click();
} 




}

const navItemArray = [
  blogNavItem,
  contactNavItem,
  servicesNavItem,
  userManualNavItems,
  statusNavItems,
  faqNavItems,
  privacyNavItems,
  termsNavItem,
  dashboardNavItem,
];

indexBtns.forEach((btn) => {
  btn.addEventListener('click', function () {
    moveToThatSection(
      'TemporaryMail.com - Disposable Email Service',
      '/',
      indexSection
    );

    hideVerticalMenu();
  });
});

redirectToContactBtns.forEach((btn) => {
  btn &&
    btn.addEventListener('click', function () {
      moveToThatSection(
        'Contact - TemporaryMail.com',
        '/contact/',
        contactSection
      );

      hideVerticalMenu();
    });
});

blogBtn.addEventListener('click', function () {
  moveToThatSection('Blog - TemporaryMail.com', '/blog/', blogSection);
  hideVerticalMenu();
});

const blogBackBtn = document.querySelector('.blog-back');
const blogBackTwoBtn = document.querySelector('.blog-back-two');
const blogBackThreeBtn = document.querySelector('.blog-back-three');
const blogBackFourBtn = document.querySelector('.blog-back-four');
const blogBackFiveBtn = document.querySelector('.blog-back-five');
const blogBackSixBtn = document.querySelector('.blog-back-six');
const blogBackSevenBtn = document.querySelector('.blog-back-seven');
const blogBackEightBtn = document.querySelector('.blog-back-eight');
const blogBackNineBtn = document.querySelector('.blog-back-nine');

const backButtons = [
  blogBackBtn,
  blogBackTwoBtn,
  blogBackThreeBtn,
  blogBackFourBtn,
  blogBackFiveBtn,
  blogBackSixBtn,
  blogBackSevenBtn,
  blogBackEightBtn,
  blogBackNineBtn,
];

backButtons.forEach((btn) => {
  btn.addEventListener('click', function () {
    moveToThatSection('Blog - TemporaryMail.com', '/blog/', blogSection);
    hideVerticalMenu();
  });
});

redirectToBlogOne.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'One Year Active',
      '/blog/one-year-active/',
      blogSingleSectionOne
    );
  });
});

redirectToBlogTwo.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'New features have been added',
      '/blog/new-features-have-been-added/',
      blogTwoSection
    );
  });
});

redirectToBlogThree.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'Status page and stability',
      '/blog/status-page-stability/',
      blogThreeSection
    );
  });
});

redirectToBlogFour.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'There has been more downtime',
      '/blog/more-downtime/',
      blogFourSection
    );
  });
});

redirectToBlogFive.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'Server issues and encoding improvements',
      '/blog/server-issues-and-encoding-improvements/',
      blogFiveSection
    );
  });
});

redirectToBlogSix.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'Security patches and additonal domains',
      '/blog/security-patches-additional-domains/',
      blogSixSection
    );
  });
});

redirectToBlogSeven.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'TemporaryMail.com is in the BETA stage',
      '/blog/temporary-mail-is-in-the-beta-stage/',
      blogSevenSection
    );
  });
});

redirectToBlogEight.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'https://temporarymail.com/blog/how-secure-are-disposable-email-services/',
      '/blog/how-secure-are-disposable-email-services/',
      blogEightSection
    );
  });
});

redirectToBlogNine.forEach((element) => {
  element.addEventListener('click', function () {
    moveToThatSection(
      'TemporaryMail has been launched',
      '/blog/site-launched/',
      blogNineSection
    );
  });
});

serviceBtn.addEventListener('click', function () {
  moveToThatSection(
    'Services - TemporaryMail.com',
    '/services/',
    serviceSection
  );

  hideVerticalMenu();
});

usermanualBtn.addEventListener('click', function () {
  moveToThatSection(
    'How to Use - TemporaryMail.com',
    '/user-manual/',
    usermanualSection
  );

  hideVerticalMenu();
});

statusBtn.addEventListener('click', function () {
  moveToThatSection('Status - TemporaryMail.com', '/status/', statusSection);
  hideVerticalMenu();
});

faqBtn.addEventListener('click', function () {
  moveToThatSection('Faq - TemporaryMail.com', '/faq/', faqSection);
  hideVerticalMenu();
});

privacyBtns.forEach((btn) => {
  btn.addEventListener('click', function () {
    moveToThatSection(
      'Privacy Policy - TemporaryMail.com',
      '/privacy-policy/',
      privacySection
    );
    hideVerticalMenu();
  });
});

termsBtns.forEach((btn) => {
  btn.addEventListener('click', function () {
    moveToThatSection(
      'Terms of Service - TemporaryMail.com',
      '/terms-of-service/',
      termsSection
    );

    hideVerticalMenu();
  });
});

inboxBtn.addEventListener('click', function () {
  moveToThatSection('Emails - TemporaryMail.com', '/emails/', emailListSection);
  hideVerticalMenu();
});

singleEmailBtn.addEventListener('click', function () {
  moveToThatSection('Email - TemporaryMail.com', '/', singleEmailSection);
  hideVerticalMenu();
});

document
  .querySelector('.dashboard-opener')
  .addEventListener('click', function () {
    moveToThatSection(
      'TemporaryMail.com - Disposable Email Service',
      '/',
      indexSection
    );
    // hideVerticalMenu();
  });

// handle the page refresh
switch (window.location.pathname) {
  case '/blog/':
  case '/blog':
    // show blog page
    showSection(blogSection, 'Blog - TemporaryMail.com');

    // highlight blog section in nav

    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/',
        innerhtml: document.body.innerHTML,
        title: 'Blog - TemporaryMail.com',
      },
      '',
      '/blog/'
    );

    break;

  case '/blog/one-year-active/':
  case '/blog/one-year-active':
    showSection(blogSingleSectionOne, 'One Year Active');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/one-year-active/',
        innerhtml: document.body.innerHTML,
        title: 'One Year Active',
      },
      '',
      '/blog/one-year-active/'
    );

    break;

  case '/blog/new-features-have-been-added/':
  case '/blog/new-features-have-been-added':
    showSection(blogTwoSection, 'New features have been added');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/new-features-have-been-added/',
        innerhtml: document.body.innerHTML,
        title: 'New features have been added',
      },
      '',
      '/blog/new-features-have-been-added/'
    );

    break;

  case '/blog/status-page-stability/':
  case '/blog/status-page-stability':
    showSection(blogThreeSection, 'Status page and stability');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/status-page-stability/',
        innerhtml: document.body.innerHTML,
        title: 'Status page and stability',
      },
      '',
      '/blog/status-page-stability/'
    );

    break;

  case '/blog/more-downtime/':
  case '/blog/more-downtime':
    showSection(blogFourSection, 'There has been more downtime');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/more-downtime/',
        innerhtml: document.body.innerHTML,
        title: 'There has been more downtime',
      },
      '',
      '/blog/more-downtime/'
    );

    break;

  case '/blog/server-issues-and-encoding-improvements/':
  case '/blog/server-issues-and-encoding-improvements':
    showSection(blogFiveSection, 'Server issues and encoding improvements');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/server-issues-and-encoding-improvements/',
        innerhtml: document.body.innerHTML,
        title: 'Server issues and encoding improvements',
      },
      '',
      '/blog/server-issues-and-encoding-improvements/'
    );

    break;

  case '/blog/security-patches-additional-domains/':
  case '/blog/security-patches-additional-domains':
    showSection(blogSixSection, 'Security patches and additonal domains');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/security-patches-additional-domains/',
        innerhtml: document.body.innerHTML,
        title: 'Security patches and additonal domains',
      },
      '',
      '/blog/security-patches-additional-domains/'
    );

    break;

  case '/blog/temporary-mail-is-in-the-beta-stage/':
  case '/blog/temporary-mail-is-in-the-beta-stage':
    showSection(blogSevenSection, 'TemporaryMail.com is in the BETA stage');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/temporary-mail-is-in-the-beta-stage/',
        innerhtml: document.body.innerHTML,
        title: 'TemporaryMail.com is in the BETA stage',
      },
      '',
      '/blog/temporary-mail-is-in-the-beta-stage/'
    );

    break;

  case '/blog/how-secure-are-disposable-email-services/':
  case '/blog/how-secure-are-disposable-email-services':
    showSection(blogEightSection, 'How secure are disposable email services?');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/how-secure-are-disposable-email-services/',
        innerhtml: document.body.innerHTML,
        title: 'How secure are disposable email services?',
      },
      '',
      '/blog/how-secure-are-disposable-email-services/'
    );

    break;

  case '/blog/site-launched/':
  case '/blog/site-launched':
    showSection(blogNineSection, 'TemporaryMail has been launched');
    blogNavItem.classList.add('open');

    history.pushState(
      {
        url: '/blog/site-launched/',
        innerhtml: document.body.innerHTML,
        title: 'TemporaryMail has been launched',
      },
      '',
      '/blog/site-launched/'
    );

    break;

  case '/contact/':
  case '/contact':
    // show contact page
    showSection(contactSection, 'Contact - TemporaryMail.com');

    contactNavItem.classList.add('open');

    history.pushState(
      {
        url: '/contact/',
        innerhtml: document.body.innerHTML,
        title: 'Contact - TemporaryMail.com',
      },
      '',
      '/contact/'
    );

    break;

  case '/services/':
  case '/services':
    // show services Page
    showSection(serviceSection, 'Services - TemporaryMail.com');
    servicesNavItem.classList.add('open');

    history.pushState(
      {
        url: '/services/',
        innerhtml: document.body.innerHTML,
        title: 'Services - TemporaryMail.com',
      },
      '',
      '/services/'
    );

    break;

  case '/user-manual/':
  case '/user-manual':
    // show User Manual Page
    showSection(usermanualSection, 'How to Use - TemporaryMail.com');

    userManualNavItems.classList.add('open');

    history.pushState(
      {
        url: '/user-manual/',
        innerhtml: document.body.innerHTML,
        title: 'How to Use - TemporaryMail.com',
      },
      '',
      '/user-manual/'
    );

    break;

  case '/status/':
  case '/status':
    // show Status Page
    showSection(statusSection, 'Status - TemporaryMail.com');

    statusNavItems.classList.add('open');

    history.pushState(
      {
        url: '/status/',
        innerhtml: document.body.innerHTML,
        title: 'Status - TemporaryMail.com',
      },
      '',
      '/status/'
    );

    break;

  case '/faq/':
  case '/faq':
    // show Status Page
    showSection(faqSection, 'Faq - TemporaryMail.com');

    faqNavItems.classList.add('open');

    history.pushState(
      {
        url: '/faq/',
        innerhtml: document.body.innerHTML,
        title: 'Faq - TemporaryMail.com',
      },
      '',
      '/faq/'
    );

    break;

  case '/privacy-policy/':
  case '/privacy-policy':
    // show Status Page
    showSection(privacySection, 'Privacy Policy - TemporaryMail.com');

    privacyNavItems.classList.add('open');

    history.pushState(
      {
        url: '/privacy-policy/',
        innerhtml: document.body.innerHTML,
        title: 'Privacy Policy - TemporaryMail.com',
      },
      '',
      '/privacy-policy/'
    );

    break;

  case '/terms-of-service/':
  case '/terms-of-service':
    // show Status Page
    showSection(termsSection, 'Terms of Service - TemporaryMail.com');

    termsNavItem.classList.add('open');

    history.pushState(
      {
        url: '/terms-of-service/',
        innerhtml: document.body.innerHTML,
        title: 'Terms of Service - TemporaryMail.com',
      },
      '',
      '/terms-of-service/'
    );

    break;

  case '/emails/':
  case '/emails':
    dashboardNavItem.classList.add('open');

    // show email list
    showSection(emailListSection, 'Emails - TemporaryMail.com');
    history.pushState(
      {
        url: '/emails/',
        innerhtml: document.body.innerHTML,
        title: 'Emails - TemporaryMail.com',
      },
      '',
      '/emails/'
    );

    break;

  case '/':
    // add highlighed dashboard in navbar

    dashboardNavItem.classList.add('open');

    history.pushState(
      {
        url: '/',
        innerhtml: document.body.innerHTML,
        title: 'TemporaryMail.com - Disposable Email Service',
      },
      '',
      '/'
    );

    break;

  default:
    showSection(errorSection, '404 - Not Found');

    history.pushState(
      {
        url: `/${window.location.pathname}/`,
        innerhtml: document.body.innerHTML,
        title: '404 - Not Found',
      },
      '',
      window.location.pathname
    );

    break;
}

function showSection(sectionToShow, pageTitle) {
  //  first: hide all Section
  if (indexSection) {
    indexSection.style.display = 'none';
  }
  blogSection.style.display = 'none';
  contactSection.style.display = 'none';
  serviceSection.style.display = 'none';
  usermanualSection.style.display = 'none';
  statusSection.style.display = 'none';
  faqSection.style.display = 'none';
  blogSingleSectionOne.style.display = 'none';
  blogTwoSection.style.display = 'none';
  blogThreeSection.style.display = 'none';
  blogFourSection.style.display = 'none';
  blogFiveSection.style.display = 'none';
  blogSixSection.style.display = 'none';
  blogSevenSection.style.display = 'none';
  blogEightSection.style.display = 'none';
  blogNineSection.style.display = 'none';
  privacySection.style.display = 'none';
  termsSection.style.display = 'none';
  emailListSection.style.display = 'none';
  singleEmailSection.style.display = 'none';

  if (errorSection) {
    errorSection.style.display = 'none';
  }

  // show passed sections
  sectionToShow.style.display = 'block';

  document.title = pageTitle;
}

function moveToThatSection(title, url, section) {
  showSection(section, title);

  const stateObj = {
    url,
    innerhtml: document.body.innerHTML,
    title,
  };

  history.pushState(stateObj, '', url);
  scrollToTop();
}

// handle browser backward and forward button
window.onpopstate = function (event) {
  console.log('what');
  function handlePopState(section, sectionName, navItem) {
    showSection(section, sectionName);
    navItemArray.forEach((item) => {
      if (item.classList.contains('open')) {
        item.classList.remove('open');
      }
    });
    navItem.classList.add('open');
  }

  console.log({ ash: history });

  switch (history.state.url) {
    case '/contact/':
      console.log('I am contact');
      handlePopState(contactSection, 'Contact', contactNavItem);
      break;

    case '/blog/':
      handlePopState(blogSection, 'Blog', blogNavItem);
      break;

    case '/blog/one-year-active/':
      handlePopState(blogSingleSectionOne, 'Blog', blogNavItem);
      break;

    case '/blog/new-features-have-been-added/':
      handlePopState(blogTwoSection, 'Blog', blogNavItem);
      break;

    case '/blog/status-page-stability/':
      handlePopState(blogThreeSection, 'Blog', blogNavItem);
      break;

    case '/blog/more-downtime/':
      handlePopState(blogFourSection, 'Blog', blogNavItem);
      break;

    case '/blog/server-issues-and-encoding-improvements/':
      handlePopState(blogFiveSection, 'Blog', blogNavItem);
      break;

    case '/blog/security-patches-additional-domains/':
      handlePopState(blogSixSection, 'Blog', blogNavItem);
      break;

    case '/blog/temporary-mail-is-in-the-beta-stage/':
      handlePopState(blogSevenSection, 'Blog', blogNavItem);
      break;

    case '/blog/how-secure-are-disposable-email-services/':
      handlePopState(blogEightSection, 'Blog', blogNavItem);
      break;

    case '/blog/site-launched/':
      handlePopState(blogNineSection, 'Blog', blogNavItem);
      break;

    case '/services/':
      handlePopState(serviceSection, 'Services', servicesNavItem);
      break;

    case '/user-manual/':
      handlePopState(usermanualSection, 'How to Use', userManualNavItems);
      break;

    case '/status/':
      handlePopState(statusSection, 'Status', statusNavItems);
      break;

    case '/faq/':
      handlePopState(faqSection, 'Faq', faqNavItems);
      break;

    case '/privacy-policy/':
      handlePopState(privacySection, 'Privacy', privacyNavItems);
      break;

    case '/terms-of-service/':
      handlePopState(termsSection, 'Terms', termsNavItem);
      break;

    case '/emails/':
      handlePopState(emailListSection, 'Emails', dashboardNavItem);
      break;

    case '/':
      handlePopState(indexSection, 'TemporaryMail', dashboardNavItem);
      break;

    default:
      handlePopState(errorSection, '404', dashboardNavItem);
      break;
  }
};

function scrollToTop() {
  window.scrollTo(0, 0);
}

// error page js

function randomNum() {
  'use strict';
  return Math.floor(Math.random() * 9) + 1;
}

var loop1,
  loop2,
  loop3,
  time = 30,
  i = 0,
  number,
  selector3 = document.querySelector('.thirdDigit'),
  selector2 = document.querySelector('.secondDigit'),
  selector1 = document.querySelector('.firstDigit');
loop3 = setInterval(function () {
  'use strict';
  if (i > 40) {
    clearInterval(loop3);
    selector3.textContent = 4;
  } else {
    selector3.textContent = randomNum();
    i++;
  }
}, time);
loop2 = setInterval(function () {
  'use strict';
  if (i > 80) {
    clearInterval(loop2);
    selector2.textContent = 0;
  } else {
    selector2.textContent = randomNum();
    i++;
  }
}, time);
loop1 = setInterval(function () {
  'use strict';
  if (i > 100) {
    clearInterval(loop1);
    selector1.textContent = 4;
  } else {
    selector1.textContent = randomNum();
    i++;
  }
}, time);

// $(function () {
//   $('.menu-item.refresh').on('mouseover', function (e) {
//     $('.menu-item.inbox').addClass('transparent');
//   });
// });

// $(function () {
//   $('.menu-item.inbox').on('mouseover', function (e) {
//     $('.menu-item.refresh').addClass('transparent');
//   });
// });

var confettiSettings = { target: 'my-canvas', clock: '15', max: 120 };
var confetti = new ConfettiGenerator(confettiSettings);
const myConfetti = document.querySelector('#my-canvas');
confetti.render();

function copyText() {
  myConfetti.classList.add('active');

  const dummy = $('.genarated-address').text();
  console.log({ dummy });
  var textArea = document.createElement('textarea');
  textArea.value = dummy;
  document.body.appendChild(textArea);

  textArea.select();
  document.execCommand('copy');
  textArea.remove();

  Swal.fire({
    position: 'center',
    icon: 'success',
    title: 'Email Address Copied',
    text: dummy,

    showConfirmButton: false,
    timer: 2500,
    heightAuto: false,
  });

  document
    .querySelector('.swal2-backdrop-show')
    .addEventListener('click', function () {
      console.log('test kori dekhay dibu');
      myConfetti.classList.remove('active');
    });

  setTimeout(() => {
    myConfetti.classList.remove('active');
  }, 2500);
}

// cookie related script
let popUp = document.getElementById('cookiePopup');

// when user clicks the accept button
document.getElementById('acceptCookie').addEventListener('click', () => {
  //Create date object
  let d = new Date();
  //Increment the current time by 1 minute (cookie will expire after 1 minute)
  d.setMinutes(2 + d.getMinutes());

  //Create Cookie withname = myCookieName, value = thisIsMyCookie and expiry time=1 minute
  document.cookie = 'myCookieName=thisIsMyCookie; expires = ' + d + ';';

  //Hide the popup
  popUp.classList.add('hide');
  popUp.classList.remove('show');
});

//Check if cookie is already present
const checkCookie = () => {
  //Read the cookie and split on "="
  let input = document.cookie.split('=');
  //Check for our cookie
  if (input[0] == 'myCookieName') {
    //Hide the popup
    popUp.classList.add('hide');
    popUp.classList.remove('show');
  } else {
    //Show the popup
    popUp.classList.add('show');
    popUp.classList.remove('hide');
  }
};

// check if cookie exists when page load

window.onload = () => {
  setTimeout(() => {
    checkCookie();
  }, 2000);
};
