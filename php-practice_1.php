<?php
// Q1 変数と文字列
$name = '「桑田」';
var_dump($name);

$Message = '私の名前は ' . $name . ' です。';
var_dump($Message);

// Q2 四則演算
$num = 20;
var_dump($num);

$num = $num / 2;
var_dump($num);

// Q3 日付操作
$date = date('Y年m月d日 H時i分s秒');
var_dump($date);

$Message = '現在時刻は、 ' . $date . ' です。';
var_dump($Message);

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    $message = ($device === 'windows') ? '使用OSは、windowsです。' : '使用OSは、macです。';
}else {
    $message = 'どちらでもありません。';
}
echo $message;

// Q5 条件分岐-2 三項演算子
$age = 22;
$message = ($age > 20) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列
$kantou = ['茨城県', '埼玉県', '群馬県',  '栃木県', '千葉県', '東京都', '神奈川県'];
echo  $kantou[3] . 'と' . $kantou[4] . 'は関東地方の都道府県です';

// Q7 連想配列-1
$kantou = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
];
foreach($kantou as $value){
echo $value . "\n";
}

// Q8 連想配列-2
$kantou = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];
foreach ($kantou as $prefectures => $city) {
    if ($prefectures == '埼玉県') {
    echo $prefectures . 'の県庁所在地は、' . $city . 'です。';
    }
}

// Q9 連想配列-3
$kantou = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市',
];
$kantou_only =  ['東京都' , '神奈川県' , '千葉県' , '埼玉県' , '栃木県' , '群馬県' , '茨城県'];
foreach ($kantou as $prefectures => $city) {
    if (in_array($prefectures , $kantou_only)) {
    echo $prefectures . 'の県庁所在地は、' . $city . "です。 \n" ;
    } else {
    echo $prefectures . "は関東地方ではありません。\n" ;
  }
}

// Q10 関数-1
function hello($name)  
{
    echo $name . '、こんにちは。';
}

hello('金谷さん'); //ここを安藤さんに変えて2回目を実行

// Q11 関数-2
function calcTaxInPrice($price)  
{
   return $price * 1.1;
}
$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . 'の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num)  
{
   if ($num % 2 == 1) {
       return $num . "は奇数です。\n" ;
   } else {
       return $num . "は偶数です。\n" ;
   }
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($grades)  
{
  switch ($grades) {
    case 'A':
    case 'B':
        return "合格です。\n";
    case 'C':
        return "合格ですが追加課題があります。\n";
    case 'D':
        return "不合格です。\n";
    default:
        return "判定不明です。講師に問い合わせてください。\n";
  }
}
echo evaluateGrade('A');
echo evaluateGrade('default');
?>