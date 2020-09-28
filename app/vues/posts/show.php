<?php
/*
  ../app/vues/posts/show.php
  Variables disponibles:
   $post :ARRAY(id,title,created_at,image,content,author_id,categories_id)
*/
?>
<p class="mb-5">
  <img src="images/<?php echo $post['image'] ?>" alt="" class="img-fluid">
</p>

<h1 class="mb-3 h1"><?php echo $post['title'] ?></h1>
<div class="">
  <?php echo $post['content']; ?>
</div>
