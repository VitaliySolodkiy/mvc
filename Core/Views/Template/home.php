<h1 class="text-center"><?= $title ?></h1>
<h2 class="text-center">Books</h2>

<a href="/book-create" class="btn btn-primary mb-3">Create book</a>

<?php

foreach ($books as $book) : ?>
    <ul>
        <li> <?= $book->Name ?>, (<?= $book->Price ?> UAH)</li>
    </ul>
<?php endforeach ?>