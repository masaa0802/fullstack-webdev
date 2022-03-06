<?php 
class Person
{
    #プロパティ
    #public = クラスの外からの参照可能
    #private = クラスの外からの参照不可
    private $name;
    public $age;

    function __construct($name , $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    #メソッド
    #public function hello() { = function hello() {
    function hello() {
        # this = インスタンス化されたオブジェクトを指す
        echo 'hello, ' . $this->name;
    }
}

$bob = new Person('Bob', 18);
echo $bob->hello();