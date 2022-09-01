<?php
return [
    '/' => ['HomeController', 'index'], //url adress > controller > method
    'contacts' => ['HomeController', 'contacts'],
    'send-email' => ['HomeController', 'sendEmail'],

    'book-create' => ['BookController', 'create'],
    'book-store' => ['BookController', 'store'],

    'users' => ['UserController', 'users'],
    'signin' => ['UserController', 'signin'],
    'sendSignInForm' => ['UserController', 'sendSignInForm'],
    'signup' => ['UserController', 'signup'],
    'sendSignUpForm' => ['UserController', 'sendSignUpForm'],
];
