<?php 
namespace Mohammadiani\WpOopCore\sample\admin;

use Mohammadiani\WpOopCore\admin\menu;

class sample_menu extends menu{

    public function __construct()
    {
        $this->menu_title = 'سمپل';
        $this->menu_slug = 'sample_menu';
        
        parent::__construct();
    }

    public function content()
    {
        echo "override content!";
    }

}