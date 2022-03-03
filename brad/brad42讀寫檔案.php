<?php
    $fp = fopen('./dir1/brad1.txt', 'w');
    fwrite($fp, "Hello, Bradasd");
    fclose($fp);  //關閉檔案
    header('Location: ./dir1/brad1.txt');

?>