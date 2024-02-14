<html>
    <h3> Perform some operations on php arrays</h3>
    <?php
    $numbers = array(1,10,10,11,20,21,30, 31,40, 45,2,3,4);
    $numbers1 = array( 2,3,4,5,6,7,8,9,0,9,10,11,12); 
    $cars=array("Volvo","BMW","Toyota","Benz","Tata","Suzuki");
    $split = array_chunk($numbers,2);                // splits every two elements into seperate array.
    $combine = array_combine( $numbers, $numbers1);  // Required same number of values
    $count   =  array_count_values($numbers);        // Counts the number of occurances of each element
    $difference =  array_diff($numbers1, $numbers); // Compare and return the different values from the first array
    $reaarangeTheKeys = array_keys($difference);     // To make the keys as elements of an array
    $flip =   array_flip($numbers);                  // To make elements as keys and removes duplicate elements
    $size = sizeof($numbers);
     shuffle($numbers);                              // To shuffle the elements in an array
  
    if (in_array(1, $numbers)) { 
        echo "found"; 
    } else { 
        echo "not found"; 
    } 
    
    ?>
</html>