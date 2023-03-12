<?php
// Foreach

$arr = array(1=>1,2,5=>3,'four'=>4,5);

print_r($arr);

// for($i=0; $i<count($arr); $i++){
//     echo "index =".$i."Value =".$arr[$i]."<br>";
// }

foreach($arr as $key => $val){
    echo "index = ".$key."Value =".$val."<br>";
}

?>