<?php
namespace Mohammadiani\WpOopCore\request;

class ajax{

    public $hooks = [];

    public function __construct()
    {
        foreach($this->hooks as $hook){
            add_action( 'wp_ajax_' . $hook , [$this , str_replace("nopriv_" , "" , $hook)] );
        }
    }

}