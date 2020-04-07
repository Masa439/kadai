<?php echo "hello world!";

// 変数 $integerに20を代入
$integer = 20;
// 変数 $stringに"abc"を代入
$string = "abc";
// 変数 $integerを出力
echo $integer;
// =>20と表示されれる
// 変数 $stringを出力
echo $string;
// =>abcと出力される
// 　変数 $integerと10を足した結果を 変数 $new_integerに代入する
$new_integer = $integer+10;
// 変数　$new_integerを出力する
echo $new_integer;
// =>30と表示される

// $animals という連想配列を定義する
$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];
// $animals から "猫" を取り出して表示する。
echo $animals["cat"];
// => 猫 と表示される
// $animals から　"鳥" を取り出して表示する。
echo $animals["bird"];
// => 鳥 と表示される

//  $resultにtrueを代入する
&result =true;
// もし $result が true であれば、 成功しました。 が表示される
// そうでなければ、　失敗しました が表示される
if ($result == true) {
  echo "成功しました。";
} else {
  echo "失敗しました。";
}
// => 成功しました。 が表示される

// + は数値を加算する演算子
$value = 6;
echo $value + 2;
//=> 8 が表示される
// - は数値を減算する演算子
$value = 6;
echo $value - 2;
//=> 4 が表示される
// * は数値を積算する演算子
$value = 6;
echo $value * 2;
// 12 が表示される
// / は数値を除算する演算子
$value = 6;
echo $value / 2;
//=> 3 が表示される
// . は文字列を連結する演算子
$value = "AAA";
echo $value . "BBB";
//=> "AAABBB" が表示される

// == は左項と右項が等しいか判定する
$value = 10;
$result = $value == 20;
var_dump($result);
//=> bool(false) が表示される

// < は左項が右項より小さいか判定する
$value = 10;
$result = $value < 20;
var_dump($result);
//=> bool(true) が表示される

// > は左項が右項より大きいか判定する
$value = 10;
$result = $value > 20;
var_dump($result);
//=> bool(false) が表示される

// === は左項と右項が同じ型で同じ値を持つか判定する
$a = "20";
$b = 20;

$result = $a == $b;
var_dump($result);
//=> true が表示される

$result = $a === $b;
var_dump($result);
// false が表示される
?>
