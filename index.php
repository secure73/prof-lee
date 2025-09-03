<?php
require('./code/readEcho.php');

$IS_DEV = false;
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

<?php require_once('./include/footer.php'); ?>