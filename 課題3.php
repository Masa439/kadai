<?php
//1.
function nibai($i){
 $i*=2;
 echo $i;
}

echo nibai(6);
echo "\n";

//2.
function sum($a,$b){
  echo $a+$b;
}
echo sum(2,6);
echo "\n";

//3.
function hairetu($arr){
  foreach ($arr as $ar) {
    $result+=$ar;
  }
  echo $result;
}

echo hairetu([1,3,5,7,9]);
echo "\n";

//4.
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
$max_number = $arr[0];
foreach($arr as $a){
//どうしたらいいかわからない・・・・
if($max_number<$a){
  $max_number =$a;
}
}

return $max_number;
}

echo max_array([1,4,7,4,5]);
echo "\n";

//5.
//(strip_tags)
$a = "<p><a href=”#”>テスト</a></p>";
echo $a;
echo "\n";
echo strip_tags($a,"<a>");
//HTMLタグを削除する関数
echo "\n";

//(array_push)
$fruits = ['apple', 'orange', 'lemon'];
 //配列の最後に要素を追加する
array_push($fruits, 'banana', 'melon');
 //echoで配列の中身は表示できない(arrayと表示されてしまう)
foreach ( $fruits as $fruit ) {
    echo $fruit;
    echo "\n";
}

//(array_marge)
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];

//配列を結合する事ができる関数
$array = array_merge($array1, $array2, $array3);
 foreach ($array as $arr ) {
     echo $arr;
     echo "\n";
 }

//date
//現在日時が引数で指定した形式でフォーマットされる
// 現在日付をフォーマットする
echo date('Y/m/d');
echo "\n";

// 現在日時をフォーマットする
echo date('Y-m-d H:i:s');
echo "\n";
echo date('Y年m月d日 H時i分s秒');
echo "\n";
 //time
echo date("Y/m/d H:i:s",time());
echo "\n";
//mktime
echo date("Y/m/d H:i:s",mktime(3,30,45,4,6,2020));
//時、分、秒、月、日、年を指定して取得
echo "\n";
 ?>
