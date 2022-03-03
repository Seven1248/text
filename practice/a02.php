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
    open_folder("C\\book");  //開啟資料夾
    function open_folder($ff)
    {
        if(file_exists($ff)){   //判斷資料夾是否存在

            opendir($ff);
        }
        else{
            echo '去你媽的';  //不存在就嗆你

        }

    };
    
    ?>
</body>
</html>