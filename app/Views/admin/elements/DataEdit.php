<?= $this->extend('admin/adminlayout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Text Editors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <button id="testa">123</button>
              <!-- tools box -->
              <div class="card-tools">
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fas fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <!-- /.card-body -->
                <form  action="/news/update" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
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
                  <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div id="summernote"></div>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <button id="edit" class="btn btn-primary" onclick="edit()" type="button">Edit 1</button>
<button id="save" class="btn btn-primary" onclick="save()" type="button">Save 2</button>
<div class="click2edit">click2edit</div>
<div class="code">code</div>

    <script>
    
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
      var edit = function() {
  $('.click2edit').summernote({focus: true});
};

var save = function() {
  var markup = $('.click2edit').summernote('code');
  alert(markup);
  $(".code").html(markup);
  $('.click2edit').summernote('code');
  $('.click2edit').summernote('destroy');
};
    </script>
              </p>
            </div>
          </div>
          <div class="card-footer">
          <p>click2edit <img style="width: 200px;" src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2aWV3Qm94PSIwIDAgMjAwIDIwMCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PGRlZnM+PHN0eWxlIHR5cGU9InRleHQvY3NzIj4jaG9sZGVyXzE3M2ZhOTQ0YWYwIHRleHQgeyBmaWxsOnJnYmEoMjU1LDI1NSwyNTUsLjc1KTtmb250LXdlaWdodDpub3JtYWw7Zm9udC1mYW1pbHk6SGVsdmV0aWNhLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSA8L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE3M2ZhOTQ0YWYwIj48cmVjdCB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgZmlsbD0iIzc3NyI+PC9yZWN0PjxnPjx0ZXh0IHg9Ijc0LjM5MDYyNSIgeT0iMTA0LjUiPjIwMHgyMDA8L3RleHQ+PC9nPjwvZz48L3N2Zz4=" data-filename="vor.svg"></p>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- /.control-sidebar -->
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>
<?= $this->endSection() ?>