<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>物件導向</title>
</head>
<body>
    <?php 
    class Employeee
    {
        public $Name = '小丸子';
        public function ShowName(){
            echo $this->Name;
           
        }
    }
    
    $Obj = new Employeee();
    $Obj->Name = '花輪';
    $Obj->ShowName();
    

    ?>
</body>
</html>