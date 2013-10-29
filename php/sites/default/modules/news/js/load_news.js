$(function () {
    $.get( base+"load_news", function( data ) {
        $( ".news_more" ).html( $(data).hide().fadeIn(1000));

        total_loaded = current * 3;
        if(total_loaded < news_cnt ) {
        $('.read_more').css('display','block');
        }
        current++;
    });

    $(document).on('click','.read_more',function() {
        $.get( base+"load_news/"+current, function( data ) {
            $( ".news_more" ).append( $(data).hide().fadeIn(1000));
        });

        total_loaded = current * 3;
        if(total_loaded >= news_cnt ) {
            $('.read_more').css('display','none');
        }
        current++;
    });

});
