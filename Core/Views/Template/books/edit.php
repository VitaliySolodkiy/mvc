<h1 class="text-center">Edit book</h1>

<form action="/book-update" method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="<?= $book->Name ?>">
    </div>

    <div class="form-group mt-3">
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control" value="<?= $book->Price ?>">
    </div>
    <input type="hidden" name="id" value="<?= $book->ID ?>">

    <button class="btn btn-primary mt-3">Save</button>

</form>