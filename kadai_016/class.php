<?php

class Food {
    private string $name;
    private int $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(): void {
        echo "The price of {$this->name} is {$this->price} units." . PHP_EOL;
    }
}

class Animal {
    private string $name;
    private int $height;
    private int $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height(): void {
        echo "The height of {$this->name} is {$this->height} cm." . PHP_EOL;
    }
}

// インスタンスの作成
$food = new Food("potato", 250);
$animal = new Animal("dog", 60, 5000);

// デバッグ出力
print_r($food);
print_r($animal);

// 値を出力
$food->show_price();
$animal->show_height();
?>
