
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div><p>

9-1繼承<br>
繼承(inheritance)，從既有類別(base class, parent class, superclass)建立延伸的類別 <br>
(derived, child class, subclass, extended class)。<br>

@子類別繼承父類別的非私有成員，還可繼承或覆蓋父類別的方法。
@一個父類別可以有多個子類別

定義子類別<br>


class childclass_name extends parentclass_name{
    [...]
}

<hr>

9-2 存取層級
public:成員能夠被任何程式碼存取，預設值 <br>
private:成員只能被包含其定義的類別存取，無法被繼承<br>
protected:成員只能被包含其定義的類別或子類別存取，包含被繼承<br>

<hr>

9-3 覆蓋(override)
子類別繼承父類別後重新定義，且父類別不會受到影響。<br>
</p>
</div>
<hr>
<?php 
class Payroll
{
    public $Name;
    public function Pay($H,$P){
        return $H * $P ;
       
    }    
}

class Bonus extends Payroll
{
    public function Pay($H,$P){
        return $H * $P +5000 ;
    }
}
$obj1 = new Payroll();
$obj2 = new Bonus();

echo '父類別'.$obj1->Pay(100,80)."<br>";

echo '子類別'.$obj2->Pay(100,80);
?>



    









</body>
</html>
