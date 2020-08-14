<?= \Config\Services::validation()->listErrors(); ?>
    <?= csrf_field() ?>
<form action="/login" method="post">
    <input type="text" name="username" id="">
    <input type="text" name="password" id="">
    <input type="submit" value="Submit">
</form>