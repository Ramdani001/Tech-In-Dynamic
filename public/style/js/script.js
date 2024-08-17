function changeSearch() {
    var searchElement = $("#search");

    if (searchElement.hasClass('active_search')) {
        
        searchElement.removeClass('active_search');
        searchElement.addClass('de-active');
    } else {
        
        searchElement.removeClass('de-active');
        searchElement.addClass('active_search');
    }
}
