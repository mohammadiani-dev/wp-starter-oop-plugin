<?php
namespace Mohammadiani\WpOopCore\utils;

class includes{

    public static function view( $path , array $data ){
        extract($data);
        include AVANS_PATH . 'template/' . $path . '.php';
    }

    public static function shortcode( $path , array $data ){
        extract($data);
        include AVANS_PATH . 'template/shortcodes/' . $path . '.php';
    }

}