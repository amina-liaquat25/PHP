
<?php
echo "Hello World!";
?>
       
       
       <!-- Comments -->

<?php
// This is a single-line comment
# This is also a single-line comment
?>
<?php
/*
This is a
multiple line
Comment.
*/
?>


          <!-- Variables -->
<?php
$txt = "Hello world!";  # Type String
$x = 5;                        # Type int
$y = 4.5;         # Type Float
?>



<?php  
    $name = "Amina Liaquat";        //Global Variable  
    function global_var()  
    {  
        global $name;  
        echo "Variable inside the function: ". $name;  
        echo "</br>";  
    }  
    global_var();  
    echo "Variable outside the function: ". $name;  
?>  


        <!-- Data type -->


    <?php
       $x = "Hello world!";          // String
       echo $x;
    ?>

    <?php
       $x = 55;
       var_dump($x);           // Integer
    ?>

   <?php
         $x = 52.55;
         var_dump($x);         // Float
     ?>


   <?php
         $x = true;                // Boolean
         $y = false;
    ?>


    <?php
        $x =array("Rohan", "Lovish", "Harry");       // Array
        var_dump($x);
     ?>


    <?php
        $x =null;                  // null
     ?> 

         # Operators 

# Arithmetic operaters
<?php
$x = 10;
$y = 3;

// Addition
echo $x + $y;  // Output: 13

// Subtraction
echo $x - $y;  // Output: 7

// Multiplication
echo $x * $y;  // Output: 30

// Division
echo $x / $y;  // Output: 3.3333

// Modulus
echo $x % $y;  // Output: 1

// Exponentiation
echo $x ** $y; // Output: 1000
?>

   # Assignment Operaters

<?php
$x = 5;

// Add and assign
$x += 3;  // Equivalent to $x = $x + 3
echo $x;  // Output: 8

// Subtract and assign
$x -= 2;  // Equivalent to $x = $x - 2
echo $x;  // Output: 6

// Multiply and assign
$x *= 2;  // Equivalent to $x = $x * 2
echo $x;  // Output: 12

// Divide and assign
$x /= 3;  // Equivalent to $x = $x / 3
echo $x;  // Output: 4

// Modulus and assign
$x %= 3;  // Equivalent to $x = $x % 3
echo $x;  // Output: 1
?>









