<!--Hello World!

<h1>Hello World!</h1>

<style>
    h1 {
        color: blue;
    }
</style>

<script>
    alert("Hello World!")
</script> -->

<?php
   /* echo "Hello World!";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>This is my first PHP page </h1> -->
 <?php 

    // echo "Hello World!";
   // echo "Hello World!"


// variable
//    $a = 5;
//    var_dump($a);
//    var_dump("John");
//    var_dump(3.14);
//    var_dump(true);
//    var_dump([1, 2, 3]);
//    var_dump(null);

// variable scope

    $a = 5;
    // echo $a;

    // function test ()
    // {
    //     static $a = 6;
    //     echo $a;
    //     echo "<br>";
    //     $a++;
    // }

    //  test();

    //  test();
    // // echo $a;

    // echo & print

    // echo ("Hello! <br>"), ("Hello! <br>");
    // echo "World! <br>", "World! <br>";
    // print ("Hello! <br>");
    // print "Hello! <br>";
    // echo print("");

    // Data Types
    // $a = "Kyla";
    // $b = 5;
    // $c = 3.14;
    // $d = true;
    // $e = [1, 2, 3];
    // $f = new stdClass();
    // $g = null;
    // $h = fopen("php_practice.php", "r");

    // var_dump($a);
    // echo "<br>";
    // var_dump($b);
    // echo "<br>";
    // var_dump($c);
    // echo "<br>";
    // var_dump($d);
    // echo "<br>";
    // var_dump($e);
    // echo "<br>";
    // var_dump($f);
    // echo "<br>";
    // var_dump($g);
    // echo "<br>";
    // var_dump($h);
    // echo "<br>";
    
    // strings

   
    // $name = "John Doe";

    // echo strlen($name), "<br>";
    // echo str_word_count($name), "<br>";
    // echo strpos($name, "Doe"), "<br>";
    // echo strtoupper($name), "<br>";
    // echo strtolower($name), "<br>";
    // echo str_replace("Doe", "Cruz", $name), "<br>";
    // echo strrev($name), "<br>";
    // echo trim($name), "<br>";
    // echo print_r(explode("o", $name), "<br>");

    //Concatinate
    // $x = "Hello";
    // $y = "World";
    // echo $x ." ". $y . "<br>";
    // echo "$x $y <br>";
    // echo '$x $y <br>';

    //Slicing
    // $x = "Hello";
    // echo substr($x, 1, 4), "<br>";
    // echo substr($x, 1), "<br>";
    // echo substr($x, -5, 2), "<br>";

    //    $
    
    // Escape Characters
    // $a = "sample";
    // $x = "John \"Pogi\" Doe";
    // echo  $x;

    // Numbers
    // $a = -1; //int
    // $b = 1.0; //float
    // $c = "5 eggs"; //string

    // echo PHP_INT_MAX, "<br>";
    // echo PHP_INT_MIN, "<br>";
    // echo PHP_INT_SIZE, "<br>";
    // echo is_int($c);

    // echo PHP_FLOAT_MAX, "<br>";
    // echo PHP_FLOAT_MIN, "<br>";
    // echo PHP_FLOAT_DIG, "<br>";
    // echo PHP_FLOAT_EPSILON, "<br>";
    // echo is_float($b), "<br>";

    // echo is_numeric($c);

        $a = "John";
        $b = 5;
        $c = 3.14;
        $d = true;
        $e = [1, 2, 3];
        $f = new stdClass();
        $g = null;
        $h = fopen("php_practice.php", "r");
         

        // casting - string
        //  $a = (string) $a;
        //  $b = (string) $b;
        //  $c = (string) $c;
        //  $d = (string) $d; 
        //  $e = $e;
        //  $f = $f;
        //  $g = (string) $g;
        //  $h = (string) $h;

        // casting - int
        //  $a = (int) $a;
        //  $b = (int) $b;
        //  $c = (int) $c;
        //  $d = (int) $d; 
        //  $e = (int) $e;
        //  $f = $f;
        //  $g = (int) $g;
        //  $h = (int) $h;
        
        // casting - float
        //  $a = (float) $a;
        //  $b = (float) $b;
        //  $c = (float) $c;
        //  $d = (float) $d; 
        //  $e = (float) $e;
        //  $f = $f;
        //  $g = (float) $g;
        //  $h = (float) $h;
 
        // casting - boolean
        //  $a = (bool) $a;
        //  $b = (bool) $b;
        //  $c = (bool) $c;
        //  $d = (bool) $d; 
        //  $e = (bool) $e;
        //  $f = (bool) $f;
        //  $g = (bool) $g;
        //  $h = (bool) $h;

        // casting - array
        //  $a = (array) $a;
        //  $b = (array) $b;
        //  $c = (array) $c;
        //  $d = (array) $d; 
        //  $e = (array) $e;
        //  $f = (array) $f;
        //  $g = (array) $g;
        //  $h = (array) $h;

         
        // var_dump($a);
        // echo "<br>";
        // var_dump($b);
        // echo "<br>";
        // var_dump($c);
        // echo "<br>";
        // var_dump($d);
        // echo "<br>";
        // var_dump($e);
        // echo "<br>";
        // var_dump($f);
        // echo "<br>";
        // var_dump($g);
        // echo "<br>";
        // var_dump($h);
        // echo "<br>";

        // php math
        // $pi = pi();
        // echo $pi, "<br>";

        // $minNumber = min(300, 80, 4, 98, 3);
        // echo $minNumber, "<br>";
        // $maxNumber = max(300, 80, 4, 98, 3);
        // echo $maxNumber, "<br>";

        // $num = -5;
        // echo abs($num), "<br>";

        // $sqrt = sqrt(9);
        // echo $sqrt, "<br>";

        // $rounded = round(3.49, 1);
        // echo $rounded, "<br>";

        // $rand = round(3.49, 1);
        // echo $rand, "<br>";

        // echo PHP_INT_MAX, "<br>";
        // Echo PHP_INT_MIN, "<br>";
        // echo rand(), "<br>";

        // echo rand(5, 30), "<br>";

        // PHP CONSTANT
        // define("GREETING", 23);
        // echo GREETING, "<br>";

        // $x = 5;
        // function test(){
        //     echo GREETING;
        // }
        //     test();

        // PHP OPERATORS
        // ARITHMITIC
        // ADDITION
        // echo 6 + 5 + 90, "<br>";

        // // SUBTRACTION
        // echo 7 - 2 - 10, "<br>";

        // // PEMDAS
        // echo 7 - 2 + 90, "<br>";

        // // MULTIPLICATION
        // echo 6 * 8 * 9, "<br>";

        // // DIVISION
        // echo 6 / 8, "<br>";

        // echo 13 + 6 / 2 * 2, "<br>";
        
        // // MODULOS
        // echo 5 % 3, "<br>";
        
        // // EXPONENT
        // echo 6**2, "<br>";

        // // DIVISION
        // echo 6 / 8, "<br>";

        // ASSIGNMENT
        // $x = 5;

        // $x +- 10;

        // echo $x, "<br>";

        // COMPARISON

        // var_dump(6 == 6); 

        // var_dump(6 === "6");

        // var_dump(100 != 99);

        // var_dump(100 !== 99);

        // var_dump(6 > 4);

        // var_dump(6 >= 6);

        // var_dump(6 < 7);

        // var_dump(6 <= 7);

        // echo 1 <=> 1;

        // echo 2 <=> 1;

        // $x = 5;
        // echo ++$x, "<br>";

        // $y = 5;
        // echo $y++, "<br>";
        // echo $y, "<br>";

        // $x = 5;
        // echo --$x, "<br>";

        // $y = 5;
        // echo $y--, "<br>";
        // echo $y, "<br>";

        // LOGICAL 
        // var_dump(true and true);
        // echo"<br>";
        // var_dump(6 == "6" && 6 > 9);
        // echo"<br>";

        // var_dump(true or true);
        // echo"<br>";
        // var_dump(6 == "6" or 6 > 9);
        // echo"<br>";

        // // xor
        // var_dump(true xor false);
        // echo"<br>";
        // var_dump(6 == "6" xor 6 > 9);
        // echo"<br>";

        // var_dump(!true);
        // echo"<br>";
        // var_dump(!(6 == 7 ));
        // echo"<br>";

        // echo "Hello" . "World"
        // $x = "Hello";
        // $x =  $x . "World";
        // $x .= "World";
        // echo $x;






 ?>

</body>
</html>
   
