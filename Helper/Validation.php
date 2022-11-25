<?php

// require_once "data/LoginRequest.php";

function validateLoginRequest(LoginRequest $request ){
    if(trim($request->username) != "" && trim($request->password) != ""){
        echo "successfuly login". PHP_EOL;
    }else if (!isset($request->username)){
        throw new ValidationException("Username is null");
    }else if(!isset($request->password)){
        throw new ValidationException("Password is null");
    }else if(trim($request->username) == ""){
        throw new Exception("Username is empty");
    }else if(trim($request->password) == ""){
        throw new Exception("Password is empty");
    }
}