<?php
/*
  ../app/vues/posts/index_recent.php
  Variables disponibles:
   $posts :ARRAY(ARRAY(id,title,created_at,image,content,author_id,categories_id))
*/
?>

<h3>Recent Blog</h3>

<?php foreach($posts as $post):
  $created_at = strtotime($post['created_at']);
?>
<div class="block-21 mb-4 d-flex">
  <a class="blog-img mr-4" style="background-image: url(images/<?php echo $post['image']; ?>);"></a>
  <div class="text">
    <h3 class="heading"><a href="#"><?php echo $post['title']; ?></a></h3>
    <div class="meta">
      <div><a href="#"><span class="icon-calendar"></span><?php echo date('M. d, Y',$created_at); ?></a></div>
      <div><a href="#"><span class="icon-person"></span><?php echo $post['firstname']; ?><?php echo $post['lastname']; ?></a></div>
      <div><a href="#"><span class="icon-chat"></span><?php echo $post['nbrComments']; ?></a></div>
    </div>
  </div>
</div>
<?php endforeach; ?>
