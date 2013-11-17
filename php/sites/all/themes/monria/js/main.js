$(function () {


    var Browser = {browser: null, version: null};

    Browser.isIE = function (ver) {
        if (Browser.browser == 'Explorer' && Browser.version == ver)
            return true;
    };

    Browser.browser = BrowserDetect.browser;
    Browser.version = BrowserDetect.version;


    var $doc = $(document);


    $doc.on('scroll', scrollMain);

    var nav = $('.gamecontent_reposition .navigation');
    var navInner = $('.gamecontent_reposition_inner .navigation');

    function scrollMain() {
        if (!nav.hasClass('is-fixed') && $doc.scrollTop() >= 647) attachNav();
        if (nav.hasClass('is-fixed') && $doc.scrollTop() < 647) attachNav();

        if ($(".gamecontent_reposition_inner")[0]) {
            if (!navInner.hasClass('is-fixed') && $doc.scrollTop() >= 332) attachNav();
            if (navInner.hasClass('is-fixed') && $doc.scrollTop() < 332) attachNav();
        }
    }

    function attachNav() {
        nav.toggleClass('is-fixed');
        navInner.toggleClass('is-fixed');
    }

    $("#task_bar").jScroll({top: 360});

    $(".navigation a").hover(
        function () {

            $(this).css("opacity", 0);

            $(this).stop().animate({"opacity": 1});
        },
        function () {
            $(this).stop().animate({"opacity": 0});
        }
    );

    $("#flashBox a").hover(
        function () {

            $(this).css("opacity", 0);

            $(this).stop().animate({"opacity": 1});
        },
        function () {
            $(this).stop().animate({"opacity": 0});
        }
    );

    $(".btns_content a").hover(
        function () {

            $(this).css("opacity", 0);

            $(this).stop().animate({"opacity": 1});
        },
        function () {
            $(this).stop().animate({"opacity": 0});
        }
    );


  $('.service-support').hover(function(){

        $( ".support-menu").stop(true,true).delay(300 ).fadeIn();
    },function(){
        $( ".support-menu").stop(true,true).delay( 300 ).fadeOut();
    });
});


