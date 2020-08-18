<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style type="text/css">
   textarea { 
    font-family: Verdana, Arial, Helvetica, sans-serif; 
    color: #333366;
    height: 200px;
   }
  </style>
<?php
$session = session();
?>
<h1>Admin Panel</h1>
<form action="/logout" method="">
<input type="submit" value="Logout">
</form>
<?= \Config\Services::validation()->listErrors(); ?>
    <?= csrf_field() ?>
    <div class="container">
    <br>
     
    <?php if (session('msg')) : ?>
        <div class="alert alert-info alert-dismissible">
            <?= session('msg') ?>
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        </div>
    <?php endif ?>
 
    <div class="row">
      <div class="col-md-9">
        <form action="/news/create" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
        
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body"></textarea><br />
          <div class="form-group">
            <label for="formGroupExampleInput">Name</label>
            <input type="file" name="file" class="form-control" id="file">
          </div> 
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
<?php if (! empty($news) && is_array($news)) : ?>
    <?php foreach ($news as $news_item): ?>
    <nav class="navbar navbar-expand navbar-dark jumbotron">
        <div class="collapse navbar-collapse" id="navbarsExample02">
            <form action="/news/update" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
            <label for="id">id</label>
                <div class="d-flex flex-row text-center bd-highlight mb-3">
                    <textarea disabled > <?= esc($news_item['id']); ?> </textarea>
                    <textarea name="id"  style="display:none"> <?= esc($news_item['id']); ?> </textarea>
                    <label for="title">Title</label>
                    <textarea class="form-control"  name="title"> <?= esc($news_item['title']); ?> </textarea>
                    <label for="body">Text</label>
                    <textarea class="form-control" name="body"> <?= esc($news_item['body']); ?> </textarea>
                    <label for="content">Content</label>
                    <a href="/" class="navbar-brand pt-5">
                        <img class="img-thumbnail rounded mx-auto d-block bd-placeholder-img card-img-top" src=<?= esc($news_item['content']); ?> />
                    </a>
                    <input type="file" name="file" class="form-control" id="file">
                    <div class="form-group">
                        <button type="submit" id="send_form" class="btn btn-success">Update</button>
                    </div>
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