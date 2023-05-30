var reduce = document.querySelector("#reduce");
var increase = document.querySelector("#increase");
var soLuong = document.querySelector("#soLuong");
soLuong.value = 1;
function reduceAction() {
    return (soLuong.value = Number(soLuong.value) - 1);
}
function increaseAction() {
    return (soLuong.value = Number(soLuong.value) + 1);
}
