"use strict"
// работающий файл только для корзины

// очистка корзины полностью
let showCloseButtons = document.querySelectorAll(".showCloseButton");

for(let button of showCloseButtons) {
  button.onclick = PopUpShow;
}

function PopUpShow() {  // функция всплывающего окошка
  $("#popup1").show();
}

let closeButtons = document.querySelectorAll(".closeButton");

for(let button of closeButtons) {
  button.onclick = PopUpHide;
}

function PopUpHide() {    // функция закрытия всплывающего окошка
  $("#popup1").hide();
}






// подсчет количества продукта
// for (let quantity of document.querySelectorAll('.counter')) {}
// foreach($products as $product) {


let quantity = {
     counterElem: document.querySelector('.counter'), // span со счетчиком
     count: 1,
     
     increaseCount() {
       this.count++;
       this.counterElem.innerHTML = this.count;
       },
  
     decreaseCount() {
       this.count--;
       if(this.count < 1) {
         this.count = 1;
         return;
       }  
       this.counterElem.innerHTML = this.count;
     }
  }
    
  let plusButton = document.querySelector('.plus');
    
    plusButton.onclick = () => {
    plus();
  }          
            
  function plus() {
    quantity.increaseCount();
    console.log(quantity.count);
  }  
    
    
    
    
   let minusButton = document.querySelector('.minus');
    
    minusButton.onclick = () => {
    minus();
  }          
            
  function minus() {
    quantity.decreaseCount();
    console.log(quantity.count);
  }  
  

