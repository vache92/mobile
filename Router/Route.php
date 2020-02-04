<?php
  class Route {
      public function start(){
          $route = urldecode(parse_url($_SERVER['REQUEST_URI']));

          $routes = [
            "/abouts-us"=>['controller'=>"User","action"=>"index"],
            "/contact-us"=>['controller'=>"ContactUs","action"=>"index"],
          ];
          if(isset($routes[$route])){
              $controller = new $routes[$route]['controller']();
              $controller->$routes[$route]['action']();
          }
      }
       public static $validRoutes = [];
       public static function get($route, $function){
           self::$validRoutes[] = $route;
           if($_GET['url'] == $route){
               $function->__invoke();
           }
       }
  }
?>
