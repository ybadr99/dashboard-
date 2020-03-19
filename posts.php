<?php

  include "header.php";
  include "include/autoloader.php";

  $obj = new Posts();
  $posts = $obj->showPost();


  if(isset($_GET['edit']))
  {
    $id = $_GET['edit'];
    $obj = new Posts();
    $posts = $obj->getWhere($id);
    
  }

?>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <!-- <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div> -->
                      <a style="margin-left: 10px;background: #333333;" class="btn btn-primary" href="#" data-toggle="modal" data-target="#addpost">Add Post</a>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Author</th>
                        <!-- <th>Published</th> -->
                        <th>Created At</th>
                        <th>Actions</th>
                      </tr>
                  <?php foreach ($posts as $post) : ?>                      
                      <tr>
                        <td> <?php echo $post->title;  ?> </td>
                        <td><?php echo $post->body;  ?></td>
                        <td><?php echo $post->author;  ?></td>
                        <!-- <td></td> -->
                        <td><?php echo $post->created_at;  ?></td>
                        <td>
                          <a class="btn btn-default"  href="edit.php?edit=<?php echo $post->id; ?>">Edit</a> 
                          <a class="btn btn-danger"  href="process.php?deletePost=<?php echo $post->id; ?>">Delete</a>
                        </td>
                      </tr>
                  <?php  endforeach;  ?>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>



    <!-- Modals -->

    <!-- Add post -->
  <div class="modal fade" id="addpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action ="process.php" method ="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add post</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>post Title</label>
          <input name="title" type="text" class="form-control" placeholder="post Title">
        </div>
        <div class="form-group">
          <label>post Body</label>
          <textarea name="body" class="form-control" placeholder="post Body"></textarea>
        </div>
        <div class="form-group">
          <label>post author</label>
          <input name = "author" type="text" class="form-control" placeholder="post Aouthor">
        </div>
        <div class="checkbox">
          <label>
            <input name="publish" type="checkbox" > Published
          </label>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name = "addpost" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

    <!-- Edit post -->
    <div class="modal fade" id="editpost" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action ="process.php" method ="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit post</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>post Title</label>
          <input name="title" type="text" class="form-control" placeholder="post Title">
        </div>
        <div class="form-group">
          <label>post Body</label>
          <textarea name="body" class="form-control" placeholder="post Body"></textarea>
        </div>
        <div class="form-group">
          <label>post author</label>
          <input name = "author" type="text" class="form-control" placeholder="post Aouthor">
        </div>
        <div class="checkbox">
          <label>
            <input name="publish" type="checkbox" > Published
          </label>
        </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button name = "addpost" type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php
  include "footer.php";
?>