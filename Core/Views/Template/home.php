<h1 class="text-center"><?= $title ?></h1>
<h2 class="text-center">Articles</h2>

<?php
foreach ($articles as $article) : ?>
    <article class="" m-4>
        <h3> <?= $article['title'] ?></h3>
        <div><?= $article['content'] ?></div>
    </article>
<?php endforeach ?>