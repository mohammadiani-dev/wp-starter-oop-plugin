<?php

namespace Mohammadiani\WpOopCore\utils;

use Mohammadiani\WpOopCore\utils\meta;

class post{

    public static function meta( int $post_id ,  $meta_key = null ){
        return new meta('post' , $post_id , $meta_key);
    }

}