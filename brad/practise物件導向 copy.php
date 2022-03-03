<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物件導向</title>
</head>
<body>
    <?php

use Employeee as GlobalEmployeee;

    class Employeee
    {
        public $Name;
        function __construct($str)
        {
         $this->Name = $str;
         echo 'OK'.$this->Name.'<br>';   
        }
        function __destruct()
        {
            $this->Name=Null;
            echo'XX';
        }
    }
    $obj = new GlobalEmployeee("狗咬豬");
    //$obj = new GlobalEmployeee("abc");
    $obj = null ;
    

    ?>
</body>
</html>