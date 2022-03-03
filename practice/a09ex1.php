<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Emp   //定義類別
    {
        public $Namea = '小屁還';  //定義名稱，初始值為 小屁還 的屬性
        public function SN()
        {   //定義一個函式(方法)
            echo '到底是誰家的' . $this->Namea;   //變數 $this 指物件本身， -> 用來存取物件成員 
        }
    }

$Obj = new Emp();
$Obj->Namea = '大吃和';
$Obj->SN();

    ?>
</body>

</html>