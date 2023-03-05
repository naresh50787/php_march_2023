<?php
// if
// $a =10;
// if($a == 10 ){
//     echo "inside if";
// }else{
//     echo "inside else";
// }

// $colour = 'red';
// if($colour == 'green'){
//     echo "Selected colour is green";
// }elseif($colour == 'blue'){
//     echo "selected colour is blue";
// }elseif($colour == 'yellow'){
//     echo "selected colour is yellow";
// }elseif($colour == 'black'){
//     echo "selected colour is black";
// }elseif($colour == 'orange'){
//     echo "selected colour is orange";
// }elseif($colour == 'pink'){
//     echo "selected colour is ping";
// }elseif($colour == 'red'){
//     echo "selected colour is red";
// }else{
//     echo "Selected colour is not in the list";
// }

$colour = 'yellow';
switch($colour){
    case 'red':
        echo "selected colour is red";
        break;
    case 'blue':
        echo "selected colour is blue";
        break;
    case 'yellow':
        echo "selected colour is yellow";
        break;
    default:
        echo "selected colour is not in the list";
    
}