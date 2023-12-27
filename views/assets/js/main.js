var giamsl = document.querySelectorAll(".giamsl");
var tangsl = document.querySelectorAll(".tangsl");

giamsl.forEach(function (element, index) {
    element.addEventListener("click", function () {
        var soluongInput = document.querySelectorAll(".soluong")[index];
        var soluong = parseInt(soluongInput.value);
        if (soluong > 1) {
            soluongInput.value = soluong - 1;
        }
    });
});

tangsl.forEach(function (element, index) {
    element.addEventListener("click", function () {
        var soluongInput = document.querySelectorAll(".soluong")[index];
        var soluong = parseInt(soluongInput.value);

        soluongInput.value = soluong + 1;
    });
});
