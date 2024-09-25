<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>
<body>
    <h1>MULTIPLICATION TABLE(1-12)</h1>
    <table border = "1" cellpadding = "10" cellspacing = "0">
    <?php
        for($j = 1;$j<=12;$j++)
        {
            echo "<tr>";
            for($i = 1;$i<=12;$i++)
            {
                echo "<td>" . $i*$j . "</td>";
            } 
        echo "</tr>";    
        }
    ?>
    </table>
</body>
</html>