<?php 
$obj = new class1;

$obj = new \class1;

//以商兩者相同，第二段加入命名空間
?>


<?php 
use my\name\classA;
use my\name\classB;
use my\name\classC as C;

use function my\name\funcA;
use function my\name\funcB;
use function my\name\funcC;

use const my\name\ConstA;
use const my\name\ConstB;
use const my\name\ConstC;
?>


<?php 
//PHP7 新功能
use my\name\{ClassA,ClassB,ClassC as C};
use function my\name\{FuncA,funcB,funcC};
use const my\name\{ConstA,ConstB,ConstC};

?>