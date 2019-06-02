<?php


namespace App\controllers;

use DI\Container;
use App\QueryBuilder;
use League\Plates\Engine;
use App\models\getData;
use Delight\Auth\Auth;


class CommentController
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


    public function addComment() {
        $data = $_POST;
        $data['userid'] = $_SESSION['auth_user_id'];
        $this->qb->insert('comment', $data);
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }






}