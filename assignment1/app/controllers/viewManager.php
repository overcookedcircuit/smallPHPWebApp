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

    function sendMessage(){
        //call a view to show the submitted data
		//collect the data
		//declare a message object
		$message = new \app\models\Message();
		//populate the properties
		$message->name = $_POST['name'];
		$message->email = $_POST['email'];
		$message->IP = $_SERVER['REMOTE_ADDR'];
		//hypothetically insert into a database
		$message->write(); //add the message to the data file

		//redirect the user back to the list
		header('location:/Contact/read');
    }
    
}