<?php

namespace Mohammadiani\WpOopCore\utils;

use Mohammadiani\WpOopCore\utils\meta;

class user{

    public static function meta( int $user_id ,  $meta_key = null ){
        return new meta('user' , $user_id , $meta_key);
    }

}