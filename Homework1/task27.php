<table border = 1 width = 500 height = 500>
    <?php
    $colors = array('red','yellow','blue','gray','maroon','brown','green');
    $lenght = count($colors);
    $rows = 10;
    $cols = 10;
    for($row = 0; $row < $rows; $row++){
        echo "<tr align = \"center\">";
        for($col = 0; $col < $cols; $col++){
            $color = rand(0, $lenght - 1);
            $number = rand(0, 9999);
            echo "<td align = \"center\" bgcolor = ".$colors[$color].">".$number."</td>";
        }
        echo "</tr>";
    }
    ?>
</table>