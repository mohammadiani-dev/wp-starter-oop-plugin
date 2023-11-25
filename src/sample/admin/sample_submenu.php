<?php 
namespace Mohammadiani\WpOopCore\sample\admin;

use Mohammadiani\WpOopCore\admin\menu;

class sample_submenu extends menu{

    public function __construct()
    {
        $this->menu_title = 'فرزند سمپل';
        $this->menu_slug = 'sample_menu_child';
        $this->parent_slug = 'sample_menu';
        
        parent::__construct();
    }

    public function get_content()
    {
        echo "override child content!";
    }

}