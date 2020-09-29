<?php
/*
  ../app/modeles/authorsModele.php
*/
namespace App\Modeles\AuthorsModele;


/**
 * [findOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @return array            [description]
 */
// findOneById
function findOneById(\PDO $connexion,int $id) :array {
  $sql = "SELECT *
          FROM authors
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id',$id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
