(function($){

// 左边边栏导航：隐藏和收起
$(document).ready(function() {
    // choose text for the show/hide link - can contain HTML (e.g. an image)
    var showText='Show';
    var hideText='Hide';
    // initialise the visibility check
    var is_visible = false;
    // append show/hide links to the element directly preceding the element with a class of "toggle"
    $('.toggle').prev().append('<a href="#" class="toggleLink">'+hideText+'</a>');
    // hide all of the elements with a class of 'toggle'
    $('.toggle').show();
    // capture clicks on the toggle links
    $('a.toggleLink').click(function() {
        // switch visibility
        is_visible = !is_visible;

        // change the link text depending on whether the element is shown or hidden
        if ($(this).text()==showText) {
            $(this).text(hideText);
            $(this).parent().next('.toggle').slideDown('slow');
        }
        else {
            $(this).text(showText);
            $(this).parent().next('.toggle').slideUp('slow');
        }
        // return false so any link destination is not followed
        return false;
    });
});


// 各模块等高
$(document).ready(function () {
    $('.column').equalHeight();
});


// 表格排序
$(document).ready(function() { 
    $(".tablesorter").tablesorter(); 
});
$(document).ready(function() {
    //When page loads...
    $(".tab_content").hide(); //Hide all content
    $("ul.tabs li:first").addClass("active").show(); //Activate first tab
    $(".tab_content:first").show(); //Show first tab content
    
    //On Click Event
    $("ul.tabs li").click(function() {
        $("ul.tabs li").removeClass("active"); //Remove any "active" class
        $(this).addClass("active"); //Add "active" class to selected tab
        $(".tab_content").hide(); //Hide all tab content
        var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        $(activeTab).fadeIn(); //Fade in the active ID content
        return false;
    });
});


})(jQuery);