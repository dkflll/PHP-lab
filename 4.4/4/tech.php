<?php
if(isset($_POST["courses"]))
{
    $courses = $_POST["courses"];
    foreach($courses as $item) echo "$item<br>";
}
?>