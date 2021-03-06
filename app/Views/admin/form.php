<h2><?= esc($title); ?></h2>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  action="<?= $_POST['url']; ?>" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Id</label>
                    <div class="col-sm-10">
                    <textarea name="id" style='display: none' ><?= $_POST['id']; ?></textarea>
                    <input type="text" class="form-control" value="<?= $_POST['id']; ?>" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="title" rows="5"><?= $_POST['title']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Text</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="body" rows="5"><?= $_POST['body']; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                  <div class="custom-file">
                      <input type="file"  name="file"  class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" id="send_form" class="btn btn-success">Submit</button>
                </div>
                <!-- /.card-footer -->
              </form>
</div>
<?= \Config\Services::validation()->listErrors(); ?>
<?= csrf_field() ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>