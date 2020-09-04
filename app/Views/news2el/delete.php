<?= $this->extend('admin/adminlayout') ?>
<?= $this->section('content') ?>
  <!-- Content Wrapper. Contains page content -->
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
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">News Delete</h3>
              </div>
              <!-- /.card-header -->
              <div id="hole">
              <div class="card-body d-flex align-content-center flex-wrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">Id</th>
                        <th>Title</th>
                        <th>Text</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php if (! empty($news) && is_array($news)) : ?>
                      <?php foreach ($news as $news_item): ?>
                <?php if(esc($news_item['id']==$_GET['id'])) : ?>
                    <form action="/admin/news2/delete" name="ajax_form" id="ajax_form" method="post" accept-charset="utf-8" enctype="multipart/form-data" class="form-horizontal">
                        <tr>
                        <textarea class="form-control" id="id" style="display:none;" name="id" rows="5"><?= $_GET['id']; ?></textarea>
                        <td scope="row" id="<?= esc("id".$news_item['id']); ?>" ><?= esc($news_item['id']); ?></td>
                        <td id="<?= esc("title".$news_item['id']); ?>" ><?= esc($news_item['title']); ?></td>
                        <td id="<?= esc("body".$news_item['id']); ?>" ><?php echo html_entity_decode(esc($news_item['text'])); ?></td>
                        <td><button type="submit"  class="btn btn-danger   btn-success">Delete</button></td>
                        </form>
                        </tr>
                        <?php endif ?>
                <?php endforeach; ?>
                <?php else : ?>
                    <h1>Wrong id</h1>
                <?php endif ?>
                    </tbody>
                  </table>
              </div>
                <div class="card-footer clearfix">
                <?= \Config\Services::validation()->listErrors(); ?>
                </div>
                </div>
              </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  <?= $this->endSection() ?>