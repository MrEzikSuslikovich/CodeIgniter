<h2><?= esc($title); ?></h2>

<?= \Config\Services::validation()->listErrors(); ?>

<form action="/news/create" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <input type="input" name="title" /><br />

    <label for="body">Text</label>
    <textarea name="body"></textarea><br />
    <label for="content">Content</label>
    <textarea name="content"></textarea><br />
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile"  accept=".jpg, .jpeg, .png" >
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    <input type="submit" name="submit" value="Create news item" />

</form>