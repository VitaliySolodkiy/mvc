<?php

namespace Core\Controllers;

use Core\Views\View;
use Core\Helpers\Message;

class UserController extends Controller
{
    public function users()
    {
        $title = 'Users';
        $users = [
            [
                'name' => 'Bob',
                'email' => 'bob@gmail.com',
            ],
            [
                'name' => 'John',
                'email' => 'john@gmail.com',
            ],
        ];
        View::render('users', compact('title', 'users'));
    }
    public function signin()
    {
        $title = 'Sign In';
        View::render('signin', compact('title'));
    }

    public function sendSignInForm()
    {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        if (!$email || !$password) {
            Message::set('You must fill all fields', 'danger');
            self::redirect('/signin');
        }

        Message::set('OK!');
        self::redirect('/signin');
    }

    public function signup()
    {
        $title = 'Sign Up';
        View::render('signup', compact('title'));
    }

    public function sendSignUpForm()
    {
        $email = $_POST['email'] ?? '';
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';
        if (!$email || !$password || !$login) {
            Message::set('You must fill all fields', 'danger');
            self::redirect('/signup');
        }

        Message::set('OK!');
        self::redirect('/signup');
    }
}
