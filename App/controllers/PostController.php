<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 19.05.2019
 * Time: 21:58
 */

namespace App\controllers;
use App\QueryBuilder;
use League\Plates\Engine;
use App\models\getData;
use Delight\Auth\Auth;


    class PostController
    {
        public $templates;
private $auth;
        private $qb;

        public function __construct(QueryBuilder $qb, Engine $engine, Auth $auth)
        {
            $this->qb = $qb;
            $this->templates = $engine;
            $this->auth =$auth;
        }

        public function getOnePost($id) {

            $getData = new getData($this->qb, $this->templates);
           $nextPrev = $getData->nextPrev($id);
            $postsNext = $this->qb->getOne('pictures', $nextPrev[0]);
            $postsPrev = $this->qb->getOne('pictures', $nextPrev[1]);
            $posts = $this->qb->getOne('pictures', $id);
            $admin = $this->auth->hasRole(\Delight\Auth\Role::ADMIN);
            $user = $this->auth->hasRole(\Delight\Auth\Role::AUTHOR);
            $comment = $this->qb->viewComments($id);
            s($comment);
            echo $this->templates->render('single-page', ['admin'=>$admin, 'user'=>$user, 'posts' => $posts, 'id' => $id, 'nextPrev' => $nextPrev, 'postsNext' => $postsNext, 'postsPrev' => $postsPrev, 'comment' => $comment[0]]);

        }

    }