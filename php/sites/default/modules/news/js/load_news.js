$(function () {
    $.get( base+"load_news", function( data ) {
        $( "news_more" ).append( data );
        alert( "Load was performed." );
    });
});
