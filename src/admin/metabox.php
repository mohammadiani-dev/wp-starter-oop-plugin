<?php
namespace Mohammadiani\WpOopCore\admin;

class metabox{

    protected 
        $id,
        $title = "metabox title",
        $screen = null,
        $context = 'advanced',
        $priority = 'default';


    public function __construct()
    {
        add_action("add_meta_boxes" , [$this , 'create']);
        add_action("save_post" , [$this , 'save']);
    }

    public function content( $post ){
        echo "insert metabox content";
    }

    public function save( $post_id ){
        //save custom params
    }

    public function create(){
        add_meta_box(
            $this->id,
            $this->title,
            [$this , 'content'],
            $this->screen,
            $this->context,
            $this->priority
        );
    }


}