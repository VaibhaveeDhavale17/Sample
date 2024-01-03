<?php 
/*
$num=123456;
$sum=0;
$rem=0;

for($i=0;$i<strlen($num);$i++){
   
        $rem=$num%10;
        $sum=$sum+$rem;
        $num=$num/10;
    
}
echo "Sum of digit:".$sum;


for($i=2;$i<=100;$i++){
    for($j=2;$j<$i;$j++){
        if($i%$j==0){
            break;
        }
    }
    if($i==$j){
        echo "$j";
        echo "<br>";
    }
}*/

$a=123;
$rem=0;
$rev=0;
while($a>0){
    $rem=$a%10;
    $rev=($rev*10 )+$rem;
    $a=$a/10;
}
echo "Reverse number:",$rev;

?>
