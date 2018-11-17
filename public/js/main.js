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

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    $('#main_save').click(
        function () {
            var baza, main, arr = [];
            baza = $('#baza').val();
            main = $('#main_body input[type="checkbox"]:checked');

            $.each(main, function (i, v) {
               arr[i] = v.value;
            });

            if ( baza != null && arr != [] ) {
                $.ajax({
                    url: '/update',
                    type: 'POST',
                    data: {
                        'baza': baza,
                        'element': arr
                    },
                    success: function (data) {
                        if ( data.data ) {
                            window.location.href = '/';
                        }
                    }
                });
            }
        }
    );

    $('#main_delete').click(
        function () {
            var main, arr = [];
            main = $('#main_body input[type="checkbox"]:checked');

            $.each(main, function (i, v) {
               arr[i] = v.value;
            });

            if ( arr != [] ) {
                $.ajax({
                    url: '/delete',
                    type: 'POST',
                    data: {
                        'element': arr
                    },
                    success: function (data) {
                        if ( data.data ) {
                            window.location.href = '/utilizatsia';
                        }
                    }
                });
            }
        }
    );

});