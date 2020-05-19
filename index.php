


<?php

/*uses while statement to print the numbers from 1 to 100 (inclusive), except for these cases:
- If a number is a multiple of 3, write "Fizz".
- If a number is a multiple of 5, write "Buzz".
- If a number is a multiple of both 3 and 5, write "FizzBuzz".*/

$counter = 1;
while ($counter <= 100){
  if(($counter % 15) === 0){
    echo "FizzBuzz \n";
  }elseif(($counter % 5) === 0){
    echo "Fizz \n";
  }elseif(($counter % 3) === 0){
    echo "Buzz \n";
  }else{
    echo $counter . ",\n";
  }
  $counter ++;
}

/*Stores values in an output array using a for loop.
Then, uses a foreach loop to print the numbers from the array.
The print ends after the last FizzBuzz*/

$output = [];
for($i = 1; $i <=100; $i++){
  if ($i % 15 === 0){
    array_push($output, "FizzBuzz");
  }elseif($i % 5 === 0){
    array_push($output, "Fizz");
  }elseif($i % 3 === 0){
    array_push($output, "Buzz");
  }else{
    array_push($output, $i);
  }
}

foreach($output as $value){
  if($value === "Fizz"){
    continue;
  }elseif($value === "FizzBuzz"){
    echo $value;
    break;
  }else{
    echo $value . ",\n";
    }
}
?>
