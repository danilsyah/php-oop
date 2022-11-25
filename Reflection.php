<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "danil";
$request->password = "123";

// ValidationUtil::validate($request); 
ValidationUtil::validateReflection($request);

class RegisterUserRequest {
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "icih";
$register->address = "bandung";
$register->email = "danil@gmail.com";

ValidationUtil::validateReflection($register);