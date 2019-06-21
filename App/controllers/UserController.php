<?php
/**
 * Created by PhpStorm.
 * User: ДенисПК
 * Date: 16.05.2019
 * Time: 22:03
 */

namespace App\controllers;


use App\QueryBuilder;
use Delight\Auth\Auth;
use App\models;
use League\Plates\Engine;

class UserController
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

    public function loginform() {

        echo $this->templates->render('login', ['admin'=>$this->admin, 'user'=>$this->user]);
    }

    public function login() {

        $posts = $this->qb->getAll('posts');

        $pag = new models\getData($this->qb, $this->templates);
        $paginator = $pag->paginator(3, $_GET['page'] ?? 1, '?page=(:num)');
        try {
            $this->auth->login($_POST['email'], $_POST['password']);
            if ($this->auth->hasRole(\Delight\Auth\Role::ADMIN)) {

                echo $this->templates->render('posts_admin', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user'=>$this->user]);
            } else {
                        echo $this->templates->render('posts', ['posts' => $posts, 'paginator' => $paginator, 'admin'=>$this->admin, 'user'=>$this->user]);
            }
        }
        catch (\Delight\Auth\InvalidEmailException $e) {
            die('Wrong email address');
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            die('Wrong password');
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            die('Email not verified');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }

        public function logout() {
    $this->auth->logOut();
    header('Location: /');
        }


    public function register() {

        $posts = ['q' => 'w'];
        $this->templates->addData(['da' => $posts], 'welcome');
        echo $this->templates->render('register', ['posts' => $posts,  'admin'=>$this->admin, 'user'=>$this->user]);
    }

    public function registration() {
         try {
             $userId = $this->auth->registerWithUniqueUsername($_POST['email'], $_POST['password'], $_POST['user_name']);
             $img = new models\saveImage();
             $avatar = $img->saveImage('default_foto.jpg', $_FILES, 'assets/upload/users/');
             $avatar['img'] = $avatar[0];
             unset($avatar[0]);
             $avatar['roles_mask'] = 6;
             $this->qb->update('users', $userId, $avatar);
             header('Location: /');
                }
                catch (\Delight\Auth\InvalidEmailException $e) {
                    die('Invalid email address');
                }
                catch (\Delight\Auth\InvalidPasswordException $e) {
                    die('Invalid password');
                }
                catch (\Delight\Auth\UserAlreadyExistsException $e) {
                    die('User already exists');
                }
                catch (\Delight\Auth\TooManyRequestsException $e) {
                    die('Too many requests'); }
                catch (\Delight\Auth\DuplicateUsernameException $e) {
                    die('Пользователь с таким именем уже существуцет');
                }
        }




    public function email_verification() {
        try {
            $this->auth->confirmEmail('lrzhxuyOmMV21ofv', 'ozU3dtmEJsbKSkZG');

            echo 'Email address has been verified';
        }
        catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
            die('Invalid token');
        }
        catch (\Delight\Auth\TokenExpiredException $e) {
            die('Token expired');
        }
        catch (\Delight\Auth\UserAlreadyExistsException $e) {
            die('Email address already exists');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            die('Too many requests');
        }
    }
}