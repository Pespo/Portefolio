<?php


	mail ( "emploi@albespy.fr" , "[Emploi]".$_POST["subject"] , $_POST["message"], 'From: ' . $_POST["usermail"] . "\r\n" . 'Reply-To: ' . $_POST["usermail"] );

?>