
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







