<?php
namespace Mohammadiani\WpOopCore\utils;

class debug{

    public static function logger( $entry , $method = __METHOD__ , $line = __LINE__ ){

         $mode = 'a';
        // Get WordPress uploads directory.
        $upload_dir = wp_upload_dir();
        $upload_dir = $upload_dir['basedir'];
        

        if($_SERVER['HTTP_HOST'] == "localhost"){
            $upload_dir =  AVANS_PATH;
        }

        

        // If the entry is array, json_encode.
        if (is_array($entry) || is_object($entry)) {
            $entry = json_encode($entry);
        }

        // Write the log file.
        $file  = $upload_dir . '/avans_debug.txt';
        $file  = fopen($file, $mode);
        $bytes = fwrite($file, $method . "::" . current_time('mysql') . ":: Line : $line ::" . $entry . "\n");
        fclose($file);

        return $bytes;
    }

}