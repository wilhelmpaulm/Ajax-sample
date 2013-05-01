<?php
require 'eden.php';

$db = eden('mysql', 'localhost' ,'mess', 'root', '');

$rows = $db->getRows("messages");
echo json_encode($rows);

?>
