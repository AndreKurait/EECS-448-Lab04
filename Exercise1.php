<?php //Refresh it everytime.
        $Rows = 100; //Dynamic number for Rowss
        $Cols = 100; // Dynamic number for Colsumns
        echo '<table border="1">';
        for($i=1;$i<=$Rows;$i++){ echo '<tr>';
        for($j=1;$j<=$Cols;$j++){ echo '<td>' . $i * $j . '</td>'; }
        echo '</tr>';
        }
        echo '</table>';
?>