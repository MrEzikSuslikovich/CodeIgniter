<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
   textarea { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
    height: 200px;
   }
   .rounded{
       width:300px;
    height: 200px;

   }
  </style>
<?php if (! empty($news) && is_array($news)) : ?>
    <?php foreach ($news as $news_item): ?>
    <nav class="navbar navbar-expand navbar-dark jumbotron">
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <form action="/news/update" method="post">
                <div class="d-flex flex-row text-center bd-highlight mb-3">
                    <?= csrf_field() ?>
                    <label for="id">id</label>
                    <textarea disabled > <?= esc($news_item['id']); ?> </textarea>
                    <textarea name="id"  style="display:none"> <?= esc($news_item['id']); ?> </textarea>
                    <label for="title">Title</label>
                    <textarea class="form-control"  name="title"> <?= esc($news_item['title']); ?> </textarea>
                    <label for="body">Text</label>
                    <textarea class="form-control" name="body"> <?= esc($news_item['body']); ?> </textarea>
                    <label for="content">Content</label>
                    <a href="/" class="navbar-brand pt-5">
                        <img class="rounded mx-auto d-block " src=<?= esc($news_item['content']); ?> />
                    </a>
                    <input type="file" name="file" class="form-control" id="file">
                    <input type="submit" name="submit" value="Update" />
                </div>
            </form>
            <form action="/news/delete" method="post">
                    <?= csrf_field() ?>
                    <textarea name="id"  style="display:none"> <?= esc($news_item['id']); ?> </textarea><br />
                    <input type="submit" name="submit" value="delete" />
            </form>
        </div>
    </nav>
    <?php endforeach; ?>
<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
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