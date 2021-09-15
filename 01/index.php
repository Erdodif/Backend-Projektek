<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style.php?<?php echo "szin=".$_GET["szin"]; echo "&hatter=".$_GET["hatter"]?>">
    </head>
    <body>
        <table class="szorzo">
            <?php
                $temp = "";
                $i=1;
                for ($i = 1; $i < 11; $i++)
                {
                    $temp .= "<tr>";
                    for ($j = 1; $j < 11; $j++)
                    {
                        if($i===1|| $j===1)
                        {
                            $eredmeny = $i * $j;
                            $temp .= "<th>$eredmeny</th>";
                        }
                        else
                        {
                            $eredmeny = $i * $j;
                            $temp .= "<td>$eredmeny</td>";
                        }
                    }
                    $temp .= "</tr>";
                }
                echo $temp;
            ?>
        </table>
        <form>
            <input type="text" name="szin" id="szin" placeholder="Szín">
            <input type="text" name="hatter" id="hatter" placeholder="Háttér">
            <input type="submit" value="Elküld">
        </form>
    </body>
</html>