<?php
/*
  ../app/controleurs/tagsControleur
*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

function indexByPostIdAction(\PDO $connexion, int $postId) {
  //Je mets dans $tags la liste des tags du post que je demande au modèle
  include_once '../app/modeles/tagsModele.php';
  $tags = TagsModele\findAllByPostId($connexion, $postId);

  //Je charge la vue tags/indexByPostId directement (pas dans $content)
  include '../app/vues/tags/indexByPostId.php';
}
