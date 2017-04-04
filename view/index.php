<h1>Главная страница</h1>
<hr>
<div class="seo-text">

<?php echo $text[0]['text']; ?>
	<br>
	<h3>Последние новости:</h3>
	<?php foreach ($lastNews as  $value) { ?>
		<div class="last-newss">
		<p><a href="/news/news.php?action=One&news=<?php echo $value->id; ?>"><?php echo $value->title; ?></a></p>	
			
		<?php if (!empty($value->author)): ?>
			Aвтор: <?php echo $value->author->name; ?>	
		<?php endif; ?>	

		<hr>	
		</div>
	<?php } ?>
</div>

