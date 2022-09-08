<h1 class="text-center"><?= $title ?></h1>
<h2 class="text-center">Books</h2>

<a href="/book-create" class="btn btn-primary mb-3">Create book</a>

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