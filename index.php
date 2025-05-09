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
    $x = $x*5;

    
    $var1 = "5";
    $var2 = 10;
     if($var1 == $var2){
        echo ".<br>.Correct";
     }else{
        echo ".<br>.Wrong";
     }
    //  ===(copare the equal with variable type and variable)
    // !==(compare the not equal with variable type and variable)
    // < (check the size of variables)

    //spaceship <=> -1 , 0 , 1
    // $myvar1 = 5;
    // $myvar2 = 5;
    // echo ($myvar1 <=> $myvar2); if the var1 is large more than var 2
    // dislply the 1 and is it small display the -1. Is both variables
    // are similar then display the 0.

    $a=15;
    echo ++$a;//increase the value of a before print. So the out put is 16
    echo $a++; //increase the value of a after print. So the out put is 15

    $x=15;
    $y=16;
    if($x<$y || $x==$y){ //|| means or && means and
       echo "<br>Correct";
    }else{
       echo "<br>Wrong";
    }

     $x = array("a" => "apple", "b" => "ball");
     $y = array("r" => "red", "g" => "green");
     if($x == $y){
        echo "Correct";// check the key valu pairs.
     }else{    //a is key name and apple is key value
        echo "<br>Wrong";
     }

     $x = 10;
     if($x == 10){
      echo "Corretc";
     }elseif ($x == 15){
      echo "Output is 15";
     }else{
      echo "Wrong";
     }

     //switch statement
     switch($x){
      case 5:
         echo "Input value is 5";
         break;
      case 15:
            echo "Input value is 15";
            break;
      case 10:
            echo "Input value is 10";
            break;
      default:
            echo "Input value is not here";
     }

     //While Loops
     $x = 0;
     while($x<=10){
      echo ("Dumindu <br>");
      $x++;
     }

     //Do While
     $x =10;
     do{
      echo "Pabasara";
      $x=$x-5;
     }while($x>=10);

     //for loop
     for($i=0 ; $i<=5 ; $i++){
      echo "Dumindu";
     }
?>

</body>
</html>
