<table border="1" width="100%">
    <?php
    echo "";
    $start = 1;
    $cols = 9;
    $rows = 1;

    for ($k = 0; $k < $rows; $k++) {
        echo '<td>';
        for (
            $j = $start;
            $j < $start + $cols;
            $j++
        ) {
            $newj = $j  + $k * $cols;
            echo '<td>';
            for ($i = 1; $i <= $cols; $i++) {
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br />";
            }
            echo '</td>';
        }
        echo '</td>';
    }
    ?>

</table>