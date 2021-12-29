<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-else Statements</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:rgb(228, 195, 195);
        margin:auto;
        padding:23px;
    }
    </style>
<body>
    <div class="container">
    <h2>PHP If-else Statements:</h2>
        <?php
        $age = 18;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==18){
            echo "Wait for a year bitch";
        }
        else{
            echo "You can't go to the party";
        }
        ?>
    <h2>PHP Loops:</h2>
    <?php
        echo "<h3>Array Syntax:</h3>";
        echo "\$language = array(\"Python\",\"C++\",\"php\",\"Nodejs\");";
        $language = array("Python","C++","php","Nodejs");
        echo "<br>";
        echo count($language);
        echo "<h3>While Loops:</h3>";
        echo "<br>";
        $a = 0;
        while ($a <= 10) {
            echo "The valueof a is: ";
            echo "$a<br>";
            $a++;
        }
        echo "<br>";
        echo "<h3>For Loops:</h3>";
        for ($i=0; $i < count($language); $i++) { 
            echo "<br>The language is: ";
            echo $language[$i];
        }
        echo "<br>";
        echo "<h3>For Each:</h3>";
        foreach ($language as $value) {
            echo "<br>The language is: ";
            echo $value;
        }
        echo "<h2>Functions:</h2>";
        function print5($var11){
            echo "$var11<br>";
        }
        print5("hello");
        print5(123);
        echo "<h2>Strings:</h2>";
        $str = "Prathik P Kulkarni";
        echo $str;
        $len = strlen($str);
        echo "<br>The length of the string is ".$len;
        echo "<br><b>. is a concatenation operator.</b>";
        echo "<br>The number of words in the string is ". str_word_count($str);
        echo "<br>The reversed string is ". strrev($str);

    ?>
    </div>
</body>
</html>