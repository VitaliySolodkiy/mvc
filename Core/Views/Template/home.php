<h1 class="text-center"><?= $title ?></h1>
<h2 class="text-center">Books</h2>

<a href="/book-create" class="btn btn-primary mb-3">Create book</a>
<a href="/books-download" class="btn btn-success mb-3">Download books</a>
<a href="/books-excel" class="btn btn-danger mb-3">Download books to excel</a>
<a href="/books-upload" class="btn btn-success mb-3">Upload books from excel</a>

<?php

foreach ($books as $book) : ?>
    <ul>
        <li> <a href="/book-edit?id=<?= $book->ID ?>"><?= $book->Name ?></a>, (<?= $book->Price ?> UAH) |
            <a href="/book/<?= $book->ID ?>">Read</a>
            <form action="/book-delete" method="POST" style="display: inline-block;">
                <input type="hidden" name="id" value="<?= $book->ID ?>">
                <button class="btn btn-danger btn-sm">✕</button>
            </form>
        </li>
    </ul>
<?php endforeach ?>