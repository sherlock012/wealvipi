function fGetDoorsPrice() {
    var doorsPrice = 120000
    return doorsPrice
}

function fGetWindowsPrice() {
    var windowsPrice = 90000
    return windowsPrice
}

function fGetParallelPrice() {
    var parallelPrice = 150000
    return parallelPrice
}

$(document).ready(function () {
    $("#calculate-btn").click(function () {
        calculate()
    })
})
