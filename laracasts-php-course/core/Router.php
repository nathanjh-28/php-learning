<?php

class Router {
    protected $routes = [];
// New Stuff Here
    public static function load($file){
        $router = new static;
        require $file;
        return $router;
    } // __end new stuff
    public function define($routes){
        $this->routes = $routes;
    }
    public function direct($uri){

        if(array_key_exists($uri,$this->routes)){
            return $this->routes[$uri];
        }
        throw new Exception('No route defined for this URI');
    }
};