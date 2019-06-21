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
            $cats = $this->qb->getCats();
            $this->templates->addData(['cats' => $cats]);

            $admin = $this->auth->hasRole(\Delight\Auth\Role::ADMIN);
            $this->admin = $admin;

            $user = $this->auth->hasRole(\Delight\Auth\Role::AUTHOR);
            $this->user = $user;
        }

        public function getOnePost($id) {

            $getData = new getData($this->qb, $this->templates);
           $nextPrev = $getData->nextPrev($id);
            $postsNext = $this->qb->getOne('pictures', $nextPrev[0]);
            $postsPrev = $this->qb->getOne('pictures', $nextPrev[1]);
            $posts = $this->qb->getOne('pictures', $id);
            $comment = $this->qb->viewComments($id);

            echo $this->templates->render('single-page', ['admin'=>$this->admin, 'user'=>$this->user, 'posts' => $posts, 'id' => $id, 'nextPrev' => $nextPrev, 'postsNext' => $postsNext, 'postsPrev' => $postsPrev, 'comment' => $comment]);
        }

        public function postAnswer()
        {
            $data = $_POST;
            $id = $data['postid'];

           $this->qb->update('comment', $id, ['answer' => $data['description']]);
            header("Location: {$_SERVER['HTTP_REFERER']}");

        }

        public function getAllCats($name)
        {
            $pag = new getData($this->qb, $this->templates);
            $paginator = $pag->paginator(3, $_GET['page'] ?? 1, '?page=(:num)');
            $posts = $this->qb->getAllCats('posts', $name);
            if ($this->admin) {
                echo $this->templates->render('posts_admin', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user' => $this->user]);
            } else {
                echo $this->templates->render('posts', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user' => $this->user]);
            }
        }


    }