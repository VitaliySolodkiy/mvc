<h1 class="text-center">Create book</h1>

<form action="/book-store" method="POST">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group mt-3">
        <label for="price">Price:</label>
        <input type="text" name="price" class="form-control">
    </div>

    <button class="btn btn-primary mt-3">Save</button>

</form>