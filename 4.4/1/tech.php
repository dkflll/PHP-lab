<?php
if(isset($_POST["technologies"])){
     
    $technologies = $_POST["technologies"];
    foreach($technologies as $item) echo "$item<br />";   
}
?>