$('a[href*="#"]').click(function(event) {
    var href = $(this.hash);
    if (href.length) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: href.offset().top - 100
        }, 750, function() {
            if (history.pushState) {
                history.pushState(null, null, 'index.html#' + href.attr('id'));
            } else {
                location.hash = href.attr('id');
            }
        });     
    }
});