<?php
require_once("./code/Message.php");
 if(isset($_POST["visitor_name"]) && strlen($_POST["visitor_name"] > 2))
          {
            /*$my_message is a new instance from object Message*/ 
            $my_message = new Message();
            $my_message->sender = $_POST["visitor_name"];
            $my_message->content = $_POST["visitor_message"];

            $my_message->insert();
           
            header("location:index.php");
           
          }
      ?>
?>

this page shall receive message and process it