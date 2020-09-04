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
              <li class="breadcrumb-item active">Text Editors <?php echo($_GET['id']); ?></li>
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
                <?php if (! empty($news) && is_array($news)) : ?>
                <?php foreach ($news as $news_item): ?>
                <?php if(esc($news_item['id']==$_GET['id'])) : ?>
                <form action="/admin/news2/update" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-11">
                    <textarea class="form-control" id="id" style="display:none;" name="id" rows="5"><?= $_GET['id']; ?></textarea>
                        <textarea class="form-control" id="title" name="title" rows="5"><?= esc($news_item['title']); ?></textarea>
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
    <div class="textarea"><?php echo html_entity_decode(esc($news_item['text'])); ?></div>
                    </div>
                  </div>
                </div>
                <?php endif ?>
                <?php endforeach; ?>
                <?php else : ?>
                    <h1>Wrong id</h1>
                <?php endif ?>
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
          <div class="card-footer">
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

<?= csrf_field() ?>
<?= $this->endSection() ?>