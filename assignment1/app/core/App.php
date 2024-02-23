<?php
namespace app\core;

class App{
    private $routes = [];

    public function addRoute($url,$handler){
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    function __construct(){

  /*      $this->addRoute('Person/edit/{id}', 'Person,edit');
        echo '<pre>';
        print_r($this->routes);
        echo '</pre>';

*/
//        exit();


    	//call the appropriate controller class and method to handle the HTTP Request

        //Routing version 0.1
        //TODO: add PARAMETERS - later
        $url = $_GET['url'];

        //defined a few routes "url"=>"controller,method"
        $routes = ['Main/index'=>'viewManager,goToLandingPage',
                    'Main/about_us'=>'viewManager,goToAboutUsPage',
                    'Contact/index'=>'viewManager,goToContactUsPage',
                    'Contact/read'=>'viewManager,viewReadLog',
                    'Contact/messageSent'=>'viewManager,sendMessage',
                ];

        //one by one compare the url to resolve the route
        foreach ($routes as $routeUrl => $controllerMethod) {
            if($url == $routeUrl){//match the route
                //run the route
                [$controller,$method]=explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\'.$controller;
                $controller = new $controller();
                $controller->$method();
                //make sure that we don't run a second route
                break;
            }
        }


    }
}