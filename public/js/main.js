/**
 * Created by Saken on 31.08.2018.
 */
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });


  /*  $("#sidebarRight").mCustomScrollbar({
        theme: "minimal"
    });*/

    $('#sidebarRight #dismiss, #sidebarRight .overlay').on('click', function () {
        // hide sidebar
        $('#sidebarRight').removeClass('active');
        // hide overlay
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapseRight').on('click', function () {
        // open sidebar
        $('#sidebarRight').addClass('active');
        // fade in the overlay
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });


});