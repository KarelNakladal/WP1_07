
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$age = 16;

        if (($age <= 15) || ($age >= 65)) {
            $entryfee = 50;
        } else {
            $entryfee = 100;
        }
?>
<h1> Je ti <?= $age?>, takže platíš <?= $entryfee?> Kč. </h1>

</body>
</html>