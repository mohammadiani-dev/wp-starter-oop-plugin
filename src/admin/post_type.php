<?php 
namespace Mohammadiani\WpOopCore\admin;

class post_type{

    public string $key = 'sample';

    public array $labels = [];

    public string $name = 'sample';

    public string $plural_name = 'samples';

    public string $description = '';

    public array $args = [];

    public function __construct()
    {
        add_action("init" , [$this , "create"]);
    }

    public function get_args(){
        $args = [
            'supports'             => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments'],
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
        ];

        foreach($this->args as $key => $item){
            $args[$key] = $item;
        }

        return $args;
    }

    public function get_lables(){

        $labels = array(
            'name'                => $this->labels['name'] ?? __($this->plural_name , AVANS_TEXT_DOMAIN),
            'singular_name'       => $this->labels['singular_name'] ?? __($this->name , AVANS_TEXT_DOMAIN),
            'menu_name'           => $this->labels['menu_name'] ?? __($this->name , AVANS_TEXT_DOMAIN),
            'all_items'           => $this->labels['all_items'] ?? __("All " . $this->plural_name , AVANS_TEXT_DOMAIN),
            'view_item'           => $this->labels['view_item'] ?? __("view" , AVANS_TEXT_DOMAIN),
            'add_new_item'        => $this->labels['add_new_item'] ?? __("Add a new " . $this->name , AVANS_TEXT_DOMAIN),
            'add_new'             => $this->labels['add_new'] ?? __("Add" , AVANS_TEXT_DOMAIN),
            'edit_item'           => $this->labels['edit_item'] ?? __("Edit " . $this->name , AVANS_TEXT_DOMAIN),
            'update_item'         => $this->labels['update_item'] ?? __( $this->name . " update" , AVANS_TEXT_DOMAIN),
            'search_items'        => $this->labels['search_items'] ?? __("search" , AVANS_TEXT_DOMAIN),
            'not_found'           => $this->labels['not_found'] ?? __("No ". $this->plural_name ." found!" ,  AVANS_TEXT_DOMAIN),
            'not_found_in_trash'  => $this->labels['not_found_in_trash'] ?? __("No ". $this->plural_name ." found in the trash!" ,  AVANS_TEXT_DOMAIN),
        );

        return $labels;

    }


    public function create()
    {
        $args = array(
            'label'               => __($this->name , AVANS_TEXT_DOMAIN),
            'description'         => $this->description,
            'labels'              => $this->get_lables()
        );

        $args = array_merge( $args , $this->get_args() );

        register_post_type( $this->key , $args );
    }

}