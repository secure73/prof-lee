<?php
require_once("DbConnection.php");
class Message{
    private int $id;
    public string $sender;
    public string $content;

    public function __construct(){
        //echo "hello from Message constructor";
    }

    /**
     * @return int|false
     * return last inserted id in success or false in case of failure
     */
    public function insert():int|false{
        $my_conn = new DbConnection();
        $db = $my_conn->connect();
        $sql = "INSERT INTO messages (sender, content) VALUES (?,?)";
        $stmt= $db->prepare($sql);
        $result =$stmt->execute([$this->sender, $this->content]);
        if(!$result){
            return false;
        }
        return $db->lastInsertId();
        //echo "i try to insert new message into database";
    }

    public function update(){
        // echo "i try to update a particular message in database";
    }

    public function delete(){
         //echo "i try to delete a particular message in database";
    }

    public function select():false|array{
        $my_conn = new DbConnection();
        $db = $my_conn->connect();
        $sql = "SELECT * FROM messages";
        $stmt= $db->prepare($sql);
        if(!$stmt->execute([])){
            return false;
        }
        return $stmt->fetchAll();
    }

    public function lastMessages(int $number):array|false{
        $my_conn = new DbConnection();
        $db = $my_conn->connect();
        $sql = "SELECT * FROM messages ORDER BY id DESC limit $number";
        $stmt= $db->prepare($sql);
        if(!$stmt->execute([])){
            return false;
        }
        return $stmt->fetchAll();
    }

}