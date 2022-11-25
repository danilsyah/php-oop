<?php

class SocialMedia{
    public string $name;
}

// final class tidak akan bisa di wariskan ke class turunannya, akan error jika di extends
// final class Facebook extends SocialMedia{

// }

// error
// class FakeFacebook extends Facebook{

// }


class Facebook extends SocialMedia{
    // final function tidak akan bisa di overide dengan turunannya
    final public function login(string $username, string $password):bool{
        return true;
    }
}

class FakeFacebook extends Facebook{
    // error karena mengoverride function final pada class parent nya
    // public function login(string $username, string $password):book{
    //     return false;
    // }
}
