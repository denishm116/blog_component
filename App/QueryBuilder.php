<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 08.05.2019
 * Time: 11:07
 */

namespace App;
use Aura\SqlQuery\QueryFactory;

use PDO;

class QueryBuilder
{
    private $pdo;
    private $queryFactory;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
        $this->queryFactory = new QueryFactory('mysql');
    }

    public function getCats()
    {
        $items = $this->queryFactory->newSelect();
        $items->cols(['*'])->from('category');
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }


    public function itemCount($table)
    {
        $items = $this->queryFactory->newSelect();
        $items->cols(['*'])->from("$table");
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return count($res);
    }

    public function userName($userid) {
        $items = $this->queryFactory->newSelect();
        $items->cols(['*'])
            ->from('posts')
            ->where('userid = :userid')
            ->bindValues([                  // bind these values to named placeholders
                'userid' => $userid,
            ]);
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getPosts()
    {
        $items = $this->queryFactory->newSelect();
        $items->cols(['id'])->from('posts');
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

    public function getAll($table)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from("$table")
            ->join(
                'LEFT',
                'pictures AS p',
                'posts.id = p.postid'
            )
        ->setPaging(3)
        ->page($_GET['page'] ?? 1);
        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());
       return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllCats($table, $cat)
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from("$table")
            ->join(
                'LEFT',
                'pictures AS p',
                'posts.id = p.postid'
            )
            ->where('category = :category')
            ->bindValue ('category', $cat)
            ->setPaging(3)
            ->page($_GET['page'] ?? 1);
        $sth = $this->pdo->prepare($select->getStatement());

        $sth->execute($select->getBindValues());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getUserName ()
    {
        $select = $this->queryFactory->newSelect();
        $select->cols(['*'])
            ->from('users')
            ->join(
                'LEFT',
                'comment AS c',
                'users.id = c.userid'
            );
        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getOne($table, int $id)
    {
        $select= $this->queryFactory->newSelect();
        $select->cols(['*'])
               ->from($table)
               ->join(
                'INNER',             // the join-type
                'posts',        // join to this table ...
                'posts.id = pictures.postid' // ... ON these conditions
                )
               ->where('posts.id = :id')
               ->bindValues([                  // bind these values to named placeholders
               'id' => $id,
               ]);

        $sth = $this->pdo->prepare($select->getStatement());
        $sth->execute($select->getBindValues());
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function viewComments($postid) {
        $items = $this->queryFactory->newSelect();
        $items->cols(['*'])
            ->from('users')
            ->join(
                'INNER',
                'comment AS c',
                'users.id = c.userid'
            )
            ->where('postid = :postid')
            ->bindValues([                  // bind these values to named placeholders
                'postid' => $postid,
            ]);
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
       return $res;
    }
//
//    public function viewComments($postid) {
//        $items = $this->queryFactory->newSelect();
//        $items->cols(['*'])
//            ->from('comment')
//            ->join(
//                'INNER',
//                'users AS u',
//                'comment.userid = u.id'
//            )
//            ->where('postid = :postid')
//            ->bindValues([                  // bind these values to named placeholders
//                'postid' => $postid,
//            ]);
//        $sth = $this->pdo->prepare($items->getStatement());
//        $sth->execute($items->getBindValues());
//        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
//        return $res;
//    }


    public function viewUser($userid) {
        $items = $this->queryFactory->newSelect();
        $items->cols(['*'])
            ->from('users')
            ->where('id = :id')
            ->bindValues([                  // bind these values to named placeholders
                'id' => $userid,
            ]);
        $sth = $this->pdo->prepare($items->getStatement());
        $sth->execute($items->getBindValues());
        $res = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }

        public function insert($table, $data) {

        $insert = $this->queryFactory->newInsert();
        $insert
            ->into($table)                   // INTO this table
           ->cols($data);

            $sth = $this->pdo->prepare($insert->getStatement());
            $sth->execute($insert->getBindValues());

            $name = $insert->getLastInsertIdName('id');
            $id = $this->pdo->lastInsertId($name);
            return $id;
    }

    public function update($table, $id, $data) {
        $update = $this->queryFactory->newUpdate();
        $update
            ->table($table)                  // update this table
            ->cols($data)

            ->where('id = :id')
        ->bindValue('id', $id);

        $sth = $this->pdo->prepare($update->getStatement());
        $sth->execute($update->getBindValues());
    }

    public function delete($table, $id) {
        $delete = $this->queryFactory->newDelete();

        $delete
            ->from($table)                  // update this table

            ->where('id = :id')
            ->bindValue('id', $id);

        $sth = $this->pdo->prepare($delete->getStatement());
        $sth->execute($delete->getBindValues());
    }

}
//        public function getAll_($table) {
//        $select = $this->queryFactory->newSelect();
//            $select->cols(['*'])
//                ->from("$table")
//                ->setPaging(2)
//                ->page($_GET['page'] ?? 1);
//        $sth = $this->pdo->prepare($select->getStatement());
//        $sth->execute($select->getBindValues());
//        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
//        return $result;
//    }
