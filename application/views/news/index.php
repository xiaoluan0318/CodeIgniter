<?php foreach ($news as $news_item):?>
    <h2><a href="/index.php/news/view/<?php echo $news_item['slug'];?>"><?php echo $news_item['title'];?></a></h2>
<?php endforeach?>
