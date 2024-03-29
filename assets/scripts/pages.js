function showModal() {
    $("#modal").addClass("modal-d-flex")
}

function toggleClassification() {
    $(".classification-doors").toggleClass("hide")
    $(".classification-windows").toggleClass("hide")
}

function calculate() {
    var height = $("#calculateHeight").val()
    var width = $("#calculateWidth").val()

    if (!width) {
        $("#calculateWidth").addClass("is-empty-input")
        return
    }

    if (!height) {
        $("#calculateHeight").addClass("is-empty-input")
        return
    }

    var type = $(".calculate-block--item__active").attr("id")

    var quadrature = width * height
    var total = 0

    if (type === "calculate-doors") {
        total = quadrature * fGetDoorsPrice()
    } else if (type === "calculate-windows") {
        total = quadrature * fGetWindowsPrice()
    } else if (type === "calculate-parallel") {
        total = quadrature * fGetParallelPrice()
    }

    $("#calculate-total-price").html(total.toLocaleString() + " KZT")

    counterAnim("#calculate-total-price", 0, total)
    $("#calculateWidth, #calculateHeight").removeClass("is-empty-input")
}

function showProjectDesctiption(index) {
    console.log("clicked")
    $(`[name="project-${index}"]`).css("display", "block")
    $(`[name="project-hide-${index}"]`).css("display", "none")
}

function openSocial(url) {
    window.open(url, "_blank")
}

const counterAnim = (qSelector, start = 0, end, duration = 1000) => {
    const target = document.querySelector(qSelector)
    let startTimestamp = null
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp
        const progress = Math.min((timestamp - startTimestamp) / duration, 1)
        target.innerText = Math.floor(progress * (end - start) + start)
        if (progress < 1) {
            window.requestAnimationFrame(step)
        }
    }
    window.requestAnimationFrame(step)
}
$(".statistic-row").waypoint({
    handler: function (direction) {
        counterAnim("#age", 0, 6, 1000)
        counterAnim("#square", 0, 25000, 2000)
        this.destroy()
    },
    offset: "100%",
})

