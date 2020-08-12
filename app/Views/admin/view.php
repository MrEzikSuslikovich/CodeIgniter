<h2><?= esc($title); ?></h2>
<style type="text/css">
   textarea { 
    width: 25%;
    height: 25%;
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
   }
  </style>
<?php if (! empty($news) && is_array($news)) : ?>
    <?php foreach ($news as $news_item): ?>
        <br>
        <form action="/news/update" method="post">
            <?= csrf_field() ?>
            <label for="id">id</label>
            <textarea disabled > <?= esc($news_item['id']); ?> </textarea><br />
            <textarea name="id"  style="display:none"> <?= esc($news_item['id']); ?> </textarea><br />
            <label for="title">Title</label>
            <textarea name="title"> <?= esc($news_item['title']); ?> </textarea><br />
            <label for="body">Text</label>
            <textarea name="body"> <?= esc($news_item['body']); ?> </textarea><br />
            <label for="content">Content</label>
            <textarea name="content"> <?= esc($news_item['content']); ?> </textarea><br />
            <input type="submit" name="submit" value="Update" />
        </form>
        <form action="/news/delete" method="post">
            <?= csrf_field() ?>
            <textarea name="id"  style="display:none"> <?= esc($news_item['id']); ?> </textarea><br />
            <input type="submit" name="submit" value="delete" />
        </form>
        <br>
    <?php endforeach; ?>
<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
<div class="container">
            <div class="col-md-12">
                <div class="d-flex justify-content-between row">
                <?php if ($pager) :?>
                <?php $pagi_path='/news/admin'; ?>
                <?php $pager->setPath($pagi_path); ?>
                <?= $pager->links() ?>
                <?php endif ?>        
                </div> 
            </div>
        </div>