// Header Menu Bar
$('#nav-icon1').click(function () {
    $(this).toggleClass('open');
});

// $('#nav-icon1').click(function () {
//     $(".nav_br").toggleClass("left0");
// });


$("#nav-icon1").click(function () {
    $("body").toggleClass("slideb");
});

$("#sidebarClose").click(function () {
    $("body").removeClass("slideb");
    $(".MenuBar").removeClass("open");
});


// Left Navigation Active and Inactive JS
$(function () {
    var url = window.location;
    var element = $('.nav-area > li > a').filter(function () {
        return this.href == url;
    }).addClass('activenav').parent().addClass('activenav');
    while (true) {
        if (element.is('li')) {
            element = element.parent().addClass('in').slideDown(200).parent().addClass('active').children('a').addClass('active');
        }
        else {
            break;
        }
    }
    $('.nav-area > li a').on('click', function (e) {
        if (!$(this).hasClass("activenav")) {
            // hide any open menus and remove all other classes
            $("ul", $(this).parents("ul:first")).slideUp(200);
            $("ul", $(this).parents("ul:first")).removeClass("in");
            $("a", $(this).parents("ul:first")).removeClass("activenav");

            // open our new menu and add the open class
            $(this).next("ul").slideDown(200);
            $(this).next("ul").addClass("in");
            $(this).addClass("activenav");                

        }
        else if ($(this).hasClass("activenav")) {
            $(this).removeClass("activenav");
            $(this).parents("ul:first").removeClass("activenav");
            $(this).next("ul").slideUp(200);
            $(this).next("ul").removeClass("in");
        }            
    })
    $('.nav-area > li > a.has-arrow').on('click', function (e) {
        e.preventDefault();
    });

});

$(document).ready(function () {
    var table = $('#dataTable').DataTable({
        // rowReorder: {
        //     selector: 'td:nth-child(2)'
        // },
        responsive: true
    });
});