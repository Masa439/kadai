<?php
//1.
$name="Masanori";
if($name=="Masanori"){
  echo "私は".$name."です";
  echo "\n";
}else{
  echo "あなたの名前ではありません";
  echo "\n";
}

//2.
$sum =0;
for ($i=1; $i<=10000  ; $i++) {
  $sum+=$i;
}
echo $sum;
echo "\n";

//3.
$fruits = ["apple","orange","banana","lemon","strawberry"];
foreach ($fruits as $fruit) {
  echo $fruit;
  echo "\n";
}

//4.
//for文の始めの値を定義する
$start = 1;
//for文の終わりの値を定義する
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}
 ?>
