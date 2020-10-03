<?php
/*
  ../app/modeles/postsModele.php
*/
namespace App\Modeles\PostsModele;
/**
 * [findAll description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
// FindAll
function findAll(\PDO $connexion) :array {
  $sql = "SELECT *
          FROM posts
          ORDER BY created_at DESC
          LIMIT 10;";
  $rs = $connexion -> query($sql);
  return $rs-> fetchAll(\PDO::FETCH_ASSOC);
}


/**
 * [findAllRecent description]
 * @param  PDO   $connexion [description]
 * @return array            [description]
 */
// FindAllRecent
function findAllRecents(\PDO $connexion) :array {
  $sql = "SELECT p.id, p.title, p.created_at, p.image,
                a.firstname,a.lastname, COUNT(c.id) AS nbrComments
          FROM posts p
          JOIN authors a ON p.author_id = a.id
          LEFT JOIN comments c ON c.post_id = p.id
          GROUP BY p.id
          ORDER BY created_at DESC
          LIMIT 3;";
  $rs = $connexion -> query($sql);
  return $rs-> fetchAll(\PDO::FETCH_ASSOC);
}


/**
 * [findOneById description]
 * @param  PDO   $connexion [description]
 * @param  int   $id        [description]
 * @return array            [description]
 */
// findOneById
function findOneById(\PDO $connexion,int $id) :array {
  $sql = "SELECT *
          FROM posts
          WHERE id = :id;";
  $rs = $connexion->prepare($sql);
  $rs->bindValue(':id',$id, \PDO::PARAM_INT);
  $rs->execute();
  return $rs->fetch(\PDO::FETCH_ASSOC);
}
