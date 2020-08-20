<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<form action="/news/update" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <label for="id">id</label>
    <textarea name="id" ><?= $_POST['id']; ?></textarea>
    <textarea type="input" name="title"><?= $_POST['title']; ?></textarea>
    <label for="body">Text</label>
    <textarea name="body"><?= $_POST['body']; ?></textarea>
    <a href="/" class="navbar-brand pt-5">
        <img class="img-thumbnail rounded mx-auto d-block bd-placeholder-img card-img-top" src=<?= $_POST['content']; ?> />
    </a>
    <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="file" name="file" class="form-control" id="file">
    </div> 
    <div class="form-group">
    <button type="submit" id="send_form" class="btn btn-success">Update</button>
    </div>
</form>
<?= \Config\Services::validation()->listErrors(); ?>
<?= csrf_field() ?>