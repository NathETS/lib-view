<?php

namespace lib\View\Classes;

use lib\Path\Classes\Path;

class View {

    public function load(string $file) : void {

        if(!file_exists($to_load = Path::i()->getPublic() . $file . '.php')) die($this->error('File "<em>' . $file . '</em>" doesn\'t exist.'));
        
        require_once $to_load;
    }

    public function error(string $message) : void {

        if(!file_exists($to_load = Path::i()->getPublic() . 'admin-notice.php')) die('File "<em>admin-notice</em>" doesn\'t exist.');

        require_once $to_load;
    }
}