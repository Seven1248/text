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
        // $x = $_GET['x']
    class MyMath {
        public static function apia($x){
            return $x * $x * $x ;
        }
    }
    echo '5的三次方是'.MyMath::apia(5);
    
    ?>
</body>
</html>