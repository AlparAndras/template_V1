<h1><?= $title; ?></h1>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name = "title" placeholder="Add Title Here">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea class="form-control" name = "body" placeholder="Add Body Here"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
