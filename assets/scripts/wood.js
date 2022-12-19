function fGetDoorsPrice() {
    var doorsPrice = 235000
    return doorsPrice
}

function fGetWindowsPrice() {
    var windowsPrice = 190000
    return windowsPrice
}

function fGetParallelPrice() {
    var parallelPrice = 280000
    return parallelPrice
}

$(document).ready(function () {
    $("#calculate-btn").click(function () {
        calculate()
    })
})
