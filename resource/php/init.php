<?php
require_once 'function.php';
date_default_timezone_set('Asia/Manila');

spl_autoload_register (function($class) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/Stuff/resource/php/class/'.$class.'.php';
});
?>
