<?php
/*
  ../app/routeur.php
  ROUTEUR PRINCIPAL
*/

// AJOUT D'un COMMENTAIRE
// PATTERN : ?comments=add
// CTRL : commentsControleur
// ACTION : store
  if(isset($_GET['comments']) and $_GET['comments'] == 'add'):
    include_once '../app/controleurs/commentsControleur.php';
    \App\Controleurs\CommentsControleur\storeAction($connexion);

// PAGE CONTACT
// PATTERN : ?contact
// CTRL :
// ACTION :
  elseif(isset($_GET['contact'])):
    ob_start();
      include_once '../app/vues/template/partials/_contact.php';
    $content = ob_get_clean();
    $title = "contact";


// DETAILS D'UN POST
// PATTERN : ?postId=x
// CTRL : postsControleur
// ACTION : show
  elseif(isset($_GET['postId'])):
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId'] );

//ROUTE PAR DEFAUT
// PATTERN: /
// CTRL : postsControleur
// ACTION : index
  else:
    include_once '../app/controleurs/postsControleur.php';
    \App\Controleurs\PostsControleur\IndexAction($connexion);
  endif;
