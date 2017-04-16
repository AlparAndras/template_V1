<h1><?= $title ?></h1>
<?php foreach($posts as $post) : ?>
  <h3><?php echo $post['title']; ?></h3><br>
  <strong>Posted on : <?php echo $post['created_at']; ?></strong><hr>
  <?php echo $post['body']; ?>

<?php endforeach; ?>
