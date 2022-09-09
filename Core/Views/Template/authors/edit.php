<h1 class="text-center">Edit Author</h1>

<form action="/author-update" method="POST">
    <div class="form-group">
        <label for="name">First Name:</label>
        <input type="text" name="firstName" class="form-control" value="<?= $author->FirstName ?>">
    </div>
    <div class="form-group">
        <label for="name">Last Name:</label>
        <input type="text" name="lastName" class="form-control" value="<?= $author->LastName ?>">
    </div>
    <input type="hidden" name="id" value="<?= $author->ID ?>">

    <button class="btn btn-primary mt-3">Save</button>

</form>