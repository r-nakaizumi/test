
<?php

$foods = array("そば","ラーメン","うどん");

//echo $foods[0]."<br/>";
//echo $foods[1]."<br/>";
//echo $foods[2]."<br/>";

$fruits[] = "リンゴ";
$fruits[] = "バナナ";
$fruits[] = "オレンジ";

//echo $fruits[0]."<br/>";
//echo $fruits[1]."<br/>";
//echo $fruits[2]."<br/>";

$var1 = "文字列";
$var2 = 100;
$var3 = TRUE;
$array = array("日本","アメリカ","イギリス");

//var_dump($var1); echo "<br/>";
//var_dump($var2); echo "<br/>";
//var_dump($var3); echo "<br/>";
//var_dump($array); echo "<br/>";

$stringData = "文字列";
$integerData = 10;
$floatData = 0.15;
$boolData = TRUE;
$arrayData = array(1,2,3);

class test{}
$objectData = new test();

$resourceData = fopen("1-1-1-48-txt.php","r");
$nullData = null;
$allData = array();

$allData = array(
	$stringData,
	$integerData,
	$floatData,
	$boolData,
	$arrayData,
	$objectData,
	$resourceData,
	$nullData
);

echo "<pre>";
var_dump($allData);
echo "<pre>";
