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
        function __construct($str){
            $this->Nam = $str;    //定義物件存放姓名
            echo'建立名字為'.$this->Nam.'的物件!<br>';
        }
        function __destruct()
        {
            $this ->Nam = NULL;   //這段似乎可有可無
            echo '你已經死了';
        }


     }
     $ObjA = new ABCC("狗角珠");
     $ObjA = NULL;
     echo $ObjA;
    
    
    //__destructor 解構函式，用來釋放物件所占用之資源的函示，在釋放物件時自動執行
    ?>
    
    
    






</body>
</html>