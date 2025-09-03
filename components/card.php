
<?php
/*
<div class="border border-gray-300 rounded-md shadow-md">
    <div class="bg-gray-700 text-gray-100 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md shadow-md"><?=$card_title?></div>
    <div class="p-4 border-b "><?=$card_content?></div>
    <div class="p-4"><a href=<?=$card_link?>>read more...</a></div>
</div>
*/
function createCard($card_title , $card_content , $card_link){
   echo '<div class="border border-gray-300 rounded-md shadow-md">
    <div class="bg-gray-700 text-gray-100 text-center text-lg font-semibold pt-2 pb-2 rounded-tl-md rounded-tr-md shadow-md">'.$card_title.'</div>
    <div class="p-4 border-b ">'.$card_content.'</div>
    <div class="p-4"><a href='.$card_link.'>read more...</a></div>
    </div>';
}

?>