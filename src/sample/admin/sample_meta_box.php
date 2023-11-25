<?php
namespace Mohammadiani\WpOopCore\sample\admin;

use Mohammadiani\WpOopCore\admin\metabox;

class sample_meta_box extends metabox{

    public function __construct()
    {
        $this->id = "setting_plugin";
        $this->title = "تنظیمات پلاگین";
        $this->screen = ['post'];

        parent::__construct();
    }

    public function content( $post )
    {
        $value = get_post_meta($post->ID , 'custom_value' , true);
        echo "<input name='custom_value' value='". $value ."'>";
        echo "این یک تنظیمات پلاگین است!";
    }

    public function save( $post_id ){
        if(isset($_POST['custom_value'])){
            update_post_meta($post_id , 'custom_value' , sanitize_text_field($_POST['custom_value']) );
        }
    }

}