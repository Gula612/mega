"use strict"
  
 // for (let quantity of document.querySelectorAll('.counter')) {}
    
 
// файл для отладки 

// отправка товара в корзину при клике
let addButtons = document.querySelectorAll(".addButton");
for(let button of addButtons) {
  button.onclick = addToBasket;
}

function addToBasket() {
  PopUpShow();
  let id = this.getAttribute("productId");
  //FD
  //fetch("/mega/basket/add/"+id, {POST})
  fetch("/mega/basket/add/"+id)
     .then(response => response.text());
     //.then(result => alert(result));  // показывает, что в корзину добавлен товар
}





   // образец форм даты

 let form = document.querySelector('form');  // вызываем form из html 
  form.onsubmit = send;       // вызываем функцию send на событие onsubmit в form
  function send(event) {
    event.preventDefault();                  // прерываем событие submit
    let formData = new FormData(form);       // формируем данные для отправки
    //console.log(formData.get('login') );
    fetch('auth_obr.php', {                  // отправь данные методом POST 
      method: "POST",
      body: formData,                        // в виде данных formData
    })  // реализация асинхронности в Js 
      .then(response => response.text())     // затем прими ответ  и обработай его
      //.then(result => console.log(result));  // затем выведи результат в консоль
      .then(result => {                         
        if(result == "ok") {                    // затем если результат ок
          window.location.href = "lk.php";      // переходим в личный кабинет
        } else {
          let errorElem = document.querySelector('.error');  // если отрицательный результат, то
          errorElem.classList.remove('d-none');
          errorElem.innerHTML = result;
        }  
      }); 
    //console.log("cvjhhgkjjb");
  }









// подсчет количества продукта

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

