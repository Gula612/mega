<?

class Product {
  private $id;
  private $id_brand;
  private $id_name;
  private $id_prob;
  private $article;
  private $name;
  private $price;
  private $old_price;
  private $desc;
  private $image;
  
  public function __construct($id, $id_brand, $id_name, $id_prob, $article, $name, $price, $old_price, $desc, $image) {
    $this->id = $id;
    $this->id_brand = $id_brand;
    $this->id_name = $id_name;
    $this->id_prob = $id_prob;
    $this->article = $article;
    $this->name = $name;
    $this->price = $price;
    $this->old_price = $old_price;
    $this->desc = $desc;
    $this->image = $image;
  }
  
  public function __get($property) {
    return $this->$property;
  }
  
  public static function getAll() {
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM `mega` WHERE 1");
    //for($data = []; $row = $result->fetch_assoc(); $data[] = $row);
    for($data = []; $row = $result->fetch_assoc(); $data[] = new Product($row['id'], $row['id_brand'], $row['id_name'], $row['id_prob'], $row['article'], $row['name'], $row['price'], $row['old_price'], $row['description'], $row['image']) ); 
    // волшебный перебор продуктов из массива и формирование массива $data=[] из строк $row
    // while($row = $result->fetch_assoc() ) {} //другой метод перебора
    return $data;
  }
  
  public static function getById($id) {
    global $mysqli;
    $result = $mysqli->query("SELECT * FROM `mega` WHERE `id`='$id'") ->fetch_assoc();
    if(isset($result)) {
      return new Product($result['id'], $result['id_brand'], $result['id_name'], $result['id_prob'], $result['article'], $result['name'], $result['price'], $result['old_price'], $result['description'], $result['image']);
    }
    return null;
  }

  
}