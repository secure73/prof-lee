<?php

class Message{
    private int $id;
    public string $sender;
    public string $content;

    public function __construct(){
        echo "hello from Message constructor";
    }

    public function insert(){
        echo "i try to insert new message into database";
    }

    public function update(){
         echo "i try to update a particular message in database";
    }

    public function delete(){
         echo "i try to delete a particular message in database";
    }

    public function select(){
         echo "i try to select all messages from database";
    }

}