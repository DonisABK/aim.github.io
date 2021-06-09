<?php
if($_POST["Message"]) {
mail("donisabk@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: donisabk@gmail.com");
}
?>