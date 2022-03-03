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
     class ABCC
     {
        public $Nam;
        function __construct($str){   //建構函式 __construct
            $this->Nam = $str;    //定義物件存放姓名
            echo'建立名字為'.$this->Nam.'的物件!<br>';
        }
     }
     $ObjA = new ABCC("狗角珠");
     $ObjB = New ABCC('我珍香');
    
    //建構函式用來物件初始化的函示
    
    ?>
    
    
    






</body>
</html>