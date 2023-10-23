<?php
	$phone = $_POST['telephone-second'];

	$to = "info@paint-chamber.ru"; 
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$subject = "Заявка c сайта";

	
	$msg="
    Телефон: $phone";	
	mail($to, $subject, $msg);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/images/favicons/32x32.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="images/favicons/64x64.svg" type="image/svg+xml">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title itemprop="headline">Заявка принята</title>
</head>
<style>
	body{
		background: var(--gray);
		height: 100vh;
		display: flex;
		align-items: center; 
		justify-content: center;
		flex-direction: column;
	}
</style>
<div style="text-align: center; border-radius: 10px; height: 118px; background-color: var(--yellow); width: 340px; font-weight: 400; display: flex; align-items: center;justify-content: center; flex-direction: column;">
	<p style="color: var(--gray)">Ваша заявка принята, скоро с Вами свяжутся</p>
	<a href="/" style="color: var(--white); margin-top: 20px; display: block;">Вернуться на сайт</a>
</div>
