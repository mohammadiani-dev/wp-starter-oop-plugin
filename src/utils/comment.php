<?php

namespace Mohammadiani\WpOopCore\utils;

use Mohammadiani\WpOopCore\utils\meta;

class comment{

    public static function meta( int $comment_id ,  $meta_key = null ){
        return new meta('comment' , $comment_id , $meta_key);
    }

}