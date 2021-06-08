jQuery(function() {

    var videoPlayer = document.getElementById('promoVideo');

    $(".promo-image").click(function() {
        $(".promo-image").addClass("d-none")
        $(".promo-video").removeClass("d-none");
        videoPlayer.play();
    })

    $("#navbarSupportedContent, .hamburger-nav").click(function() {
        $(this).hide();
        $(".main").addClass('inactive');
        $("#main-menu").addClass('active');
    })

    $("#closeMenu").click(function (e){
        e.preventDefault();
        $(".main").removeClass('inactive');
        $("#main-menu").removeClass('active');
        $("#sidebarCollapse, .hamburger-nav").show();
    })

    $(".menu-item").click(function() {
        var scrollTo = $(this).attr('data-to');

        $([document.documentElement, document.body]).animate({
            scrollTop: $("#" + scrollTo).offset().top
        }, 2000);
    });

    $("#modules-nav li.nav-item").click(function() {

        $([document.documentElement, document.body]).animate({
            scrollTop: $("#modules-nav").offset().top+100
        }, 500);
    })

    $(document).mouseup(function(e)
    {
        var container = $("#main-menu");

        // if the target of the click isn't the container nor a descendant of the container
        if (!container.is(e.target) && container.has(e.target).length === 0)
        {
            $("#closeMenu").click();
        }
    });

    if ($( window ).width() < 768) {
        var minHeight = $(".bg-image-full").height();
        $(".video-heading video").css('height', minHeight);
    }
})
