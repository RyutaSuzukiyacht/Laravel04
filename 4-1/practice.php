<?php
//課題１

function multiple_number($number){
	return $number*2;
}

echo multiple_number(2);


//課題2

$a = 2;
$b = 1;

echo $a + $b;

 //課題3
 
function valuecalc($arr)
{
	return($arr + $arr);
}
 $value_array = [1, 3, 5, 7, 9];
 
 $value_array2 = array_map('valuecalc', $value_array);
 
 print_r($value_array2);
 
 //課題4
 
 $array = array(2,6,3,10,4);
 
 $max = $array[0];
 
 for($i=1;$i<count($array);$i++){
	 if($max<$array[$i]){
		 $max=$array[$i];
	 }
 }
 
 echo $max;
 
 //課題5
 //strip_tags　HTMLタグを含む文字列からタグを取り除く
 $str = "<h1>strip_tags関数</h1>"
 ."<p>タグ取り除くよ！</p>";
 echo strip_tags($str)."\n";
 
 //array_push 最後に要素を追加する
 
 $fruits = ['apple', 'orange','melon'];
 
 array_push($fruits,'banana','pineapple');
 
 print_r($fruits);
 
 //array_merge 配列を結合する
 
 $array1 = [1, 2, 3];
 $array2 = [10, 20, 30];
 $array3 = [100, 200, 300];
 
 $array = array_merge($array1, $array2, $array3);
 
 print_r($array);
 
 //time, mktime 
 echo '現在のUnixタイムスタンプ:'.time();
 
 echo'<br>';
 
 $nweek = time() + (3 * 24 * 60 * 60);
 echo '3日後のUnixタイムスタンプ;'.$nweek;
 
  $timestamp = mktime(0, 0, 0, 8, 1, 2017);
  echo $timestamp;
  
  //date
  $now = date('Y/m/d H:i:s');
 
 
 