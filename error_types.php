<?php
/*
1. Notice => show's error msg and won't stop the script
2. Warning => show's error msg and won't stop the script
3. Fattel  => show's error msg and it will stopt the script execution
4. Parse error/ syntax error => show's error msg and it will stopt the script execution
 */

// Notice Warning
ini_set('display_errors', 0);
var_dump(ini_get('display_errors'));
// ini_set('display_errors', )
//echvo $a;
$arr = array();
echo $arr[1];

include('test.php');

require('test.php');
