<?php 
include 'header.php';
header('HTTP/1.1 404 Not Found');
header("Status: 404 Not Found");
?>

<h2>Так сложились звёзды, что такой страницы нету. Перейдите на <a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>"> главную страницу </a> </h2>