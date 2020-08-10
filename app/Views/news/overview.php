<h2><?= esc($title); ?></h2>

<?php if (! empty($news) && is_array($news)) : ?>
    <?php foreach ($news as $news_item): ?>
        <br>
        <div class="shadow container-xl p-5">
        <br>
			<div class="row featurette">
                <div class="col-md-6">
                    <a href="/" class="navbar-brand">
					    <img class='img-fluid' src=<?= esc($news_item['content']); ?> />
				    </a>
                </div>
                <div class="col-md-6">
                    <h2 class="featurette-heading"><?= esc($news_item['title']); ?></h2>
                    <p><?= esc($news_item['body']); ?></p>
                    <div class="main">
                    </div>
                </div>
                
		    </div>
		</div>
        <br>
    <?php endforeach; ?>
<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
