<?php
$food_infomation = ['名前' => '玉ねぎ' ,'値段' => 200 ,'産地' => '北海道'];

foreach ($food_infomation as $key => $value) {
  echo "{$key}:{$value}"."<br>";
}

$user_infomation = ['id' => 1 ,'名前' => '侍太郎' ,'年齢' => 30 ];

foreach ($user_infomation as $key => $value) {
  echo "{$key}:{$value}"."<br>";
}
?>