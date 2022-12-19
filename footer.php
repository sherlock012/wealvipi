</body>

<script>
    $(document).ready(function() {
        $(".bg-video").bgVideo()
        $(".bg-video_2").bgVideo()

        $(".left-content").hide()
        $(".bg-video_2").hide()

        $(".jquery-background-video-pauseplay").hide()

        $(".right").hover(function() {
            $(".right-content").fadeIn()
            $(".left-content").fadeOut()
            $(".bg-video").fadeIn(500)
            $(".bg-video_2").fadeOut(500)
        })

        $(".left").hover(function() {
            $(".left-content").fadeIn()
            $(".right-content").fadeOut()
            $(".bg-video_2").fadeIn(500)
            $(".bg-video").fadeOut(500)
        })

        $("#wood").click(function() {
            window.location.href = "wood"
        })
        $("#aluminium").click(function() {
            window.location.href = "aluminium"
        })

        $("#contacts").mouseover(function() {
            $(".contacts-addon").css("opacity", "1")
        })

        $(document).click(function() {
            $(".contacts-addon").css("opacity", "0")
        })
    })
</script>
<?php wp_footer() ?>

</html>