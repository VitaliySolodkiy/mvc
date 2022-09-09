<h2 class="text-center">Authors</h2>

<a href="/author-create" class="btn btn-primary mb-3">Create author</a>

<?php

foreach ($authors as $author) : ?>
    <ul>
        <li> <?= "$author->FirstName $author->LastName" ?>
            <a href="/author-edit?id=<?= $author->ID ?>" class="btn btn-outline-primary btn-sm">Edit</a>
            <form action="/author-delete" method="POST" style="display: inline-block;">
                <input type="hidden" name="id" value="<?= $author->ID ?>">
                <button class="btn btn-outline-danger btn-sm">Delite</button>
            </form>
            <a href="/author/<?= $author->ID ?>" class="btn btn-outline-success btn-sm">Books</a>
        </li>

    </ul>
<?php endforeach ?>