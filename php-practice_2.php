<?php
// Q1 tic-tac問題
echo "1から100までのカウントを開始します \n";

for ($i = 1; $i <= 100; $i++) {
    if($i % 4 === 0 && $i % 5 === 0){
        echo "tic-tac \n";
    }elseif($i % 4 === 0){
        echo "tic \n";
    }elseif($i % 5 === 0){
        echo "tac \n";
    }else{
        echo $i . "\n";
    }
}
//Q:上記の複合条件を第一条件に設定した意図を教えてください。
//A:複合条件以外を一番上に書くと4の倍数かつ5の倍数の数字も計算してしまうので、複合条件を最初に書いてます。


// Q2 多次元連想配列
//問題1
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
echo $personalInfos[1]['name']. 'の電話番号は' . $personalInfos[1]['tel']. 'です。';

//問題2
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
foreach($personalInfos as $information => $individual){
  $number = $information + 1;
  echo $number . '番目の' . $individual['name'] . 'のメールアドレスは' . $individual['mail'] . 'で、電話番号は' . $individual['tel'] . "です。\n";
}

//問題3
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
$ageList = [25, 30, 18];
foreach($personalInfos as $information => & $individual){
$individual["age"] = $ageList[$information];
}
var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$Student = new Student(120, "山田");
echo '学籍番号' . $Student->studentId . '番の生徒は' . $Student->studentName . 'です。';

//Q:$Studentに格納されているデータはなんでしょうか。また、そのデータ型はなんですか?
//A:データ(120)、データ型(int)とデータ(山田)、データ型(string(6))

//Q:呼び出されている学籍番号studentId, 生徒名studentNameの属性は何でしょうか?(ex.変数)
//A:プロパティ

//Q:関数とメソッドの違いは何でしょうか?
//A:関数はクラスの外で使う。メソッドはクラスの中で使い、インスタンス化しアロー演算子を使用して呼び出す。

// Q4 オブジェクト-2
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lecture)
    {
        echo $this->studentName . 'は' . $lecture . 'の授業に参加しました。' . '学籍番号：' . $this->studentId;
    }
}
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1
$date = new DateTime;
$date->modify('-1 month');
echo $date->format('Y/m/d');

//Q:modify()実行後、$dateに格納されている値は何でしょうか。また、そのデータ型は何ですか?
//A:格納されている値は「"2025-09-23 13:59:06.088080"」、データ型はstring(26)

//問題2
$date = new DateTime;
$past = new DateTime('1992-04-25');
$diff = $date->diff($past);
echo 'あの日から' . $diff->days . '日経過しました。';


//追加問題_1
class Pokemon
{
    public $name;
    public $selement;

    public function __construct($Pokemonname,$Pokemonselement)
    {
        $this->name = $Pokemonname;
        $this->selement = $Pokemonselement;
    }

    public function attack($skill) {
        echo 'いけ、' .  $this->selement . 'ポケモン' . $this->name . '！！' . $skill . 'だ！！';
    }
}
$Pokemon1 = new Pokemon('ピカチュウ','ネズミ');
$Pokemon1->attack('10万ボルト');

//追加問題_2
class Employee
{
    public $employeeId;
    public $employeeName;

    public function __construct($Id,$Name)
    {
        $this->employeeId = $Id;
        $this->employeeName = $Name;
    }

    public function checkIn() {
        echo $this->employeeName . "が出勤しました。社員ID：" . $this->employeeId;
    }
}
$employee = new Employee(1,"山田太郎");
$employee->checkIn();
//出力：（任意の社員名）が出勤しました。社員ID：（任意の社員ID）  
?>
