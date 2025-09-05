<?php 
require_once("Message.php");

?>


<? if($IS_DEV): ?>
 <!-- ************************* IMPORTANT JUST DEV MODE **************** -->
  <!-- server area section -->
  <section>
    <div class="min-h-32 bg-red-100">
        <pre>
          <span class="text-red-500"><?php echo var_dump($_POST)?></span>
        </pre>
    </div>
  </section>

<!-- Working area section -->
    <section>
    <div class="min-h-32 bg-blue-100">
      <!-- it is very un clean and unsafe approach , just to learn how save incoming data on server -->
       <!-- it is very unsafe approach again!!!! -->
      <?php
          if(isset($_POST["visitor_name"]) && strlen($_POST["visitor_name"] > 2))
          {
            /*$my_message is a new instance from object Message*/ 
            $my_message = new Message();
            $my_message->sender = $_POST["visitor_name"];
            $my_message->content = $_POST["visitor_message"];

            $my_message->insert();
           
            $_POST = [];
            header("location:index.php");
           
            /*
            $time = date("YY-mm-dd-H-i-s");
            $visitor_name = $_POST["visitor_name"];
            $message = $_POST["visitor_message"];

            $file_name = $time.".txt";
            touch($file_name);
            if(file_exists($file_name))
            {

              $myFile = fopen($file_name,"w") or die("sorry i can not read this file");
              $text = $time . $visitor_name  . $message;
              fwrite($myFile,$text);
              fclose($myFile);
            }*/

          }
      ?>
          
    </div>
  </section>
  <!-- ************************* IMPORTANT JUST DEV MODE **************** -->
  <? endif ?>