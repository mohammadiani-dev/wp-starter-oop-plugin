<?php
namespace Mohammadiani\WpOopCore\utils;

class meta{

    public $object , $suffix , $meta_key , $object_id;

    public function __construct( $object , int $object_id, $meta_key = null  )
    {
        $this->object = $object;
        $this->suffix = '_meta';
        $this->meta_key = $meta_key;
        $this->object_id = $object_id;
    }

    public function get(){
        if( isset($this->meta_key) ){
            return call_user_func("get_" . $this->object . $this->suffix , $this->object_id , $this->meta_key , true);
        }else{
            return call_user_func("get_" . $this->object . $this->suffix , $this->object_id);
        }
    }

    public function save( $meta_value ){
        return call_user_func("update_" . $this->object . $this->suffix , $this->object_id , $this->meta_key , $meta_value );
    }

    public function delete(){
        return call_user_func("delete_" . $this->object . $this->suffix , $this->object_id , $this->meta_key );
    }

}