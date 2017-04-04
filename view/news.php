<h1>Новости</h1>
<hr>
<div class="article-news" style="display: inline-block;">
	<?php foreach ($this->news as $news) { ?>
		<p style="margin: 10px;"><a href="/news/news.php?action=One&news=<?php echo $news->id; ?>"><?php  echo $news->title; ?></a></p><hr>
	<?php } ?>
</div>
