<h1>Главная страница</h1>
<hr>
<div class="seo-text">

<?php echo $text[0]['text']; ?>
	<br>
	<h3>Последние новости:</h3>
	<?php foreach ($lastNews as  $value) { ?>
		<div class="last-newss">
		<p><a href="/news/article.php?news=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></p>	
		<hr>	
		</div>
	<?php } ?>
</div>

