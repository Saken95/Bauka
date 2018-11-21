/**
 * Created by Saken on 31.08.2018.
 */
$(document).ready(function () {

    $('.table').DataTable();

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

    //



    $("#modalBtn form").submit(
        function (e) {
            e.preventDefault();

            $.ajax({
                url: '/create',
                type: 'POST',
                data: {
                    inv_number: $('#inv_number').val(),
                    name: $('#name').val(),
                    date: $('#date').val(),
                    komplekt: $('#komplekt').val(),
                    kabinet: $('#kabinet').val(),
                    ser_number: $('#ser_number').val(),
                    naliche: $('#naliche').val(),
                    user_name: $('#user_name').val(),
                },
                success: function (data) {
                    var inp = $('#modalBtn form input[type="text"]');
                    $.each(inp, function (i, v) {
                        v.value = "";
                    });
                    $("#main").load(location.href + " #main");
                }
            });

        }
    );


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
                            window.location.href = window.location.href;
                        }
                    }
                });
            }
        }
    );

});