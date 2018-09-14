
<?php
// 配列の作成,出力
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

// 配列のデータ型の確認1
$var1 = "文字列";
$var2 = 100;
$var3 = TRUE;
$array = array("日本","アメリカ","イギリス");

//var_dump($var1); echo "<br/>";
//var_dump($var2); echo "<br/>";
//var_dump($var3); echo "<br/>";
//var_dump($array); echo "<br/>";

// 配列のデータ型の確認2
$stringData = "文字列";
$integerData = 10;
$floatData = 0.15;
$boolData = TRUE;
$arrayData = array(1,2,3);

class test{}
$objectData = new test();

//$resourceData = fopen("1-1-1-48-txt.php","r");
$nullData = null;
$allData = array();

$allData = array(
	$stringData,
	$integerData,
	$floatData,
	$boolData,
	$arrayData,
	$objectData,
	//$resourceData,
	$nullData
);

//echo "<pre>";
//var_dump($allData);
//echo "<pre>";

// 配列の初期化,インデックス配列,連想配列
$countries = array(); // 初期化
$countries[0] = "アイスランド共和国";
$countries[1] = "アイルランド";
$countries[2] = "アゼルバイジャン共和国";

//var_dump($countries);
//echo $countries[2];

$mail = array();
$mail["suzuki"] = "suzuki@mail.com";
$mail["yamada"] = "yamada@mail.com";

//var_dump($mail);

// array()関数を使用した連想配列の作成
$mail = array();
$mail = array(
	"suzuki" => "suzuki@mail.com",
	"yamada" => "yamada@mail.com"
);

//var_dump($mail);

// 多次元配列
$users = array();
$users[1]["name"] = "suzuki";
$users[1]["mail"] = "suzuki@mail.com";
$users[2]["name"] = "saitou";
$users[2]["mail"] = "saitou@mail.com";
$users[3]["name"] = "tanaka";
$users[3]["mail"] = "tanaka@mail.com";

//var_dump($users);

// 多次元配列のインデックス配列をarray()で作成
$aks = array();
$aks = array(
	array("あ","い","う","え","お"),
	array("か","き","く","け","こ"),
	array("さ","し","す","せ","そ")
);

//var_dump($aks);

// 多次元配列の連想配列をarray()で作成
$a = array();
$k = array();
$s = array();
$aks = array();

$a = array("first"=>"あ","second"=>"い","third"=>"う","forth"=>"え","fifth"=>"お");
$k = array("first"=>"か","second"=>"き","third"=>"く","forth"=>"け","fifth"=>"こ");
$s = array("first"=>"さ","second"=>"し","third"=>"す","forth"=>"せ","fifth"=>"そ");
$aks= array("recodeA"=>$a,"recodeK"=>$k,"recodeS"=>$s);

var_dump($aks);

