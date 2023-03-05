<?php
$age = 20;

// if($age > 18){
//     echo "you are elgible for vote";
// }else{
//     echo "you are not elgible for vote ";
// }

($age > 18) ? $msg="you are elgible for vote" :  $msg="you are not elgible for vote ";
echo $msg;