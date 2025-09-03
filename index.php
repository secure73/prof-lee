<?php
require_once('./include/header.php');
$IS_DEV = false;
$my_name = "Prof. Lee";
$welcome = "Welcome to my website";
require_once('./code/index.php');
?>

<section>
  <div class="p-8">
    <div class="grid grid-cols-3 gap-4">

      <?php
      $card_title = "example";
      $card_content ="example content";
      $card_link = "example link";
      require('./components/card.php');
      require('./components/card.php');
      require('./components/card.php');
      ?>



    </div>
  </div>

</section>

<?php require_once('./include/footer.php'); ?>