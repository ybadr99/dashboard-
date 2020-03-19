<?php
  include "header.php";
  include "include/autoloader.php";

  if(isset($_GET['edit']))
  {
    $id = $_GET['edit'];
    $obj = new Posts();
    $posts = $obj->getWhere($id);
    
  }

?>


  <?php foreach ($posts as $post) : ?>

          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Edit Post</h3>
              </div>
              <div class="panel-body">
                <form action="process.php" method = "POST">
                  <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                  <div class="form-group">
                    <label>Post Title</label>
                    <input name = "title" type="text" class="form-control" placeholder="Post Title" value="<?php echo $post->title; ?>">
                  </div>
                  <div class="form-group">
                    <label>Post Body</label>
                    <!-- <textarea name="editor1" class="form-control"  value="<?php echo $post->body; ?>" >
                    </textarea> -->
                    <input name = "body" type="text" class="form-control" value="<?php echo $post->body; ?>">
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" checked> Published
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Post Author</label>
                    <input name = "author" type="text" class="form-control" placeholder="Post Author" value="<?php echo $post->author; ?>">
                  </div>
                  <input type="submit" class="btn btn-default" name="editPost">
                </form>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
  <?php endforeach;  ?>
<?php
  include "footer.php";
?>