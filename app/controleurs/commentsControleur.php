<?php
/*
  ../app/controleurs/commentsControleur
*/

namespace App\Controleurs\CommentsControleur;
use \App\Modeles\CommentsModele;

function indexByPostIdAction(\PDO $connexion, int $postId) {
  //Je mets dans $comments la liste des commentaires du post que je demande au modèle
  include_once '../app/modeles/commentsModele.php';
  $comments = CommentsModele\findAllByPostId($connexion, $postId);

  //Je charge la vue comments/indexByPostId directement (pas dans $content)
  include '../app/vues/comments/indexByPostId.php';
}
