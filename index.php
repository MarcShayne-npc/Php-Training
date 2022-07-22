<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>This is a Paragraph!</p>

    
    <?php
    //this is a php block ^^^ start with <?php
    //you can write php in this block

    //this is a comment

    //print line
    echo "Hello world! ";
    echo "<br>";

    //data types
        $int = 1;
        $float = 2.33;
        $string = "hello";
        $boolean = true; 
    
    //if condition
        if($int == $float){
            echo "They are the same ";
            echo "<br>";
        }
        else if($int == 1){
            echo "Int variable is equal to 1 ";
            echo "<br>";
        }
        else{
            echo "They are not the same ";
            echo "<br>";
        }

    //switch statement
        switch ($int){
            case 1:
                echo "Variable int is equal to 1 ";
                echo "<br>";
                break;
            case 2:
                echo "Variable int is equal to 2";
                echo "<br>";
                break;
            default:
                echo "none were true";
                echo "<br>";
                break;
        }
    
    //loops
        $i = 1;

        while ($i <= 10){
            echo "Loop number " . $i++;
            echo "<br>";
        }

        for($n = 0; $n < 10; $n++){
            echo "This will loop 10 times";
            echo "<br>";
        }
    
        $array = ["Marc", "Dave", "Jane"];

        foreach ($array as $value){
            echo $value;
            echo "<br>";
        }

    //this is the ending of the php block below
    ?>

    <p>This is a Paragraph!</p>

</body>
</html>