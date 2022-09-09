<h1><?= "$author->FirstName $author->LastName" ?> books</h1>
<?php


if (count($authorsBooks) === 0) {
    echo "<h3>Author $author->FirstName $author->LastName has no books</h3>";
} else {
    foreach ($authorsBooks as $book) { ?>
        <ul>
            <li> <a href="/book-edit?id=<?= $book->ID ?>"><?= $book->Name ?></a>, (<?= $book->Price ?> UAH) |
                <a href="/book/<?= $book->ID ?>">Read</a>
                <form action="/book-delete" method="POST" style="display: inline-block;">
                    <input type="hidden" name="id" value="<?= $book->ID ?>">
                    <button class="btn btn-danger btn-sm">✕</button>
                </form>
            </li>
        </ul>
<?php }
} ?>