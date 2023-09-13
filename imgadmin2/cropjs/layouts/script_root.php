<?php
$get_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$arr = explode("?", $get_url, 2);
$actual_link = $arr[0];
if ($_SERVER["HTTP_HOST"] == "localhost") {
   define('SCRIPT_ROOT', 'http://localhost/cropjs/');
} else if ($_SERVER['HTTP_HOST'] == '143.110.184.198') {
   define('SCRIPT_ROOT', 'http://143.110.184.198/jitendra/cropjs/');
} else {
   define('SCRIPT_ROOT', 'http://143.110.244.110/jitendra/cropjs/');
}
