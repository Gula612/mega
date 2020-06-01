<?
$title = "Корзина покупок";
  
$style = ""; 

$content = "

  <!-- Правая вообще общяя колонка главная колонка основного - КОРЗИНА ПОКУПОК - изменяемая -->
      <div class=\"\">
        <div class=\"content right\">
          <div class=\"breadcrumb\"> 
            <a class=\"text-dark\" href=\"/mega\">Магазин</a> / <a title=\"Корзина покупок\" class=\"text-dark\" href=\"\">Корзина покупок</a> 
          </div>
          <div class=\"row wrapper\" style=\"margin: 20px;\">
            <div class=\"bg-white\" style=\"height: 10px\"></div>
            <h2 class=\"col-md-12 box-title\" align=\"center\">КОРЗИНА ПОКУПОК</h2>
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>
            <div class=\"col-md-12\" align=\"center\">
              <button type=\"button\" class=\"close\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;<span style=\"font-size: 14pt;\">Очистить корзину</span></span>
              </button>
            </div>  
            <div class=\"col-md-12 bg-white\" style=\"height: 20px\"></div>
            <div class=\"col-md-12 bg-light\" style=\"height: 30px\"></div>
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>


           <!-- первая покупка -->
"; 
//  \" - экранирование, чтоб они не конфликтовали с главными ""
// тут разорвали, чтоб сюда вставить карточки
for($i = 0; $i < count($products); $i++) {
  $product = $products[$i];  //чтоб не менять везде на $i
  $price = number_format($product->price, 2, ',', '.');
  $content .= "
           
            <div class=\"row text-center\" style=\"width: 100%; margin: 2px 2px 10px;\">
              <div class=\"card-img-top\" style=\"width: 130px; height: 130px;\"><img title=\"$product->name\" style=\"width: 130px; height: 130px;\" alt=\"\" src=\"/mega/resource/img/products/$product->image\"></div>
              <div class=\"card-body\" style=\"max-width: 500px; padding: 1px;  margin-top: 30px;\">
                <h5 class=\"card-title border-bottom border-secondary\" style=\"padding-bottom: 20px;\">$product->name</h5>
                <h6 class=\"card-title\" style=\"height: 50px; padding:1px;\"><span class=\"font-weight-light\">Артикул:&nbsp</span>$product->article</h6>
              </div>   
              <div class=\"card-count\" style=\"margin: 30px;\">
                 <div class=\"btn btn-white border rounded-0  border-secondary text-dark\" style=\"width: 140px; height: 34px; margin: 5px;  padding: 0;\">
                   <div class=\"btn btn-white\" style=\"font-size: 20pt; width: 50px; height: 30px; margin: 1px; padding: 1px;\"><sup><b>-</b></sup></div>
                   <div class=\"btn btn-none\" style=\"font-size: 14pt; width: 20px; height: 30px; margin: 1px; padding: 1px;\">1</div>
                   <div class=\"btn btn-white\" style=\"font-size: 20pt; width: 50px; height: 30px; margin: 1px; padding: 1px;\"><sup><b>+</b></sup></div>
                 </div>
              </div>
              <h6 class=\"card-title text-secondary\" style=\"font-size: 18pt; margin: 35px 0px; padding:  1px;\">$price руб.</h6>
              <h6 class=\"card-title text-secondary\" style=\"font-size: 18pt; margin: 35px 15px; padding:  1px;\">$price руб.</h6>
              <a type=\"button\" href=\"/mega/basket/remove/$i\" class=\"close\" aria-label=\"Close\" style=\"height: 100px; margin: 35px 3px; padding: 1px;\">
                <span aria-hidden=\"true\">&times;</span>
              </a>
            </div>              
            


  ";
}

$content .= "      
            
            
            
            
            <!-- белая полоса -->
            <div class=\"col-md-12 bg-white\" style=\"height: 10px\"></div>
          <!-- 3 дива ОЧЕНЬ НУЖНЫ на окончании -->   
          </div>
        </div>
      </div>


"; // это </div> от .row  и от  .container

$scripts = ""; // оставляем пустым, просто, чтоб не ругалась, что переменная не объявлена