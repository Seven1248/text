<table border = "1" width = "100%">

<?php 
    $fp = fopen('./dir1/maskdata.csv','r');

    $header = fgets($fp);
    $head = explode(',',$header);
    echo '<tr>';
    echo "<th>{$head[0]}</th>";
    echo "<th>{$head[1]}</th>";
    echo "<th>{$head[2]}</th>";
    echo "<th>{$head[3]}</th>";
    echo "<th>{$head[4]}</th>";
    echo "<th>{$head[5]}</th>";
    echo "<th>{$head[6]}</th>";
    echo '</tr>';
   
    while ($line = fgets($fp)){
        $data = explode(',', $line);
        echo '<tr>';
        echo "<td>{$data[0]}</td>";
        echo "<td>{$data[1]}</td>";
        echo "<td>{$data[2]}</td>";
        echo "<td>{$data[3]}</td>";
        echo "<td>{$data[4]}</td>";
        echo "<td>{$data[5]}</td>";
        echo "<td>{$data[6]}</td>";
        echo '</tr>';
    }


    echo '</tr>';



?>




</table>
