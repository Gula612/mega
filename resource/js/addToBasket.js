"use strict"
// работающий файл

// отправка товара в корзину при клике
let addButtons = document.querySelectorAll(".addButton");
for(let button of addButtons) {
  button.onclick = addToBasket;
}

function addToBasket() {
  PopUpShow();
  let id = this.getAttribute("productId");
  
  fetch("/mega/basket/add/"+id)
     .then(response => response.text());
     //.then(result => alert(result));  // показывает, что в корзину добавлен товар
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
  }  
  

 
    //Функция отображения PopUp
    function PopUpShow(){
        $("#popup1").show();
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        $("#popup1").hide();
    }
    
    
    
 /*   
        $(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
*/

