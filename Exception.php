<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "123";

try{
    validateLoginRequest($loginRequest);
    echo "VALID". PHP_EOL;
}catch(ValidationException | Exception $exception){
    echo "Error : {$exception->getMessage()}". PHP_EOL;

    // function getTrace untuk mendebug exception
    var_dump($exception->getTrace());
    echo $exception->getTraceAsString(). PHP_EOL;
}finally{
    echo "Error atau enggak akan di eksekusi". PHP_EOL;
}
