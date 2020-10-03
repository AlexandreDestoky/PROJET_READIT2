<?php
/*
  ../app/routeur.php
  ROUTEUR PRINCIPAL
*/


// PAGE CONTACT
// PATTERN : ?contact
// CTRL :
// ACTION :
  if(isset($_GET['contact'])):
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
