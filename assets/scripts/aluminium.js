function fGetDoorsPrice() {
    var doorsPrice = 150000
    return doorsPrice
}

function fGetWindowsPrice() {
    var windowsPrice = 120000
    return windowsPrice
}

function fGetParallelPrice() {
    var parallelPrice = 190000
    return parallelPrice
}

$(document).ready(function () {
    $("#calculate-btn").click(function () {
        calculate()
    })
})
