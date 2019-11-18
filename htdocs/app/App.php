<?php

namespace app;

use app\core\Router;

class App
{

    public static $app;
    public $router;

    protected function loader($dir, $fullClass)
    {
        $class = array_pop(explode('\\', $fullClass));

        $file = "$dir/$class.php";

        if( file_exists($file) ){
            require_once $file;
            return true;
        }

        foreach(glob("$dir/*",  GLOB_ONLYDIR) as $subdir){
            if( $this->loader($subdir, $class) ){
                return true;
            }
        }

        return false;
    }

    public function __construct()
    {
        spl_autoload_register(function($class){
            return $this->loader(__DIR__, $class);
        });

        $this->router = new Router();

        static::$app = $this;
    }

}