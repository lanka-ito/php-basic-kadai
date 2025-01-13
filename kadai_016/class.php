<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>課題016</title>
</head>
<body>
  <p>
    <?php
    class Food {
    // プロパティを定義する
      private $name;
      private $price;
    // コンストラクタを定義する
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }

      // メソッドの定義
      public function show_price() {
        echo $this->price;
      }
    }

    class Animal {
      // プロパティを定義する
        private $name;
        private $height;
        private $weight;
      // コンストラクタを定義する
        public function __construct(string $name, int $height, int $weight) {
          $this->name = $name;
          $this->height = $height;
          $this->weight = $weight;
        }
  
        // メソッドの定義
        public function show_height() {
          echo $this->height;
        }
      }
    // インスタンス化する
    $food = new Food('potato', 250 );
    $animal = new Animal('dog', 60, 5000);

    // インスタンス$foodの各プロパティを出力する
    print_r($food);
    echo "<br>";
    print_r($animal);
    echo "<br>";

    // メソッドを実行する
    $food->show_price();
    echo "<br>";
    $animal->show_height();
    ?>
    </p>
  
</body>
</html>