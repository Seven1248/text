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
    class EEE
    {
        public $Name;
        function __construct($Sr){
            $this->Name = $Sr;
            echo '以建立物件'.$this->Name.'<br>';
        }
    }

    $ObjA = new EEE("草尼瑪");
    


    //   PHP7  匿名型別(anonymous class) ,允許設計人員在沒有指定類別下建立物件
    $ObjB = new class("大優惠")
    {
        public $Name;
        function __construct($Sr){
            $this->Name = $Sr;
            echo '以建立物件'.$this->Name ;
        }
    }
    ?>    





</body>
</html>