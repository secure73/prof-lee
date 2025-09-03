<?php
function readMyFile(string $file_path):string{
    $result = "";
    if(!file_exists($file_path))
    {
        return "target file path do not exists: ".$file_path;
    }
    $result = file_get_contents($file_path);
    if(!$result)
    {
        return "the file is not readable!";
    }
    return $result;
}

function showHeader(){
    echo readMyFile("./include/navbar.php");
}
function showHero(){
   echo readMyFile("./include/hero.php");
}
?>