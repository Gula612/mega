<?
class ProductController {
  
  public function zoom() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/zoom.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function natureza() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/natureza.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function vogue() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/vogue.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function prob() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/prob.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function special() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/special.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function keratin() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/keratin.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function botox() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/botox.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function nanoplastics() {
    require_once('../mega/models/Product.php');
    $products = Product::getAll();
    require_once('../mega/views/nanoplastics.php');
    require_once('../mega/views/template.php'); // сборка всех файлов показов
  }
  
  public function productPage($id) {
    require_once('../mega/models/Product.php');
    $product = Product::getById($id);
    if(isset($product)) {
      setcookie("lastProduct", $product->id, time() + 60*60*24*7, "/");  // запись в куки (название, значение, время жизни неделя в секундах, /-означает что кука видна везде по всему сайту если без/ то только в продуктах)
      require_once('../mega/views/productPage.php');
    } else {
      require_once('../mega/views/product404.php'); 
    }
    require_once('../mega/views/template.php'); // сборка всех файлов показов 
  }
   
}