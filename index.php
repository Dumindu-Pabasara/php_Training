<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $variable = "DTK TV"; echo $variable ?></title>
</head>
<body>
<form >
        <input type="text" name="userchannel">
        <button>Submit</button>
    </form>    
    <h1><?php echo"Dumindu Pabasara" ?></h1>

<?php
    
    echo("Hello Pabasara!!!");
    echo 123;
    echo 45+5;

    //variable declaration
    $my_name = "Dumindu";
    echo $my_name;

    //Assigning value into variable
    $my_name1 = $_GET['userchannel'];
    echo $my_name1. " is a supper boy ";
    
    //This is the single line comment
    /*This is multiline comment*/
    
    //3rd question
    $var1 = "Dumindu";
    $var2 = " Pabasara";
    $var3 = $var1.$var2;
    echo "<br>".$var1.$var2."<br>";

    //Function
    echo strlen("Hello world")."<br>";
    echo str_word_count("Hello World")."<br>";
    echo sin(90)."<br>";
    echo cos(90)."<br>";

    //Data Types
    $String = "Kamal"."<br>";
    $int = 254 ."<br>";
    $float = 25.25 ."<br>";
    echo $String.$int.$float ."<br>";

    //Array
    $myArray = array('DTK','TV','Dumindu');
    echo $myArray[0];

    //Arithmatic Operators
    echo 10+25 ."<br>";
    echo 25-8 ."<br>";
    echo 10*10 ."<br>";
    echo 52/2 ."<br>";
    echo 12%10 ."<br>";
    echo 10**10;

    //Assinemnt Openator
    $x = 5;
    $x = $x*5

    // $x = "5";
    // $Var2 = 10;
    //  if($x == $Var2){
    //     echo "Correct";
    //  }else{
    //     echo "Wrong";
    //  }
    //  ===(copare the equal with variable type and variable)
    // !==(compare the not equal with variable type and variable)
    // < (check the size of variables)

    //spaceship <=> -1 , 0 , 1
    // $myvar1 = 5;
    // $myvar2 = 5;
    // echo ($myvar1 <=> $myvar2); if the var1 is large more than var 2
    // dislply the 1 and is it small display the -1.
?>

</body>
</html>
