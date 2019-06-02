<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 18.05.2019
 * Time: 22:05
 */

namespace App\models;

use JasonGrimes\Paginator;
use App\QueryBuilder;
use League\Plates\Engine;

class getData
{
    private $qb;
    private $templates;
    public function __construct(QueryBuilder $qb, Engine $engine)
    {
        $this->qb = $qb;
        $this->templates = $engine;
    }


     public function paginator(int $item, $way, $url) {
         $itemCount = $this->qb->itemCount('posts');
         $itemsPerPage = $item;
         $currentPage = $way;
         $urlPattern = $url;
         $paginator = new Paginator($itemCount, $itemsPerPage, $currentPage, $urlPattern);
         return $paginator;
     }

    public function nextPrev($id) {
        $qwe = $this->qb->getPosts();
        $itemCount = count($qwe) - 1;
        foreach ($qwe as $q) {
            $ids[]= $q['id'];
            }

        if ($id == $ids[$itemCount]) { $next= $ids[0];}
        else {$next= $id + 1;}

        if ($id == $ids[0]) {$prev= $ids[$itemCount];}
        else {$prev = $id - 1;}

        return array($next, $prev);
    }
}

