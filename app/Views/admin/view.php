<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="/Assets/css/mobile.css"/>
	<link rel="stylesheet" media="screen and (min-width: 600px)" href="/Assets/css/computer.css"/>
	<link rel="stylesheet" href="/Assets/css/style.css"/>
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
<div id="hole">
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
 
    <button type="button"  value="<?= esc($news_item['id']); ?>" class="btn add  btn-success">Add News</button>
</div>
<div class="container">
    <div class="row mt-5">
<?php if (! empty($news) && is_array($news)) : ?>
    <?php foreach ($news as $news_item): ?>
        <div class="d-flex col-md-5">
                <div class="justify-content-center  card mb-5 news shadow">
                <a href="/" class="navbar-brand pt-5">
                            <img class="rounded mx-auto d-block img-thumbnail " src=<?= esc($news_item['content']); ?> />
                        </a>
                        <div class="blockquote text-center card-body">
                        <p style="display:none" id="<?= esc("content".$news_item['id']); ?>"><?= esc($news_item['content']); ?></p>
                    <p id="<?= esc("id".$news_item['id']); ?>"><?= esc($news_item['id']); ?></p>
                    <h2 id="<?= esc("title".$news_item['id']); ?>"><?= esc($news_item['title']); ?></h2>
                    <p id="<?= esc("body".$news_item['id']); ?>"><?= esc($news_item['body']); ?></p>
                    </div>
                    <button type="button"  value="<?= esc($news_item['id']); ?>" class="btn upd  btn-success">Redact</button>
                    <button type="button"  value="<?= esc($news_item['id']); ?>" class="btn del btn-danger   btn-success">Delete</button>
                    </div>
            </div>
    <?php endforeach; ?>
    </div>
</div> 
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
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="/Assets/js/jquery.maskedinput.js"></script>
	<script src="/Assets/js/mask.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	<script type='text/javascript' src='/Assets/js/modalscript.js'></script>