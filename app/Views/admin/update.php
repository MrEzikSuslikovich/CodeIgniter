<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/update" method="post">
    <?= csrf_field() ?>

    <label for="id">id</label>
    <textarea name="id" ></textarea><br />
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