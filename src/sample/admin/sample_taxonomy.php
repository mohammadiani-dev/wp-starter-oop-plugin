<?php 
namespace Mohammadiani\WpOopCore\sample\admin;

use Mohammadiani\WpOopCore\admin\taxonomy;

class sample_taxonomy extends taxonomy{

    public function __construct()
    {
        $this->key = "book-category";
        $this->name = "book category";
        $this->plural_name = "book categories";
        $this->hierarchical = false;
        $this->post_types = ['book'];

        parent::__construct();
    }


}