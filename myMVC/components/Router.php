<?php

class Router {
    
    public $routes;
    
    public function __construct() {
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }
    /*
     * Returns request string
     */
   public function getURI() {
        
       if (!empty($_SERVER['REQUEST_URI'])) {
           return trim($_SERVER['REQUEST_URI'], '/');
        
    }
   }
     public function run() {
         //Получить строку запроса
         $uri = $this->getURI();
         echo $uri;
         //Проверить наличие такого запроса в routes.php
         
         foreach ($this->routes as $uriPattern=>$path) {
             //Сравниваем $uriPattern c $uri
            // if (preg_match("~$uriPattern~", $uri)) {
                 echo $path."<br>";
             //}
         //}
}

     }
}
