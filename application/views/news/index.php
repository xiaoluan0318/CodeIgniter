<?php foreach ($news as $news_item):?>
    <h2><a href="/news/view/<?php echo $news_item['slug'];?>"><?php echo $news_item['title'];?></a></h2>
<?php endforeach?>

<div class="ci-button">
	<a href="/news/create">Add News</a>
</div>