<?php 
namespace Mohammadiani\WpOopCore\sample\admin;

use Mohammadiani\WpOopCore\admin\post_type;

class sample_post_type extends post_type{

    public function __construct()
    {
        $this->key = "book";
        $this->name = "book";
        $this->plural_name = "books";

        parent::__construct();
    }


}