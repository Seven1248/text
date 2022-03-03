<?php

class class_name [extends parentclass_name]
[public|private|protected|var$ property_name[=value];]
[[public|private|protected]function method)name(...){...}]
// class :定義類別
// class_name: 類別名稱，命名規則同變數規則
//  [extends parentclass_name]  繼承其他類別，若無則省略不寫

//EXEXEXEXEXEX
class Emp   //定義類別
{
public $Namea = '小屁還';  //定義名稱，初始值為 小屁還 的屬性
public function SN(){   //定義一個函式(方法)
echo '到底是誰家的'.$this->Namea;   //變數 $this 指物件本身， -> 用來存取物件成員 
}    
}


?>

<!-- class: -->