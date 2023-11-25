<?php

namespace Mohammadiani\WpOopCore\sample\request;

use Mohammadiani\WpOopCore\request\ajax as RequestAjax;

class ajax extends RequestAjax{

    public function __construct()
    {
        $this->hooks = [
            'nopriv_after_save_data'
        ];

        parent::__construct();
    }

    public function after_save_data(){

    }

}
