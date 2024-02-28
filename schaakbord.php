<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schaakbord</title>
</head>
<body>
    <table width="540px" cellspacing="0px" cellpadding="0px" style="margin: auto;" border="1px">
        <?php

        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $totaal = $row + $col;
                if ($totaal % 2 == 0) {
                    echo "<td height=60px width=60px bgcolor=#FFFFFF></td>";
                } else {
                    echo "<td height=60px width=60px bgcolor=#000000></td>";
                }
            }
            echo "</tr>";
        }

        ?>
    </table>
</body>
</html>