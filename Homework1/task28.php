<table border="1">
    <?php
     for ($str = 1; $str < 10; $str++){
        echo '<tr align = "center">';
        for ($col = 1; $col < 10; $col++){
            echo '<td align = "center" width="20">' . $str * $col . '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>