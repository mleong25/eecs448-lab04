<?php
echo "<table border=\"1\"><tr><td></td>";
    for ($i = 1; $i < 101; $i ++)
    {
        echo "<td>" .(string)$i . "</td>";
    }
    echo "</tr>";
    for ($i = 1; $i <= 100; $i++){
        echo'<tr>';
        for ($j = 1; $j <= 100; $j++) {
            echo '<td>' .$i*$j. '</td>';
        }
        echo '</tr>';
    }
    echo"</table>";
?>