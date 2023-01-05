<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->

<!-- <?php

$num = 10;

while($num>=1){
    echo "the number is: $num <br>";
    $num--;
}
?> -->

<!-- reverse no. -->
<?php
    $num = 1234545345;
    $rev_number = 0;
    while($num>1){
        $rem = $num%10;
        $rev_number =($rev_number*10)+$rem;
        $num= ($num/10);
    }
    echo $rev_number;
?>

<br>

<!-- pattern of triangle star -->
<?php
    for($i=1;$i<=5;$i++){
        for($j=0;$j<$i;$j++){
        echo "*";
        }
        echo "<br/>";
    }
?>


<!-- pyramid pattern -->
<?php
    // $n=4;
    // for($i=1;$i<=$n;$i++){
    //     for($j=1;$j<=(2*$n)-1;$j++){
    //         if($j>=$n-($i-1) && $j<=$n+($i-1)){
    //              echo"*";
    //         }else{
    //         echo "&nbsp&nbsp";
    //     }
    //     }
    //     echo "<br/>";
    // }
?>


<!-- swapping no.s -->
<?php
$a = 15;
$b = 27;
 
// Swap Logic

// echo "\nThe number before swapping is:\n";
// echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
// echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
?>

<!-- 1 to 100 prime nos -->
<?php
    for($i = 2; $i <= 100; $i++){
      $mm = 0;
      for($j = 2; $j <= $i/2; $j++) {
        //only not prime numbers
                if ($i % $j == 0) {
                  $mm++;
                  break;
                }
      }
      if ($mm == 0) {
                echo"$i is prime number<br/>";
      }
    }
  ?>


<!-- area of rectangle -->
<?php  
 $length = 14;  
 $width = 12;  
 echo "area of rectangle:".$length * $width ;  
  ?>

  <!-- area of triangle -->
  <?php  
 $base = 14;  
 $height = 12;  
 echo "area of triangle:".($base * $height)/2 ;  
  ?>

  <br>

  <!-- fibonacci no.s -->
  <?php
  function fibonacci($n){
    $num1 = 0;
    $num2 = 1;
    $counter = 0;
    $series = '';

    while($counter < $n){
        $series.=$num1;
        if($counter < ($n-1)){
            $series.=', ';
        }
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
        $counter++;
    }
    return $series;
  }

    $num = 20;
    $fibonacci_series = fibonacci($num);
    echo $fibonacci_series;
  ?>
  <br>


  <!-- factorial of no.s -->
  <?php
  function getfact($n){
        $factorial = 1;
        if($n == 0){
            return $factorial;
        }
        for($i = $n; $i >=1; $i--){
            $factorial = $factorial * $i;
        }
        return $factorial;
  }

  $num = 0;
  $factorial = getfact($num);
  echo "Factorial of $num is:", $factorial;
  
  ?>

<?php

$sum = 0;
for($x=1;$x<=20;$x++){
    $sum += $x;
}
echo "The sum of no.s 0 to 20 is:", $sum."."
?>
