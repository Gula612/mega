<?
$title = "VOGUE";
  
$style = ""; 

$content = "
  <div class=\"\">
        <div class=\"content right\">
          <div class=\"breadcrumb\"> 
            <a class=\"text-dark\" href=\"/mega\">Магазин</a> / <a title=\"VOGUE\" class=\"text-dark\" href=\"/mega/VOGUE\">VOGUE</a> 
          </div>
          <div class=\"row wrapper\" style=\"margin: 20px;\">
            <div class=\"bg-white\" style=\"height: 10px\"></div>
            <h2 class=\"col-md-12 box-title\" align=\"center\">VOGUE</h2>
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>
              
           <!-- 3 карточки были как пример - 2 лишние убрали потом -->

"; 
//  \" - экранирование, чтоб они не конфликтовали с главными ""
// тут разорвали, чтоб сюда вставить карточки
foreach($products as $product) {
  if(($product->id_brand) == 'VOGUE') {
    $price = number_format($product->price, 2, ',', '.');
  $content .= "

              <div class=\"text-center position-relative\" style=\"width: 295px; margin: 2px 2px 40px;\">
                <div class=\"card container border border-white\" style=\"padding: 1%;\">
                  <a href=\"/mega/shop/$product->id\" class=\"btn border border-secondary\" style=\"padding: 10px; padding-bottom: 1px;\">
                    <div class=\"card-img-top\" style=\"width: 260px; height: 260px;\"><img title=\"$product->name\" style=\"width: 260px; height: 260px;\" alt=\"\" src=\"/mega/resource/img/products/$product->image\"></div>
                    <div class=\"card-body\" style=\"padding: 1px; margin-bottom: 1px;\">
                      <h5 class=\"card-title\" style=\"height: 120px; padding:1px;\">$product->name</h5>
                      <h6 class=\"card-title text-secondary\" style=\"font-size: 18pt; margin: 1px; padding:  1px;\">$price руб.</h6>
  "; 
// тут разорвали, чтоб сюда вставить формулу показа старой цены
if(($product->old_price) == 0) {
  
  $content .= "        
          
                      <h6 class=\"card-title text-white\" style=\"opacity: 0.7; margin-bottom: 1px; padding: 1px;\">0</h6>
  ";
} else {
  $old_price = number_format($product->old_price, 2, ',', '.');
  $content .= "                     
                      <h6 class=\"card-title text-danger\" style=\"opacity: 0.7; margin-bottom: 1px; padding: 1px;\"><s>$old_price руб.</s></h6>
  ";
}
$content .= "                         
                    </div>
                  </a>  
                </div>  
                <div class=\"card-buy\">
                   <button class=\"addButton btn btn-white border border-dark text-dark\" style=\"width: 289px;\" productId=\"$product->id\">КУПИТЬ</button>
                </div> 
              </div>              
                    
 ";
  
  } else { }
  
}

$content .= "  

  <!-- Правая колонка - конец - 3 див  от карточек-->          
          </div>
        </div>
      </div>
      
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