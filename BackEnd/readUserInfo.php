<?php

$inputUserName = $_POST["email"];
$inputPw = $_POST["pw"];
$sugar = 'auDzMD4Y';
$inputUserNameFin = crypt($inputUserName, $sugar);
$inputPwFin = crypt($inputPw, $sugar);





?>