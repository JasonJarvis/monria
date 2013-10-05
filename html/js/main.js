$(function () {

    var $doc = $(document);


    $doc.on('scroll', scrollMain);

    var nav = $('.navigation');

    function scrollMain() {
        if (!nav.hasClass('is-fixed') && $doc.scrollTop() >= 647) attachNav();
        if (nav.hasClass('is-fixed') && $doc.scrollTop() < 647) attachNav();
    }

    function attachNav() {
        nav.toggleClass('is-fixed');
    }

    $("#task_bar").jScroll({top: 150});
});


