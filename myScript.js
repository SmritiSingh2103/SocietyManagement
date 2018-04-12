$(document).ready(function () {
        $('#menuContainer li').hover(
        function () {
            //show submenu
            $('ul', this).show();
        }, function () {
            //hide submenu
            $('ul', this).hide();
        });
    });