<?php
/*
  ../app/vues/comments/store.php
  Variables disponibles:
   $pseudo :STRING
   $content : STRING
   $post_id : INT
*/
?>

<div class="pt-5 mt-5">
  <h3 class="mb-5">
    Thank you <?php echo $_POST['pseudo']; ?>, your comment has been added.
    <div>
      <a href="?postId=<?php echo $_POST['post_id']?>">Back to the post</a>
    </div>
  </h3>
</div>
