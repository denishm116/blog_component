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
use JasonGrimes\Paginator;
use League\Plates\Engine;
use Faker\Factory;

use App\models;
//use PDO;



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
          }

        public function index()
        {
            $posts = $this->qb->getAll('posts');
            $itemCount = $this->qb->itemCount('posts');
            $itemsPerPage = 5;
            $currentPage = $_GET['page'] ?? 1;
            $urlPattern = '?page=(:num)';
            $paginator = new Paginator($itemCount, $itemsPerPage, $currentPage, $urlPattern);
            $this->templates->addData(['da' => $posts], 'welcome');
            echo $this->templates->render('posts', ['posts' => $posts, 'paginator' => $paginator]);
//            echo $this->templates->render('homepage', ['posts' => $posts, 'paginator' => $paginator]);
        }

        public function addpost()
        {
            echo $this->templates->render('addpost',['posts'=>"posts"]);
        }



        public function addposttodb()
            {
              $faker = Factory::create();
              $data = $_POST;
              $data['like_num'] = $faker->numberBetween(0, 1000);
              $data['short_description'] = $faker->words(7, true);
              $img = new models\saveImage();
              $arr = $img->saveImage('default_foto.jpg', $_FILES, 'assets/upload/');
              $data['img_main'] = $arr[0];
              $data['img_1'] = $arr[1];
              $data['img_2'] = $arr[2];
              $this->qb->insert('posts', $data);
              header('Location: /');
              exit;
               }

        public function fake() {

                    $faker = Factory::create();

                    for ($i = 0; $i < 60; $i++) {
                        $data['title'] = $faker->words(3, true);
                        $data['description'] = $faker->words(30, true);
                        $data['short_description'] = $faker->words(7, true);
                        $data['like_num'] = $faker->numberBetween(0, 1000);
                        $data['category'] = "cat";
                        $data['img_main'] = "img_main";
                        $data['img_1'] = "img_1";
                        $data['img_2'] = "img_2";
                        $this->qb->insert('posts', $data);
                    }
                    }
    }