<?php
return [
    '/' => ['HomeController', 'index'], //url adress > controller > method
    'contacts' => ['HomeController', 'contacts'],
    'send-email' => ['HomeController', 'sendEmail'],

    'book-create' => ['BookController', 'create'],
    'book-store' => ['BookController', 'store'],
    'book-delete' => ['BookController', 'delete'],
    'book-edit' => ['BookController', 'edit'],
    'book-update' => ['BookController', 'update'],
    'book/(\d+)' => ['BookController', 'show'],

    'authors' => ['AuthorController', 'show'],
    'author-create' => ['AuthorController', 'authorCreate'],
    'author-save' => ['AuthorController', 'authorSave'],

    'users' => ['UserController', 'users'],
    'signin' => ['UserController', 'signin'],
    'sendSignInForm' => ['UserController', 'sendSignInForm'],
    'signup' => ['UserController', 'signup'],
    'sendSignUpForm' => ['UserController', 'sendSignUpForm'],

    //в ключах не сам урл адрес, а регулярное выражение
    //проверяем соответствует ли урл адрес регулярному выражению

];
