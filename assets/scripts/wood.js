function fGetDoorsPrice() {
    var doorsPrice = 180000
    return doorsPrice
}

function fGetWindowsPrice() {
    var windowsPrice = 150000
    return windowsPrice
}

function fGetParallelPrice() {
    var parallelPrice = 220000
    return parallelPrice
}

$(document).ready(function () {
    $("#calculate-btn").click(function () {
        calculate()
    })
})
