<?php
/*
  ../app/vues/tags/index.php
  Variables disponibles:
   $tags :ARRAY(ARRAY(id,name))
*/
?>
<h3>Tag Cloud</h3>
<div class="tagcloud">
  <?php foreach ($tags as $tag):?>
    <a href="#" class="tag-cloud-link"><?php echo $tag['name']; ?> [<?php echo $tag['nbrPost']; ?>]</a>
  <?php endforeach; ?>
</div>
