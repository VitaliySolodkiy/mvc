<?php
return [
    '/' => ['HomeController', 'index'], //url adress > controller > method
    'contacts' => ['HomeController', 'contacts'],
    'send-email' => ['HomeController', 'sendEmail'],
    'users' => ['UserController', 'users'],
    'signin' => ['UserController', 'signin'],
    'sendSignInForm' => ['UserController', 'sendSignInForm'],
    'signup' => ['UserController', 'signup'],
    'sendSignUpForm' => ['UserController', 'sendSignUpForm'],
];
