<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/delete" method="post">
    <?= csrf_field() ?>
    <input type="submit" name="submit" value="delete" />
</form>