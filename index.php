<?php
require('./code/readEcho.php');
require_once("./code/Message.php");
$IS_DEV = true;
$my_name = "Prof. Lee";
$welcome = "Welcome to my website";
require_once('./code/index.php');
require('./components/card.php');
showHeader();
showHero();
?>

<section>
  <div class="p-8">
    <div class="grid grid-cols-3 gap-4">

      <?php
        createCard("google","hghghghg","https://www.google.com");
        createCard("amazon","asgdasdhas","https://www.amazone.com");
        createCard("ebay","ncnfhcfncfhjdfhjdjdjdjdjdj","https://www.ebay.com");
      ?>



   



    </div>
  </div>

</section>

<section>
  <div class="p-8 bg-gray-200">
    <h2 class="text-2xl m-4 text-center">latest messages</h2>

    <div class="grid grid-cols-3 gap-4">
 <?php
      $mess_instance = new Message();
      $all = $mess_instance->lastMessages(3);
      foreach($all as $item){
        createCard($item["sender"], $item["content"],"https://www.google.com");
      }
    //  var_dump($all);
    ?>

    </div>
  </div>

</section>

<?php require_once('./include/footer.php'); ?>