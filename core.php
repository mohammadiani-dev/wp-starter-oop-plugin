<?php
/**
 * Plugin Name: oop core
 * Version: 1.0.0
 **/

use Mohammadiani\WpOopCore\admin\sample\sample_menu;
use Mohammadiani\WpOopCore\admin\sample\sample_meta_box;
use Mohammadiani\WpOopCore\sample\admin\sample_post_type;
use Mohammadiani\WpOopCore\sample\admin\sample_submenu;
use Mohammadiani\WpOopCore\sample\admin\sample_taxonomy;
use Mohammadiani\WpOopCore\utils\comment;
use Mohammadiani\WpOopCore\utils\debug;
use Mohammadiani\WpOopCore\utils\includes;
use Mohammadiani\WpOopCore\utils\post;
use Mohammadiani\WpOopCore\utils\user;

require_once __DIR__ . '/vendor/autoload.php';

if(!defined("AVANS_TEXT_DOMAIN")){
    define("AVANS_TEXT_DOMAIN" , "avans_plugin");
}

new sample_post_type;
new sample_menu;
new sample_submenu;
new sample_taxonomy;
new sample_meta_box;


user::meta(  $user_id  )->get();
user::meta(  $user_id , 'user_score' )->get();
user::meta(  $user_id , 'user_score' )->save("lkadlk");
user::meta(  $user_id , 'user_score' )->delete();


post::meta( $post_id )->get();
post::meta( $post_id , 'meta_name' )->get();
post::meta( $post_id , 'meta_name' )->save("68565");
post::meta( $post_id , 'meta_name' )->delete();

comment::meta( $comment_id )->get();
comment::meta( $comment_id , 'meta_nazar' )->get();
comment::meta( $comment_id , 'meta_nazar' )->save("sadad");
comment::meta( $comment_id , 'meta_nazar' )->delete();

includes::view( 'shop/index' , [ 'shop_id' => $shop_id ] );

debug::logger( 'insert code in line 23' , __METHOD__ , __LINE__ );