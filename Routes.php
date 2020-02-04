<?php
class Routes {
    public function start(){
        $route = urldecode(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));

        $routes = [
            "/about-as"=>['controller'=>"User","action"=>"index"],
            "/contact-us"=>['controller'=>"ContactUs","action"=>"index"],
        ];
        if(isset($routes[$route])){
            $class = $routes[$route]['controller'];
            $action = $routes[$route]['action'];
            $controller = new $class();
            $controller->$action();
        }else{
            echo "404 Not Found"."<br>".$route;
        }
    }
}
?>
