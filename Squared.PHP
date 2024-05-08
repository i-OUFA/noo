<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squared</title>
</head>
<body>
    <?php 
    $num1 = 2;
    $num2 = 2;  
    $result = 1;
    for ($i=0; $i < $num1; $i++){
        $result *= $num2;
    }
 echo $result;
    ?>
</body>
</html>
