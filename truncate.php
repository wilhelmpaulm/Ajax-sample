<?php

require 'eden.php';

$db = eden('mysql', 'localhost' ,'mess', 'root', '');

$db->deleteRows('messages', "1=1"); 