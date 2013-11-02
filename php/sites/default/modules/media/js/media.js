var items =0 ;
if (typeof Object.create !== 'function') {
    Object.create = function (o) {
        function F() {}
        F.prototype = o;
        return new F();
    };
}

var ScreenshotCarousel = {
    element: null,
    ui: {},
    items: [],
    indicators: [],
    currentIndex: null,
    build: function (element, config) {

        var instance = Object.create(ScreenshotCarousel);
        instance.init(element, config);
        return instance;
    },
    init: function (element, config) {
        this.element = $(element);
        this.config = config;
// identify UI elements
        this.ui.prevButton = $(document).find("#screenshot-prev");
        this.ui.nextButton = $(document).find("#screenshot-next");
        this.ui.zoomButton = this.element.find("#screenshot-zoom");
        this.ui.indicators = this.element.find("#screenshot-indicators");
        // traverse the dom and find the items
        this.loadItems();
        // bind events to make ui functional
        this.initEvents();
    },

    initEvents: function () {
        var _this = this;
        this.ui.prevButton.on("click.carousel", function () {
            _this.prev();
        });
        this.ui.nextButton.on("click.carousel", function () {
            _this.next();
        });
        this.ui.zoomButton.on("click.carousel", function () {
            _this.zoom();
        });
        this.ui.indicators.on("click.carousel", ".screenshot-indicator", function (event) {
            var item = (event.target.className.indexOf('screenshot-indicator') !== -1) ? event.target : event.target.parentNode;
            _this.showItem($(item).data("index"));
        });
    },
    loadItems: function () {
       items = this.element.find("img.item");
// Build local array of images
        for (var i = 0; i < items.length; i++) {
            this.createItem(items[i]);
            this.createItemIndicator(i);
        }
// Build indicators
        for (i = 0; i < this.indicators.length; i++) {
            this.ui.indicators.append(this.indicators[i].element);
        }
// Set current to first item in array
        this.showItem(0);
    },
    createItem: function (element) {
        this.items.push({
            element: $(element),
            thumb: $(element).attr("src"),
            src: $(element).data("full"),
            title: $(element).data("title")
        });
    },
    createItemIndicator: function (index) {
        this.indicators.push({
            element: $('<span />').addClass('screenshot-indicator').attr("data-index", index)
        });
    },
    next: function () {
        var showIndex = (this.currentIndex + 1 <= this.items.length - 1) ? this.currentIndex + 1 : 0;
        this.showItem(showIndex);
    },
    prev: function () {
        var showIndex = (this.currentIndex - 1 >= 0) ? this.currentIndex - 1 : this.items.length - 1;
        this.showItem(showIndex);
    },
    zoom: function () {
        Lightbox.loadImage(this.items, false, this.currentIndex);
    },
    showItem: function (itemIndex) {
        if (this.currentIndex != null) {
            this.items[this.currentIndex].element.removeClass("active");
            this.indicators[this.currentIndex].element.removeClass("active");
        }
// set new current
        this.currentIndex = itemIndex;
        this.items[this.currentIndex].element.addClass("active");
        this.indicators[this.currentIndex].element.addClass("active");
    }
};
$(function () {
    $('#screenshot-zoom').click(function (e) {

        //$('#sign_up').find('input:first').focus()
        var lightbox = $('#lightbox-monria');
        var img = new Image();
        img.onload = function () {
            width = this.width;
            height = this.height;
            $('#bg').fadeIn();
            lightbox.fadeIn();
            lightbox.children('#container').css('width', width);
            lightbox.children('#container').css('height', height);
            lightbox.children('#container').children('#m-top').css('width', width);
            lightbox.children('#container').children('#m-top-bg').css('width', width);
            lightbox.children('#container').children('#m-bottom-bg').css('width', width);
            lightbox.children('#container').children('#m-bottom').css('width', width);
            lightbox.children('#container').children('#m-left').css('height', height);
            lightbox.children('#container').children('#m-right').css('height', height);
            lightbox.children('#container').children('img').attr('src', img.src);
        }
        if($("#isVideo" ).length == 0) {
            //it doesn't exist
            img.src = $('.item.active').data('full');
        } else {
            width =  640;
            height = 390;
            $('#bg').fadeIn();
            lightbox.fadeIn();
            lightbox.children('#container').css('width', width);
            lightbox.children('#container').css('height', height);
            lightbox.children('#container').children('#m-top').css('width', width);
            lightbox.children('#container').children('#m-top-bg').css('display', 'none');
            lightbox.children('#container').children('#m-bottom-bg').css('display','none');
            lightbox.children('#container').children('#m-bottom').css('width', width);
            lightbox.children('#container').children('#m-left').css('height', height);
            lightbox.children('#container').children('#m-right').css('height', height);
            lightbox.children('#container').children('img').remove();
            lightbox.children('#container').children('#inner').html('<iframe id="ytplayer" type="text/html" width="640" height="390" src="'+$('.item.active').data('full')+'" frameborder="0"/>');
        }



    });

    $('#close-lightbox').click(function (e) {
        var lightbox = $('#lightbox-monria');
        $('#bg').fadeOut();
        lightbox.fadeOut();
        lightbox.children('#container').children('img').attr('src', '');
    });

    $('#bg').click(function (e) {
        var lightbox = $('#lightbox-monria');
        $('#bg').fadeOut();
        lightbox.fadeOut();
        lightbox.children('#container').children('img').attr('src', '');
    });
    $('#lightbox-monria').children('#container').children('#arrow-right').click(function (e) {
        $( "#screenshot-next" ).trigger( "click" );
        $( "#screenshot-zoom" ).trigger( "click" );
    });
    $('#lightbox-monria').children('#container').children('#arrow-left').click(function (e) {
        $( "#screenshot-prev" ).trigger( "click" );
        $( "#screenshot-zoom" ).trigger( "click" );
    });
});

var _preventEvent = false;


function setScrollLeft(amount) {
    _preventEvent = true;
    window.scrollLeft = amount;
}

window.onscroll = function () {
    if (_preventEvent) {
        _preventEvent = false;
        return;
    }
}