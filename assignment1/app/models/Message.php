<?php
namespace app\models;

class Message{
    public $name;
    public $email;
    public $IP;

    public function read() {
        $messages = [];
        // Read the contents of the file
        $content = file_get_contents('messages.txt');
        $lines = explode("\n", $content);
        foreach ($lines as $line) {
            $data = json_decode($line, true);
            $message = new Message();
            $message->email = $data['email'];
            $message->message = $data['message'];
            $message->IP = $data['IP'];
            $messages[] = $message;
        }
        return $messages;
    }

    public function write(){
        
    }
}