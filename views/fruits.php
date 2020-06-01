<?
$title = "Фрукты";
  
$style = ""; 

$content = "
  <div class=\"container\">  
    <div class=\"row\">
      <div class=\"col-12\">
        <h1 class='text-center'>Фрукты</h1>
      </div>
"; 
//  \" - экранирование, чтоб они не конфликтовали с главными ""
// тут разорвали, чтоб сюда вставить карточки
foreach($products as $product) {
  $description = mb_substr($product->desc, 0, 23); // ограничивает текст в карточке 23 символами, потом...
  if(($product->id_dep) == 1) {
  $content .= "
    <div class=\"col-3\">
      <div class=\"card\" style=\"\">
        <div class=\"card-img-top\" style=\"height: 11rem; background-image: url(/mega/resource/img/$product->image); background-size: cover; background-position: 50% 50%\"></div>
        <div class=\"card-body\">
          <h5 class=\"card-title\">$product->name</h5>
          <h6 class=\"card-title\">$product->price руб.</h6>
  "; 
// тут разорвали, чтоб сюда вставить формулу показа старой цены
if(($product->old_price) == 0) {
  $content .= "        
          <h6 class=\"card-title text-white\">.</h6>
  ";
} else {
  $content .= "        
          <h6 class=\"card-title text-danger \"><s>$product->old_price руб</s></h6>
  ";
}
$content .= "      
          <p class=\"card-text\">$description...</p>
          <a href=\"/mega/products/$product->id\" class=\"btn btn-primary\">Подробнее</a>
          <a class=\"btn btn-primary text-white\" href=\"/mega/cart/add/$product->id\">Добавить в корзину</a>
        </div>
      </div>
    </div>
  ";
  
  } else { }
  
}

$content .= "      
    </div>
  </div>
  
"; // это </div> от .row  и от  .container

$scripts = ""; // оставляем пустым, просто, чтоб не ругалась, что переменная не объявлена