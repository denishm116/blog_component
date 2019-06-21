<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 08.05.2019
 * Time: 20:01
 */

namespace App\controllers;

use App\QueryBuilder;
use Delight\Auth\Auth;
use League\Plates\Engine;
use App\models\saveImage;
use App\models\getData;




    class HomeController
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

        public function index()
        {
          $posts = $this->qb->getAll('posts');
          $pag = new getData($this->qb, $this->templates);
          $paginator = $pag->paginator(3, $_GET['page'] ?? 1, '?page=(:num)');
            if ($this->admin) {
                echo $this->templates->render('posts_admin', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user' => $this->user]);
            } else {
            echo $this->templates->render('posts', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user' => $this->user]);
            }
            }

        public function addpost()
        {
            echo $this->templates->render('addpost',['admin'=> $this->admin, 'user' => $this->user]);
        }

        public function addposttodb()
            {
             $img = new saveImage();
            $data = $_POST;
            $id = $this->qb->insert('posts', $data);

              $arr = $img->saveImage('default_foto.jpg', $_FILES, 'assets/upload/');
              $picture['imglogo'] = $arr[0];
              $picture['img1'] = $arr[1];
              $picture['img2'] = $arr[2];
              $picture['postid'] = $id;

              $this->qb->insert('pictures', $picture);
              header('Location: /');
              exit;
               }

//        public function fake() {
//
//                    $faker = Factory::create();
//
//                    for ($i = 0; $i < 60; $i++) {
//                        $data['title'] = $faker->words(3, true);
//                        $data['description'] = $faker->words(30, true);
//                        $data['short_description'] = $faker->words(7, true);
//                        $data['like_num'] = $faker->numberBetween(0, 1000);
//                        $data['category'] = "cat";
//                        $data['img_main'] = "img_main";
//                        $data['img_1'] = "img_1";
//                        $data['img_2'] = "img_2";
//                        $this->qb->insert('posts', $data);
//                    }
//                    }
    }