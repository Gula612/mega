<?
require_once('../mega/db.php');
$mvsPath = filter_var($_SERVER['REQUEST_URI'], FILTER_SANITIZE_URL);
if(mb_substr($mvsPath, -1, 1) == "/") {
  $mvsPath = mb_substr($mvsPath, 0, mb_strlen($mvsPath) - 1);
}


$path = explode('/', $mvsPath);

if(!isset($path[2]) or $path[2] == "") {
  // echo "Домашняя страница"; вместо него путь к HomeController.php
  require_once('../mega/controllers/HomeController.php'); //spl_autoload_register() - функция автоматического поиск/подключения Классов
  $controllers = new HomeController();
  $controllers->home();
  exit();
  
} elseif($path[2] == "training" && !isset($path[3])) {
   //echo "Об обучении";
  require_once('../mega/controllers/TrainingController.php'); 
  $controllers = new TrainingController();
  $controllers->training();
  exit();
     
} elseif($path[2] == "cookie" && !isset($path[3])) {
  require_once('../mega/controllers/CookieController.php'); 
  $controllers = new CookieController();
  $controllers->megaCookie();
  exit();
     
} elseif($path[2] == "ZOOM" && !isset($path[3])) {
  require_once('../mega/controllers/ProductController.php'); 
  $controllers = new ProductController();
  $controllers->zoom();
  exit();
     
} elseif($path[2] == "NATUREZA" && !isset($path[3])) {
  require_once('../mega/controllers/ProductController.php'); 
  $controllers = new ProductController();
  $controllers->natureza();
  exit();
     
} elseif($path[2] == "VOGUE" && !isset($path[3])) {
  require_once('../mega/controllers/ProductController.php'); 
  $controllers = new ProductController();
  $controllers->vogue();
  exit();
     
} elseif($path[2] == "prob" && !isset($path[3])) {   // пробники
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->prob();
   exit();
   
} elseif($path[2] == "special" && !isset($path[3])) {   // скидки
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->special();
   exit();
   
} elseif($path[2] == "keratin" && !isset($path[3])) {
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->keratin();
   exit();
   
} elseif($path[2] == "botox" && !isset($path[3])) {
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->botox();
   exit();
   
} elseif($path[2] == "nanoplastics" && !isset($path[3])) {
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->nanoplastics();
   exit();
   
} elseif($path[2] == "shop" && !isset($path[4])) {
   if( !isset($path[3]) ) header("Location: /mega");
   require_once('../mega/controllers/ProductController.php'); 
   $controllers = new ProductController();
   $controllers->productPage($path[3]);
   exit();
 
} elseif($path[2] == "basket" && !isset($path[5])) {
   require_once('../mega/controllers/BasketController.php'); 
   $controller = new BasketController();
   
   if( !isset($path[3]) ) {
     //echo "Корзина";
     $controller->index(); 
     exit();
   } elseif($path[3] == "add" && isset($path[4])) {
     //echo "Добавление в корзину";
     $controller->addProduct($path[4]);
     exit();
   } elseif($path[3] == "remove" && isset($path[4])) {
     //echo "Удаление из корзины";
     $controller->removeProduct($path[4]);
     exit();
   } else {
     header("Location: /mega/basket");
   }
   
   
} else {
  echo "404 not found";
}




//var_dump($path);