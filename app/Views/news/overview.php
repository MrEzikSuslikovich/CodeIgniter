<h2>News</h2>
<br>
<div class="container">
    <div class="row mt-5">
            <?php if($news): ?>
            <?php foreach($news as $inf): ?>
            <div class="d-flex col-md-5">
                <div class="justify-content-center  card mb-5 news shadow">
                        <a href="/" class="navbar-brand pt-5">
                            <img class="rounded mx-auto d-block img-thumbnail " src=<?= esc($inf['content']); ?> />
                        </a>
                    <div class="blockquote text-center card-body">
                        <h2 class="featurette-heading"><?= esc($inf['title']); ?></h2>
                        <p><?= esc($inf['body']); ?></p>
                    </div>
                </div>
            </div>
           <?php endforeach; ?>
           <?php endif; ?>
        <br>
        <div class="container">
            <div class="col-md-12">
                <div class="d-flex justify-content-between row">
                <?php if ($pager) :?>
                <?php $pagi_path='/pagination'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links('group1', 'front_full') ?>
                <?php endif ?>        
                </div> 
            </div>
        </div>
    </div>
  </div>
</div> 