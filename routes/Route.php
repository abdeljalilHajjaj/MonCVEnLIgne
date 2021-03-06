<?php

namespace Router;

class Route{

    public $path;
    public $action;
    public $matches;

    public function __construct($path,$action)
    {
        $this->path =$path;
        $this->action =$action;
    }

    public function matches(string $url)
    {
        $path = preg_replace('#:([\w]+)#','([^/]+)',$this->path);
        $pathToMatch = "^$path$";
        if(preg_match($pathToMatch,$url,$matches))
        {
            $this->matches = $matches;
            return true;
        }
        else
        {
            return false;
        }

    }
}