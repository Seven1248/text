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
    class CC
    {

        const PI = 3.14;
        public $Radius;
        public function SA()
        {
            echo '園面積為' . ($this->Radius * $this->Radius * self::PI);
        }
    }

    echo '圓周率為'.CC::PI.'<br>';
    $Obj = new CC();
    $Obj->Radius = 127.591;

    $Obj->SA();


    ?>
</body>

</html>