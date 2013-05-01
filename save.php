<?php

require 'eden.php';

$db = eden('mysql', 'localhost' ,'mess', 'root', '');

if($_POST){
    
    $val = array("message" =>$_POST["message"]);
    $db->insertRow('messages', $val);
};
?>
