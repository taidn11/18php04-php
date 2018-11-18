<div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add News</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="admin.php?action=add_news" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Image</label>
                  <input type="file" id="exampleInputFile" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Description</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Description" name="description">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Content</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Content" name="content">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Create</label>
                  <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Enter Content" name="create">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_news">ADD NEWS</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>