<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/update" method="post">
    <?= csrf_field() ?>

    <label for="id">id</label>
    <textarea name="id" ></textarea><br />
    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body"></textarea><br />
    <label for="content">Content</label>
    <textarea name="content"></textarea><br />
    <input type="submit" name="submit" value="Update" />

</form>