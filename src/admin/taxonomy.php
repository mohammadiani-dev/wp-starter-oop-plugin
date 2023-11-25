<?php 
namespace Mohammadiani\WpOopCore\admin;

class taxonomy{

    public string $key = 'sample';

    public array $post_types = [];

    public array $labels = [];

    public string $name = 'sample';

    public string $plural_name = 'samples';

    public bool $hierarchical = true;

    public array $args = [];

    public function __construct()
    {
        add_action("init" , [$this , "create"]);
    }

    public function get_args(){
        $args = [
            'show_admin_column' => true,
            'show_in_rest' => true,
        ];

        foreach($this->args as $key => $item){
            $args[$key] = $item;
        }

        return $args;
    }

    public function get_labels(){

        $labels = array(
            'singular_name' => $this->labels['name'] ?? __($this->name , AVANS_TEXT_DOMAIN),
            'all_items'     => $this->labels['all_items'] ?? __('All ' . $this->plural_name , AVANS_TEXT_DOMAIN),
            'edit_item'     => $this->labels['edit_item'] ?? __('Edit ' . $this->name , AVANS_TEXT_DOMAIN),
            'view_item'     => $this->labels['view_item'] ?? __('View ' . $this->name , AVANS_TEXT_DOMAIN),
            'update_item'   => $this->labels['update_item'] ?? __('Update ' . $this->name , AVANS_TEXT_DOMAIN),
            'add_new_item'  => $this->labels['add_new_item'] ?? __('Add New ' . $this->name , AVANS_TEXT_DOMAIN),
            'new_item_name' => $this->labels['new_item_name'] ?? __('New ' . $this->name . ' Name' , AVANS_TEXT_DOMAIN),
            'search_items'  => $this->labels['search_items'] ?? __('Search ' . $this->plural_name , AVANS_TEXT_DOMAIN),
            'popular_items' => $this->labels['popular_items'] ?? __('Popular ' . $this->plural_name , AVANS_TEXT_DOMAIN),
            'not_found'     => $this->labels['not_found'] ?? __('No ' . $this->plural_name . ' found' , AVANS_TEXT_DOMAIN),
            'separate_items_with_commas' => $this->labels['separate_items_with_commas'] ?? __('Separate ' . $this->plural_name . ' with comma' , AVANS_TEXT_DOMAIN),
            'choose_from_most_used' => $this->labels['choose_from_most_used'] ?? __('Choose from most used ' . $this->plural_name , AVANS_TEXT_DOMAIN),
        );

        return $labels;

    }


    public function create()
    {
        $args = [
            'label' => $this->plural_name,
            'labels' => $this->get_labels(),
            'hierarchical' => $this->hierarchical
        ];

        $args = array_merge( $args , $this->get_args() );

        register_taxonomy( $this->key, $this->post_types , $args );
    }

}