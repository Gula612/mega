<?
class HomeController {
  
  public function home() {
    //echo "Домашняя страница";
    require_once('../mega/models/Product.php'); // чтобы куки отлавливать
    //$lastProductId = $_COOKIE['lastProduct']; //чтобы обратиться к куки используем суперглобальный массив $_COOKIE где по ключу lastProduct получаем данные, куки обычный ассоциативный массив, который хранится на клиенте
    //$lastProduct = Product::getById($lastProductId); // получаем товар по этому Id
    require_once('../mega/views/home.php');
    //var_dump($lastProduct);
    require_once('../mega/views/template_home.php'); // сборка всех файлов показов
  }
}

