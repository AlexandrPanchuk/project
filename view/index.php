<h1>Главная страница</h1>
<hr>
<div class="seo-text">

<?php echo ($data['index'][0]['text']); ?>
	<br>
	<h3>Последние новости:</h3>
	<?php foreach ($data['last_news'] as $key => $value) { ?>
		<div class="last-news">
		<p><a href="/news/article.php?news=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></p>	
		</div>
	<?php } ?>
</div>