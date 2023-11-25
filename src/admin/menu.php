<?php 
namespace Mohammadiani\WpOopCore\admin;

class menu{

    protected     
        $parent_slug,
        $page_title,
        $menu_title,
        $capability,
        $menu_slug,
        $callback,
        $icon_url = '',
        $position = null;

    protected function __construct()
    {
        $this->set_default_args();
        add_action("admin_menu" , [$this , "create"]);
    }

    protected function set_default_args(){
        $this->callback   = $this->callback ?? [$this , 'content'];
        $this->page_title = $this->page_title ?? $this->menu_title;
        $this->capability = $this->capability ?? 'manage_options';
    }

    public function content(){
        echo 'menu content';
    }

    public function create()
    {
        if ( $this->parent_slug ){
            add_submenu_page(
                $this->parent_slug , 
                $this->page_title , 
                $this->menu_title , 
                $this->capability , 
                $this->menu_slug , 
                $this->callback , 
                $this->position
            );
        }else{
            add_menu_page(
                $this->page_title ,
                $this->menu_title ,
                $this->capability ,
                $this->menu_slug ,
                $this->callback ,
                $this->icon_url ,
                $this->position
            );
        }

    }

}