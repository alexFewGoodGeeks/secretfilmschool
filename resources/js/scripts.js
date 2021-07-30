jQuery(function() {

    function setCookie(cname, cvalue, exhours) {
        var d = new Date();
        d.setTime(d.getTime() + (exhours * 60 * 60 * 1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + "; " + expires;
    }

    function getCookie(cName) {
        var name = cName + "=";
        var cArray = document.cookie.split(";");

        for (var i = 0; i < cArray.length; i++) {
            var c = cArray[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }



    $(".sfs-cover-image").hide();
    $(".sfs-cover-video").removeClass("hidden");

    var videoPlayer = document.getElementById('promoVideo');

    document.addEventListener('touchstart', function () {
        document.getElementById('promoVideo').play();
        document.getElementById('promoVideo').pause();

    });

    // if (videoPlayer) {
    //     videoPlayer.play();
    //     videoPlayer.pause();
    // }
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

    $(window).resize(function() {
        if ($( window ).width() < 768) {
            var minHeight = $(".bg-image-full").height();
            $(".video-heading video").css('height', minHeight);
        } else {
            $(".video-heading video").css('height', '100%');
        }
    })


    var lazyLoadInstance = new LazyLoad({
        // Your custom settings go here
    });

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })

    // $("html").bind("mouseleave", function () {
    //     $('#myModal').modal();
    //     $("html").unbind("mouseleave");
    // });

    $("#subscribe-btn").click(function() {

        $("#subscribe-error").addClass("d-none");
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        const data = {
            email: $("#email").val(),
        }
        $.ajax({
            url: "/newsletter/subscribe",
            type: "post",
            data: data ,
            success: function (response) {
               $("#subscribe-data").hide();
               $("#subscribe-btn").hide();
               $("#subscribe-thanks").removeClass("d-none");
                setCookie("newsletter_popup", 10, 10000);
                setCookie("poppedUp", 1, 10000);
            },
            error: function(err) {
                $("#subscribe-error").removeClass("d-none");

            }
        });
    })


    $("html").mouseleave(function(){
        checkCookie();
       // $('#exampleModalLong').modal({'show':true});
    });


    function checkCookie() {
        const popUp = getCookie("poppedUp");
        const noOfPopups = getCookie("newsletter_popup");
        const maxShow = 3;
        if (popUp != "") {} else {
            $('#exampleModalLong').modal('show');
            const popUp = 1;
            setCookie("poppedUp", popUp, 24);
            setCookie("newsletter_popup", 1, 24);
        }
        if (noOfPopups >= 1 && noOfPopups <= maxShow) {
            setCookie("poppedUp", popUp, 1);
            setCookie("newsletter_popup", parseInt(noOfPopups)+1, 24);
            $('#exampleModalLong').modal('show');
        }
    }
})