$(document).ready(function () {
    $("#toMainPage").click(function () {
        $("body").scrollTo("#main-page", 800)
    })
    $("#toSecondPage").click(function () {
        $("body").scrollTo("#second-page", 800)
    })
    $("#toThirdPage").click(function () {
        $("body").scrollTo("#third-page", 800)
    })
    $("#toForthPage").click(function () {
        $("body").scrollTo("#forth-page", 800)
    })
    $("#toFifthPage").click(function () {
        $("body").scrollTo("#fifth-page", 800)
    })
    $("#toSixthPage").click(function () {
        $("body").scrollTo("#sixth-page", 800)
    })

    $(window).click(function (event) {
        if (event.target == modal) $("#modal").removeClass("modal-d-flex")
    })

    $(".modal-close-btn").click(function () {
        $("#modal").removeClass("modal-d-flex")
    })

    $(".popup-close-btn").click(function () {
        $(".first-popup, .second-popup, .third-popup, .forth-popup, .first-block, .second-block").fadeOut()
    })

    //main start
    $(".main-page-navigator--first").mouseover(function () {
        $(".first-block").fadeIn()
    })

    $(".main-page-navigator--second").mouseover(function () {
        $(".second-block").fadeIn()
    })

    $(".main-page-navigator--first").mouseout(function () {
        $(".first-block").fadeOut()
    })

    $(".main-page-navigator--second").mouseout(function () {
        $(".second-block").fadeOut()
    })
    //main end

    var firstNavigatorShow = false
    $(".first-navigator").click(function () {
        if (firstNavigatorShow) {
            $(".first-popup").fadeOut()
            $(".first-navigator>span").hide().html("+").fadeIn()
        } else {
            $(".first-popup").fadeIn()
            $(".first-navigator>span").hide().html("-").fadeIn()
        }

        firstNavigatorShow = !firstNavigatorShow
    })

    var secondNavigatorShow = false
    $(".second-navigator").click(function () {
        if (secondNavigatorShow) {
            $(".second-popup").fadeOut()
            $(".second-navigator>span").hide().html("+").fadeIn()
        } else {
            $(".second-popup").fadeIn()
            $(".second-navigator>span").hide().html("-").fadeIn()
        }

        secondNavigatorShow = !secondNavigatorShow
    })

    var thirdNavigatorShow = false
    $(".third-navigator").click(function () {
        if (thirdNavigatorShow) {
            $(".third-popup").fadeOut()
            $(".third-navigator>span").hide().html("+").fadeIn()
        } else {
            $(".third-popup").fadeIn()
            $(".third-navigator>span").hide().html("-").fadeIn()
        }

        thirdNavigatorShow = !thirdNavigatorShow
    })

    var forthNavigatorShow = false
    $(".forth-navigator").click(function () {
        if (forthNavigatorShow) {
            $(".forth-popup").fadeOut()
            $(".forth-navigator>span").hide().html("+").fadeIn()
        } else {
            $(".forth-popup").fadeIn()
            $(".forth-navigator>span").hide().html("-").fadeIn()
        }

        forthNavigatorShow = !forthNavigatorShow
    })

    $("#calculate-doors").click(function () {
        $(".calculate-block--item__active").removeClass("calculate-block--item__active")
        $(".calculate-figure").removeClass("calculate-windows calculate-parallel")

        $("#calculate-doors").addClass("calculate-block--item__active")
        $(".calculate-figure").addClass("calculate-doors")
        calculate()
    })

    $("#calculate-windows").click(function () {
        $(".calculate-block--item__active").removeClass("calculate-block--item__active")
        $(".calculate-figure").removeClass("calculate-doors calculate-parallel")

        $("#calculate-windows").addClass("calculate-block--item__active")
        $(".calculate-figure").addClass("calculate-windows")
        calculate()
    })

    $("#calculate-parallel").click(function () {
        $(".calculate-block--item__active").removeClass("calculate-block--item__active")
        $(".calculate-figure").removeClass("calculate-doors calculate-windows")

        $("#calculate-parallel").addClass("calculate-block--item__active")
        $(".calculate-figure").addClass("calculate-parallel")
        calculate()
    })

    $("#contacts").mouseover(function () {
        $(".contacts-addon").css("opacity", "1")
        $(".contacts-addon").css("visibility", "unset")
    })

    $(document).click(function () {
        $(".contacts-addon").css("opacity", "0")
        $(".contacts-addon").css("visibility", "hidden")
    })

    $(".employees").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        adaptiveHeight: true,
        centerMode: true,
        nextArrow: $(".next-arrow"),
        prevArrow: $(".prev-arrow"),
        initialSlide: 2,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                },
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    initialSlide: 0,
                },
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    initialSlide: 0,
                },
            },
        ],
    })

    $(".slider-projects").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        nextArrow: $(".nav-next-arrow"),
        prevArrow: $(".nav-prev-arrow"),
    })

    AOS.init({
        offset: 100,
        delay: 50,
        duration: 800,
    })

    $(".call-us").click(function () {
        window.open("tel:+7 777 384 01 25", "_self")
    })

    var currentSlideIndex = 0
    var profiles = $("#profiles").children()

    function showSlider(index) {
        var curr = $(profiles[index])
        $(".premium-arrows-caption").html(curr.attr("data-caption"))
        $("#premium-profile").css("background-image", "url(" + curr.attr("data-url") + ")")
    }

    showSlider(currentSlideIndex)

    $(".premium-prev-arrow").click(function () {
        currentSlideIndex -= 1

        if (+currentSlideIndex < 0) {
            currentSlideIndex = profiles.length - 1
        }
        showSlider(currentSlideIndex)
    })

    $(".premium-next-arrow").click(function () {
        currentSlideIndex += 1

        if (currentSlideIndex === profiles.length) {
            currentSlideIndex = 0
        }
        showSlider(currentSlideIndex)
    })
})
