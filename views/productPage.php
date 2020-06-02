<?
$title = "$product->name";
  
$style = ""; 


$price = number_format($product->price, 2, ',', '.');
$content = "
      
  <!-- Правая главная колонка основного - КАРТОЧКА ТОВАРА ИНДИВИДУАЛЬНАЯ С ОПИСАНИЕМ - изменяемая -->
      <div class=\"\">
        <div class=\"content right\">
          <div class=\"breadcrumb\"> 
            <a class=\"text-dark\" href=\"/mega\">Магазин</a> / <a title=\"$product->id_brand\" class=\"text-dark\" href=\"/mega/$product->id_brand\">$product->id_brand</a> 
          </div>
          <div class=\"row wrapper\" style=\"margin: 20px;\">
            <div class=\"col-md-12 bg-white\" style=\"height: 30px\"></div>
            
           <!-- первая карточка -->
            <div class=\"row text-center\" style=\"width: 100%; margin: 2px 2px 40px;\">
              <div class=\"card-img-top\" style=\"width: 300px; height: 260px;\"><img title=\"$product->name\" style=\"width: 260px; height: 260px;\" alt=\"\" src=\"/mega/resource/img/products/$product->image\"></div>
              <div class=\"card-body\" style=\"max-width: 550px; padding: 1px; margin-bottom: 1px;\">
                <h5 class=\"card-title border-bottom border-secondary\" style=\"padding-bottom: 20px;\">$product->name</h5>
                <h6 class=\"card-title\" style=\"height: 50px; padding:1px;\"><span class=\"font-weight-light\">Артикул:&nbsp</span>$product->article</h6>
                <h6 class=\"card-title text-secondary\" style=\"font-size: 18pt; margin: 10px; padding: 1px;\">$price руб.</h6>
                <div class=\"card-buy\">
                   <div class=\"btn btn-white border rounded-0  border-secondary text-dark\" style=\"width: 140px; height: 34px; margin: 5px;  padding: 0;\">
                   <button class=\"minus btn btn-white\" style=\"font-size: 20pt; width: 50px; height: 30px; margin: 1px; padding: 1px;\"><sup><b>-</b></sup></button>
                   <div class=\"btn btn-none\" style=\"font-size: 14pt; width: 20px; height: 30px; margin: 1px; padding: 1px;\"><span class=\"counter\">1</span></div>
                   <button class=\"plus btn btn-white\" style=\"font-size: 20pt; width: 50px; height: 30px; margin: 1px; padding: 1px;\"><sup><b>+</b></sup></button>
                   </div>
                   <button class=\"addButton btn btn-secondary border rounded-0  border-secondary text-white\" style=\"width: 140px; height: 35px; margin: 5px;\" productId=\"$product->id\">В КОРЗИНУ</button>
                </div> 
                
  "; 
// тут разорвали, чтоб сюда вставить формулу показа старой цены
if(($product->old_price) == 0) {
  $content .= "        
          
                <h6 class=\"card-title font-weight-light text-white\" style=\"margin: 10px; padding: 1px;\">0</h6>
  ";
} else {
  $old_price = number_format($product->old_price, 2, ',', '.');
  $content .= "                     
                <h6 class=\"card-title font-weight-light\" style=\"margin: 10px; padding: 1px;\"><span class=\"text-dark\">Старая цена:&nbsp</span><span class=\"text-danger\">$old_price руб.</span></h6>
  ";
}
$content .= "                         
                
              </div>
            </div>              
            
            <!-- белая полоса --> 
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>
            
            <h5 class=\"col-md-12 box-title\" align=\"center\">ОПИСАНИЕ</h5>
            <div class=\"col-md-12 bg-white\" style=\"height: 20px\"></div>
            <h3 class=\"col-md-12 box-title\" align=\"center\">$product->name</h3>
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>
            <div class=\"clearfix\" style=\"font-size: 14pt; padding-left: 20px; padding-right: 20px;\">
              <p align=\"justify\">$product->desc</p>
              <p class=\"font-weight-light\" style=\"margin-top: 40px;margin-bottom: 0px;\">Производитель: $product->id_brand</p>
              <p class=\"font-weight-light\">Страна производства: Бразилия</p>
            </div>
            
            
            <!-- белая полоса   НЕ НУЖНА -->
            <div class=\"col-md-12 bg-white\" style=\"height: 100px\"></div>
            

          <!-- 3 дива ОЧЕНЬ НУЖНЫ на окончании индивидуальной карточки описания-->   
          </div>
        </div>
      </div>
      <div class=\"col-md-12 row bg-white\" style=\"height: 20px\"></div>
      
      
      
    <!-- всплывающее окно -->  
      
    
      <div class=\"b-popup\" id=\"popup1\">
        <div class=\"b-popup-content text-center position-relative\" style=\"padding: 1px;\">
          <div class=\"card container border rounded-0 border-white\" style=\"padding: 0%;\">
            <div class=\"btn border border-secondary\" style=\"padding: 10px; padding-bottom: 10px;\">
              <div class=\"card-body\" style=\"padding: 1px; margin-bottom: 1px;\">
                <h5 class=\"font-weight-light\" >ТОВАР</h5>
                <h5 class=\"card-title\" style=\"height: 90px; padding:1px;\">$product->name</h5>
                <h5 class=\"font-weight-light\">добавлен в корзину</h5>
              </div>
              <div class=\"card-buy\">
                 <a class=\"btn btn-white border rounded-0 border-dark text-dark\" style=\"width: 250px; margin-bottom: 5px;\" href=\"http://gula612.beget.tech/mega/basket\">ПЕРЕЙТИ В КОРЗИНУ</a>
                 <a class=\"btn btn-dark border rounded-0 border-dark text-white\" style=\"width: 250px;\" href=\"javascript:PopUpHide()\">ПРОДОЛЖИТЬ ПОКУПКИ</a>
              </div>
            </div>
          </div> 
        </div>              
      </div>
   
  
"; 

$scripts = "
 <script src=\"http://gula612.beget.tech/mega/resource/js/addToBasket.js\"></script>
 <script src=\"http://code.jquery.com/jquery-2.0.2.min.js\"></script>
";