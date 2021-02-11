<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function showFunc() {
            var p = document.getElementById('fahr');

            if (p.style.display === "none") {
                p.style.display = "block";
            } else {
                p.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <label for="celsius">Celsius: </label>
        <input type="text" name="celsius"><br>
        <input type="submit" value="Submit" onclick="showFunc()">
    </form>

    <?php
        $celsius = $_POST['celsius'];

        if (empty($celsius)) {

        } else {
            $f = NULL;
    
            $f = (float)(($celsius * 9 / 5) + 32);
    
            echo '<p id="fahr">Fahrenheit: ' . $f . '</p>';
        }
    ?>

</body>
</html>