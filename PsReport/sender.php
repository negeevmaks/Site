<?php
    $name = $_POST['name'];
    $text = $_POST['izuch'];

	$to = "negeevmaks@gmail.com"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Отчёт";

	
	$msg="
    Имя, Фамилия:  $name /n
    Текст: $izuch"; 	
	mail($to, $subject, $msg, "From: $to");

?>

<p>Отчёт успешно отправлен!</p>