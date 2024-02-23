<?php
namespace app\controllers;

use stdClass;

class viewManager extends \app\core\Controller{

    function goToLandingPage(){
        $this->view('Main/index');
    }

    function goToAboutUsPage(){
        $this->view('Main/about_us');
    }

    function goToContactUsPage(){
        $this->view('Contact/index');
    }

    function goToContactUsList(){
        $this->view('Contact/read');
    }
    
}