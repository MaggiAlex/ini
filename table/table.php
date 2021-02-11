<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabella</title>

    <style>

        table, th, td {
            border: 1px solid black;
            margin-left: auto;
            margin-right: auto;
        }

    </style>

</head>
<body>
    <h1 style="text-align: center;">Tabella</h1>

    <table style="border: 2px;">
        <?php
            $n = 1;

            for ($i=1; $i <= 10; $i++) { 
                echo '<tr>';

                for ($j=1; $j <= 10; $j++) { 
                    echo '<td align = center>' . $n . '</td>';
                    $n++;
                }
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>