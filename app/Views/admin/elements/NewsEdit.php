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
    <div id="hole" class="p-3">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-10">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">News Redact</h3>
                <div class="card-tools">
                    <?php  if ($pager) :?>
                    <?php $pagi_path='/pagination'; ?>
                    <?php $pager->setPath($pagi_path); ?>
                    <?= $pager->links('group1', 'front_full') ?>
                    <?php endif ?>  
                </div>
              </div>
              <!-- /.card-header -->

              <div class="card-body d-flex align-content-center flex-wrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th style="width: 10px">Id</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th style="width: 200px">Img</th>
                        <th>Redact</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (! empty($news) && is_array($news)) : ?>
                      <?php foreach ($news as $news_item): ?>
                        <tr>
                        <td scope="row" id="<?= esc("id".$news_item['id']); ?>" ><?= esc($news_item['id']); ?></td>
                        <td id="<?= esc("title".$news_item['id']); ?>" ><?= esc($news_item['title']); ?></td>
                        <td id="<?= esc("body".$news_item['id']); ?>" ><?= esc($news_item['body']); ?></td>
                        <td>
                            <a href="/" class="navbar-brand pt-5">
                              <img class="rounded mx-auto d-block img-thumbnail " src=<?= esc($news_item['content']); ?> />
                            </a>
                        </td>
                        <td><button type="button"  value="<?= esc($news_item['id']); ?>" class="btn upd  btn-success">Edit</button></td>
                        <td><button type="button"  value="<?= esc($news_item['id']); ?>" class="btn del btn-danger   btn-success">Delete</button></td>
                        </tr>
                        <?php endforeach; ?>
                          <?php else : ?>

                              <h3>No News</h3>

                              <p>Unable to find any news for you.</p>

                          <?php endif ?>
                    </tbody>
                  </table>
              </div>
                <div class="card-footer clearfix">
                  <button type="button"  value="<?= esc($news_item['id']); ?>" class="btn add btn-success">Add News</button>
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