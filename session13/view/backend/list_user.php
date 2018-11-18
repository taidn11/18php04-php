<div class="row">
        <div class="col-md-8">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">List user</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Username</th>
                  <th style="width: 100px">Role</th>
                  <th style="width: 200px">Action</th>
                </tr>
                <?php while ($row = $listUser->fetch_assoc()) {
                    $id = $row['id'];
                    $avatar = $row['avatar'];

                  ?>
                  <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['role']?></td>
                    <td><img src="dist/img/<?php echo $avatar;?>"></td>
                    <td>
                    <a href="admin.php?action=edit_user&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-info">EDIT</button></a> 
                    <a href="admin.php?action=delete_user&id=<?php echo $id;?>"><button type="button" class="btn btn-block btn-danger">DELETE</button></a>
                    </td>
                  </tr>
                <?php }?>
              </table>
              Paging: 
              <!-- <?php for ($i = 1; $i <= $numberPage; $i++) {?>
                <a href="admin.php?action=list_user&page=<?php echo $i?>"> <?php echo $i?> </a>
              <?php }?> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        <!-- /.col -->
      </div>
  </div>     