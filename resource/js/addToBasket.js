"use strict"

let addButtons = document.querySelectorAll(".addButton");
for(let button of addButtons) {
  button.onclick = addToBasket;
}

function addToBasket() {
  let id = this.getAttribute("productId");
  fetch("/mega/basket/add/"+id)
     .then(response => response.text())
     .then(result => alert(result));  // показывает, что в корзину добавлен товар
}