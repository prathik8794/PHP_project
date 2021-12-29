<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Website</title>
</head>
<body style="background-color:yellow">
    <div class="container">
        <h1 style="text-align:center;color:blue;font-family:sans-serif">This is my First PHP website</h1>
        <?php
        echo "<h2>Hello world printed using PHP</h2>";
        //Secret Algorithm
        $variable = 32;
        $variable2 = 34;
        echo "<h2> 1.Arithmetic Operator </h2>";
        echo "32+34=";
        echo $variable+$variable2;
        echo "<br>";
        echo "32-34=";
        echo $variable-$variable2;
        echo "<br>";
        echo "32*34=";
        echo $variable*$variable2;
        echo "<br>";
        echo "32/34=";
        echo $variable/$variable2;
        echo "<h2> 2.Assignment Operator </h2>";
        $newVar = $variable2;
        echo "the new variable is newVar whose value is: ";
        $newVar+=2;
        echo $newVar;
        echo "<h2> 3.Comparision Operator </h2>";
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "<h2>4.Increment/Decrement Operator</h2>";
        echo "<br>";
        echo $variable2++;
        echo "<br>";
        echo $variable2--;
        echo "<br>";
        echo ++$variable2;
        echo "<br>";
        echo --$variable2;
        echo "<br>";
        echo "<h2>5.Logical Operator</h2>";
        $myVar = (true and false);
        echo var_dump($myVar);
        echo "<br>";
        echo "<h2>6.Data Types</h2>";
        echo "The data types in PHP are:";
        echo "<br>";
        echo "1.String";
        echo "<br>";
        echo "2.Integer";
        echo "<br>";
        echo "3.Float";
        echo "<br>";
        echo "4.Boolean";
        echo "<br>";
        echo "5.Array";
        echo "<br>";
        echo "6.Object";
        echo "<br>";
        echo "<br>";
        $var = "This is a string";
        echo "\$var = $var;<br>";
        echo var_dump($var);
        echo "<br>";

        $var = 67;
        echo "\$var = $var;<br>";
        echo var_dump($var);
        echo "<br>";

        $var = 67.11;
        echo "\$var = $var;<br>";
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo "\$var = $var;<br>";
        echo var_dump($var);

        echo "<h3>#Constants</h3>";
        echo "define(PI,3.14);<br>";
        define('PI',3.14);
        echo PI;
        
        ?>
    </div>
</body>
</html>