<h1>Новости</h1>
<hr>
<div class="article-news" style="display: inline-block;">
	<?php foreach ($data['news'] as $key => $value) { ?>
		<p style="margin: 10px;"><a href="/news/article.php?news=<?php echo $value->id; ?>"><?php  echo $value->title; ?></a></p><hr>
	<?php } ?>
</div>
