<?
class BasketController {
  
  public function index() {  // будет отображаться сама корзина
    require_once('../mega/models/Product.php');
    session_start();
        //старое $products = $_SESSION['basket'];
    if(!isset($_SESSION['basket']) or count($_SESSION['basket']) == 0) { //если ничего в корзине нет,показывай пустую корзину 
      require_once('../mega/views/emptyBasket.php');
    } else {
      $products = $_SESSION['basket'];
      require_once('../mega/views/basket.php');
    }
    require_once('../mega/views/template_basket.php'); // сборка всех файлов показов
  }
  
  public function addProduct($id) {  // будет отображаться добавление в корзину
    require_once('../mega/models/Product.php');
    $product = Product::getById($id);
    if( !isset($product) ) exit("Товара нет в наличии");
    session_start();
    $_SESSION['basket'][] = $product;
    exit("Товар добавлен в корзину");
  }
  
  public function removeProduct($index) {  // будет отображаться удаление из корзины
    require_once('../mega/models/Product.php');
    session_start();
    array_splice($_SESSION['basket'], $index, 1); // удалить сессию ['cart'][$index] 
    header("Location: /mega/basket");
  }
  
}

