<?= $this->extend('admin/adminlayout') ?>
<?= $this->section('content') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">News Control</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div id="hole" class="p-3">
    <div class="content">
      <div class="container-fluid">
              <!-- /.card-header -->

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
          <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
            <!-- /.card-header -->
            <div class="card-body pad">
                <!-- /.card-body -->
                <form action="/admin/news2/create" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-11">
                        <textarea class="form-control" id="title" name="title" rows="5"></textarea>
                        <textarea class="form-control" style="display:none;"  id="text" name="text" rows="5"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Text</label>
                  <div class="col-sm-11">
                      <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
                      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
                          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
                          <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
                          <div class="textarea">Text</div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
              <script>
              // Summernote
              $('.textarea').summernote();
              var markup = $('.textarea').summernote('code');
              $('.textarea').summernote('destroy');
              $("#text").html(markup);
              $("div").focusout(function(){
                  var markup = $('.textarea').summernote('code');
                  $("#text").html(markup);
              });
              </script>
              <div class="card-footer">
                    <button type="submit"  id="send_form" class="btn btn-success">Submit</button>         
                    </form>
                    <?= \Config\Services::validation()->listErrors(); ?>
              </div>
              <!-- /.card-footer -->
            </div>
          </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>

      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  </div>
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

<?= csrf_field() ?>
<?= $this->endSection() ?>