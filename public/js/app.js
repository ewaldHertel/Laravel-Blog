/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

$(window).ready(function () {
    var wHeight = $(window).height();

    if (wHeight > 800) {
        $('.welcome').css('min-height', 800);
        $('.about-section').css('min-height', 800);
        $('.project').css('min-height', 800);
        $('.latest-blog').css('min-height', 800);
        //document.getElementById("skills").innerHTML = wHeight;
    } else {
        $('.welcome').css('min-height', wHeight);
        $('.about-section').css('min-height', wHeight);
        $('.project').css('min-height', wHeight);
        $('.latest-blog').css('min-height', wHeight);
        $(window).resize(function () {
            $('.welcome').css('min-height', wHeight);
            $('.about-section').css('min-height', wHeight);
            $('.project').css('min-height', wHeight);
            $('.latest-blog').css('min-height', wHeight);
        });
    }

    /*---------------------------------------*/
    /*  JQUERY FOR PAGE SCROLLING FEATURE
     /*  requires jQuery Easing plugin
     /*---------------------------------------*/
    var pageScroll = function pageScroll() {
        $('.page-scroll a').bind('click', function (e) {
            e.preventDefault();

            var $anchor = $(this);

            //noinspection JSJQueryEfficiency
            var offset = $('body').attr('data-offset');

            if ($('.navbar.navbar-fixed-top').hasClass('side-menu') && $(window).width() >= 992) {
                //noinspection JSJQueryEfficiency
                $('body').data('offset', 1);
                //noinspection JSJQueryEfficiency
                offset = $('body').data('offset');
            }

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - (offset - 1)
            }, 1500, 'easeInOutExpo');

            $('.navbar-rj-collapse').collapse('hide');
        });
    };
    function parallaxInit() {
        $('#welcome').parallax("50%", 0.2);
        $('#project').parallax("50%", 0.3);
    }

    $(window).bind("load", function () {
        parallaxInit();
    });

    /*---------------------------------------*/
    /*  STICKY NAVBAR
     /*---------------------------------------*/
    $('.navbar.navbar-fixed-top').sticky({ topSpacing: 0 });

    var stickySideMenu = function stickySideMenu() {
        var navbar = $('.navbar.navbar-fixed-top.side-menu');

        if ($(window).width() >= 992) {
            navbar.unstick();
        } else {
            navbar.unstick();
            navbar.sticky({ topSpacing: 0 });
        }
    };

    pageScroll();
    stickySideMenu();

    //noinspection JSUnresolvedFunction
    $(window).smartresize(function () {
        pageScroll();
        stickySideMenu();
    });

    $('.navbar-trigger-open').click(function (e) {
        e.preventDefault();
        $('.navbar.side-menu').toggleClass('active');
        $('body.push.push-left').toggleClass('pushed-left');
        $('body.push.push-right').toggleClass('pushed-right');
    });

    $('.navbar-trigger-close').click(function (e) {
        e.preventDefault();
        $('.navbar.side-menu').toggleClass('active');
        $('body.push.push-left').toggleClass('pushed-left');
        $('body.push.push-right').toggleClass('pushed-right');
    });

    /*==========================
        Intro typer
    ============================*/
    var element = $(".element");

    $(function () {
        element.typed({
            strings: ["Ewald Hertel.", "Developer.", "Photographer.", "Biker."],
            typeSpeed: 100,
            loop: true
        });
    });
});

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);