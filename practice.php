
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php table</title>
</head>
<body>
<?php 
$row = 7;
$col = 7;
$a = 0;
echo"<table border>";
for ($i=1;$i<=$row;$i++){
echo "<tr>";

    for($j=1;$j<=$col;$j++)
    {
        $a++;
        echo"<td>".$j*$i."</td>";
    }
   
      echo"</tr>";  
        
 } 
        echo "</table>"
        ?>
</body>
</html>