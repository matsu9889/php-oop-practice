<h1>ユーザー管理プログラム</h1>

<?php
class User //クラス
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) //コンストラクタ
    {
        $this->name = $name; //プロパティ
        $this->age = $age;
    }

    public function introduce(): string //メソッド
    {
        return "こんにちは、私の名前は" . $this->name . "です。年齢は" . $this->age . "歳です。<br>";
    }

    public function isAdult()
    {
        if ($this->age >= 18) {
            return $this->name . "さんは成人です。<br>";
        } else {
            return $this->name . "さんは未成年です。<br>";
        }
    }
}

$user1 = new User("田中太郎", 25); //インスタンス（実態なのでクラスの外に書く）
$user2 = new User("佐藤花子", 17);
$user3 = new User("鈴木一郎", 30);
?>


<h2>自己紹介</h2>
<?php
echo $user1->introduce();
echo $user2->introduce();
echo $user3->introduce();
?>


<h2>成人判定</h2>
<?php
echo $user1->isAdult();
echo $user2->isAdult();
echo $user3->isAdult();
?>