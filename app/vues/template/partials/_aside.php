<?php
  /*
    ../app/vues/template/partials/_aside.php
  */
?>

<div class="sidebar-box">
  <form action="#" class="search-form">
    <div class="form-group">
      <span class="icon icon-search"></span>
      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
    </div>
  </form>
</div>
<div class="sidebar-box ftco-animate">
  <?php
    include_once '../app/modeles/categoriesModele.php';
    $categories = \App\Modeles\CategoriesModele\findAll($connexion);
    include '../app/vues/categories/index.php';
  ?>
</div>

<div class="sidebar-box ftco-animate">
  <?php
    include_once '../app/modeles/postsModele.php';
    $posts = \App\Modeles\PostsModele\findAllRecents($connexion);
    include '../app/vues/posts/index_recent.php';
  ?>
</div>

<div class="sidebar-box ftco-animate">
  <?php
    include_once '../app/modeles/tagsModele.php';
    $tags = \App\Modeles\TagsModele\findAll($connexion);
    include '../app/vues/tags/index.php';
  ?>
</div>
