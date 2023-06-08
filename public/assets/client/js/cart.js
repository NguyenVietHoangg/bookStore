var coin = document.querySelectorAll(".a");
var sum = document.querySelector(".b");
var a = 0;
coin.forEach((e) => (a = a + Number(e.innerText)));
sum.innerHTML = a;
