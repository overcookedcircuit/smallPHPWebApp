<?php
namespace app\models;

class Message{
    public $name;
    public $email;
    public $IP;

    public function __construct($object = null){
        if(object = null){
            return;
        }
        $this->name = $object->name;
        $this->email = $object->email;
        $this->IP = $object->IP;
    }

    public function read() {
        //read the file and return the collection of messsage
		$filename = 'resources/messages.txt';
		$records = file($filename);
		//TODO: process the JSON strings into objects
		foreach ($records as $key => $value) {
			//can I typecase objects in PHP?
			$object = json_decode($value);
			$message = new \app\models\Message($object);
			$records[$key] = $message;
		}
		return $records;
    }

    public function write(){
        $filename = 'resources/messages.txt';
		//open a file for writing (append)
		$file_handle = fopen($filename, 'a'); //a is for append, w for writing from the start
		//obtain exclusive access to the file to avoid data corruption
		flock($file_handle, LOCK_EX);
		//format the data and write to the file
		$message = json_encode($this);
		fwrite($file_handle, $message . "\n");//place a single record on each line
		//release the exclusive access to the file
		flock($file_handle, LOCK_UN);
		//close the file
		fclose($file_handle);
    }
}