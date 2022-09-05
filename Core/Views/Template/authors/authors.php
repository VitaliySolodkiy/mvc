<h2 class="text-center">Authors</h2>

<a href="/author-create" class="btn btn-primary mb-3">Create author</a>

<?php

foreach ($authors as $author) : ?>
    <ul>
        <li> <?= "$author->FirstName $author->LastName" ?></li>
    </ul>
<?php endforeach ?>