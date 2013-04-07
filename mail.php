<?php


	mail ( "guillaume.albespy@gmail.com" , "[Stage]".$_POST["subject"] , $_POST["message"], 'From: ' . $_POST["usermail"] . "\r\n" . 'Reply-To: ' . $_POST["usermail"] );

?>