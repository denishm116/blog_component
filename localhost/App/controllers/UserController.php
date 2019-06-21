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
    }

    public function register() {

        $posts = ['q' => 'w'];
        $this->templates->addData(['da' => $posts], 'welcome');
        echo $this->templates->render('register', ['posts' => $posts]);
    }

                   public function registration() {
//        s($_POST, $_FILES);
                try {
                    $userId = $this->auth->registerWithUniqueUsername($_POST['email'], $_POST['password'], $_POST['user_name']);

                    echo 'We have signed up a new user with the ID ' . $userId;
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
                       $img = new models\saveImage();
                       $avatar = $img->saveImage('default_foto.jpg', $_FILES, 'assets/upload/users/');

                       $avatar['img'] = $avatar[0];
                       unset($avatar[0]);

                       $this->qb->insert('users', $avatar);
                       s($avatar);

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



    public function login() {
        try {

            $this->auth->login('denishm118@yandex.ru', '123');

            echo 'User is logged in';
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
}