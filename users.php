<?php
  include "header.php";
  include "include/autoloader.php";


  $obj = new Users();
  $users = $obj->showUser();

?>
 
        <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <!-- <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Users...">
                      </div> -->
                      <a style="margin-left: 10px;background: #333333;" class="btn btn-primary" href="#" data-toggle="modal" data-target="#addUser">Add user</a>

                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Jioned</th>
                        <th>Actions</th>
                      </tr>
                    <?php  foreach ($users as $user) : ?>
                      <tr>
                        <td><?php echo $user->fname; ?></td>
                        <td><?php echo $user->lname; ?></td>
                        <td><?php echo $user->email; ?></td>
                        <td><?php echo $user->created_at; ?></td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                    <?php endforeach; ?>

                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

   
    <!-- Modals -->

    <!-- Add post -->
  <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>first name</label>
          <input type="text" class="form-control" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label>last name</label>
          <input name="text" class="form-control" placeholder="Enter last name"></input>
        </div>
        <div class="form-group">
          <label>Email</label>
          <input name="text" class="form-control" placeholder="Enter Email"></input>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input name="text" class="form-control" placeholder="Enter Password"></input>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

   

<?php
  include "footer.php";
?>