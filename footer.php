</body>

<script>
    function openSocial(url) {
        window.open(url, "_blank");
    }

    $(document).ready(function() {
        $(".video").on('ended', function() {
            this.load();
            this.play();
        });

        $(".bg-video_wood").bgVideo()
        $(".bg-video").bgVideo()

        $(".left-content").hide()
        $(".bg-video_wood").hide()

        $(".jquery-background-video-pauseplay").hide()

        $(".right").hover(function() {
            $(".right-content").fadeIn()
            $(".left-content").fadeOut()

            $(".bg-video").fadeIn(500)
            $(".bg-video_wood").fadeOut(500)

            // $(".main-wrapper").addClass("main-wrapper-aluminium")
            // $(".main-wrapper").removeClass("main-wrapper-wood")
        })

        $(".left").hover(function() {
            $(".left-content").fadeIn()
            $(".right-content").fadeOut()

            $(".bg-video_wood").fadeIn(500)
            $(".bg-video").fadeOut(500)

            // $(".main-wrapper").addClass("main-wrapper-wood")
            // $(".main-wrapper").removeClass("main-wrapper-aluminium")
        })

        $("#wood").click(function() {
            window.location.href = "wood"
        })
        $("#aluminium").click(function() {
            window.location.href = "aluminium"
        })

        $("#contacts").mouseover(function() {
            $(".contacts-addon").css("opacity", "1")
            $(".contacts-addon").css("visibility", "unset")
        })

        $(document).click(function() {
            $(".contacts-addon").css("opacity", "0")
            $(".contacts-addon").css("visibility", "hidden")
        })
    })
</script>
<?php wp_footer() ?>

</html>